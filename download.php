<?php

$file = $_GET['file'];
$file_path = "assets/resume.pdf".$file; // Change this to the path where your asset is stored

if(file_exists($assets/resume.pdf)) {
    header("Content-Disposition: attachment; filename=".$assets/);
    readfile($assets/resume.pdf);
    exit;
} else {
    echo "File not found.";
}

?>