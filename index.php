<?php
include("../../mainfile.php");
$xoopsOption['template_main'] = "loremipsum.html";
include(XOOPS_ROOT_PATH."/header.php");
$xoTheme->addStylesheet(XOOPS_URL."/modules/loremipsum/templates/lorem_style.css");
$xoopsOption['show_rblock'] = 1;
include(XOOPS_ROOT_PATH."/footer.php");
?>