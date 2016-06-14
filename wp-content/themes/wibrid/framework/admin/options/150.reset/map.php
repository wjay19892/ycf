<?php

$resetPage = new QodeAdminPage("_reset", "重置", "fa fa-eraser");
$qodeFramework->qodeOptions->addAdminPage("Reset",$resetPage);

//Reset

$panel1 = new QodePanel("重置为默认","reset_panel");
$resetPage->addChild("panel1",$panel1);

	$reset_to_defaults = new QodeField("yesno","reset_to_defaults","no","重置为默认","This option will reset all Qode Options values to defaults");
	$panel1->addChild("reset_to_defaults",$reset_to_defaults);