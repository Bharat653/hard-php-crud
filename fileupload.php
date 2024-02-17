<?php

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" .$filename;
    echo $folder;
    move_uploaded_file($tempname,$folder);
?>
