<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', '', $title);
if ($title == 'index') {
    $title = 'home';
}elseif ($title == 'form') {
  $title = 'thank you';
}
$title = ucwords($title); ?>
