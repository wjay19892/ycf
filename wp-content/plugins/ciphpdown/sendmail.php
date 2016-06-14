<?php
require_once('../../../wp-config.php');
get_header();
$html="<div id='main_wrapper'>
<div id='wrapper'>
<div class='main-container'>
<table align='center' width='100%' cellpadding='5' cellspacing='0'>
<tr>
<td align='center' class='font_title' colspan='2'>您购买的隐藏字段已经发送到您的注册邮箱<br>如果未收到请联系管理员!<br/>
<br/>
<br/><br/><br/><br/><br/></td>
</tr>
</table>
</div>
</div>
</div>";
echo $html;
get_footer();
exit;