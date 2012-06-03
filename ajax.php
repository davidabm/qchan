<?php

require 'engine.php';

$thumb_size = (!isset($_POST['thumb_size']) || $_POST['thumb_size']=='' || !is_numeric($_POST['thumb_size'])) ? THUMB_DEFAULT : $_POST['thumb_size'];
$is_thumb = (!isset($_POST['is_thumb']) || $_POST['is_thumb']=='' || $_POST['is_thumb']!='yes' && $_POST['is_thumb']!='no') ? IS_THUMB : ($_POST['is_thumb']=='yes');

if($_POST['type']=='url') {
	url_handler($thumb_size, $is_thumb, $_POST['addr']);
}elseif($_POST['type']=='grab') {
	grab_handler($_POST['addr']);
}elseif ($_POST['type']=='drop') {
	dragdrop_handler($thumb_size, $is_thumb, $_POST['name'], $_POST['file']);
}