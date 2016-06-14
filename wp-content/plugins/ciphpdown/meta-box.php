<?php
if ( !defined('ABSPATH') ) {exit;}
add_action( 'admin_menu', 'ice_create_down_box' );
add_action( 'save_post', 'ice_save_down_data' );
function ice_create_down_box() {
	add_meta_box( 'ali-post-meta-boxes','下载信息', 'ice_post_down_info', 'post', 'normal', 'high' );
}
function ice_down_post_boxes() {
	$meta_boxes = array(
	array(
    "name"             => "member_down",
    "title"            => "VIP下载",
    "desc"             => "VIP下载模式",
    "type"             => "select",
    "capability"       => "manage_options"
    ),
	array(
    "name"             => "start_down",
    "title"            => "收费下载",
    "desc"             => "启用收费下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
    array(
    "name"             => "down_price",
    "title"            => "商品价格",
    "desc"             => "销售商品的价格",
    "type"             => "text",
    "capability"       => "manage_options"
    ),
    array(
    "name"             => "down_url",
    "title"            => "下载地址",
    "desc"             => "一行一个，可以支持多个地址",
    "type"             => "textarea",
    "capability"       => "manage_options"
    ),
			array(
					"name"             => "hidden_content",
					"title"            => "隐藏字段",
					"desc"             => "纯文本内容(用户购买后自动把隐藏内容发邮件给用户)",
					"type"             => "text",
					"capability"       => "manage_options"
			)
	);
	return apply_filters( 'ali_post_boxes', $meta_boxes );
}
function ice_post_down_info() {
	global $post;
	$meta_boxes = ice_down_post_boxes(); 
?>
	<table class="form-table">
	<?php foreach ( $meta_boxes as $meta ) :
		$value = get_post_meta( $post->ID, $meta['name'], true );
		if ( $meta['type'] == 'text' )
			ice_show_text_input( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			ice_show_textarea( $meta, $value );
		elseif ( $meta['type'] == 'checkbox' )
			ice_show_checkbox( $meta, $value );
		elseif ($meta['type'] == 'select')
			ice_show_select( $meta, $value );
	endforeach; ?>
	</table>
<?php
}

function ice_show_select( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:10%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<input type="radio" name="<?php echo $name; ?>" <?php if(wp_specialchars( $value, 1 )=='4') echo 'checked'?> value="4" />VIP专享 &nbsp;
			<input type="radio" name="<?php echo $name; ?>" <?php if(wp_specialchars( $value, 1 )=='3') echo 'checked'?> value="3" />VIP免费下载 &nbsp;
			<input type="radio" name="<?php echo $name; ?>" <?php if(wp_specialchars( $value, 1 )=='2') echo 'checked'?> value="2" />VIP5折下载&nbsp;
			<input type="radio" name="<?php echo $name; ?>" <?php if(wp_specialchars( $value, 1 )=='1') echo 'checked'?> value="1" />原价下载&nbsp;
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
			<br />
			<p class="description"><?php echo $desc; ?></p>
		</td>
	</tr>
	<?php
}
function ice_show_text_input( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:10%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo wp_specialchars( $value, 1 ); ?>" size="30" tabindex="30" style="width: 97%;" />
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
			<br />
			<p class="description"><?php echo $desc; ?></p>
		</td>
	</tr>
	<?php
}
function ice_show_textarea( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:10%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( $value, 1 ); ?></textarea>
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    <br />
			<p class="description"><?php echo $desc; ?></p>		</td>
	</tr>
	<?php
}
function ice_show_checkbox( $args = array(), $value = false ) {
	extract( $args ); ?>
<tr>
		<th style="width:10%;">
	<label for="<?php echo $name; ?>"><?php echo $title; ?></label>		</th>
		<td>
    <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="yes"
    <?php if ( htmlentities( $value, 1 ) == 'yes' ) echo ' checked="checked"'; ?>
    style="width: auto;" />
    <input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    <span class="description"><?php echo $desc; ?></span>
    </td>
	</tr>
	<?php }
function ice_save_down_data( $post_id ) {
		if($_POST['start_down']=="yes" && is_numeric($_POST['down_price'])==false)
		{
			wp_die('价格必须是数字');
		}
		$meta_boxes = array_merge( ice_down_post_boxes() );
		foreach ( $meta_boxes as $meta_box ) :
		if ( !wp_verify_nonce( $_POST[$meta_box['name'] . '_input_name'], plugin_basename( __FILE__ ) ) )
			return $post_id;
		if ( 'page' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		elseif ( 'post' == $_POST['post_type'] && !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$data = stripslashes( $_POST[$meta_box['name']] );
		if ( get_post_meta( $post_id, $meta_box['name'] ) == '' )
			add_post_meta( $post_id, $meta_box['name'], $data, true );
		elseif ( $data != get_post_meta( $post_id, $meta_box['name'], true ) )
			update_post_meta( $post_id, $meta_box['name'], $data );
		elseif ( $data == '' )
			delete_post_meta( $post_id, $meta_box['name'], get_post_meta( $post_id, $meta_box['name'], true ) );
	endforeach;
}
?>