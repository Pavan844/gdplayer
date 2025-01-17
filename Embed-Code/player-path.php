<?php 
// Define File Name & Mode
$FileName = "../include/my_base_path.txt";
$ModeR = "r";

// Open a file in read mode 
$data = fopen("$FileName", "$ModeR"); 

//Read Full File Content
$ReadFile = fread($data, filesize($FileName));

 //Player Path
$playerpath = $ReadFile . "video-url-plyr.php";
 
 ?>