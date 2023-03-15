<?php
require_once("./vendor/autoload.php");
require_once("./views/upload.php");

$file = new Files();

if(!empty($_FILES)){
 $file -> Validate_File();
 $file->Upload_File();
}

