<?php 
error_reporting(0);

$api = $_GET['api'];
if($api == ''){
$api = "AIzaSyD739-eb6NzS_KbVJq1K8ZAxnrMfkIqPyw";
}
$server = $_GET['server'];
// $stream = $_GET['stream'];


// function to create three Drive Server/Stream Url's

function GetDriveStream($url, $api, $server, $stream) {

 $GetDomainURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; 

// Define File Name & Mode
$FileName = "../my_base_path.txt";
$ModeR = "r";

// Open a file in read mode 
$data = fopen("$FileName", "$ModeR"); 

//Read Full File Content
$ReadFile = fread($data, filesize($FileName));

 //Dir Path
$playerpath = $ReadFile;
$playerpath = substr($playerpath, 0, strrpos( $playerpath, '/'));


//drive.php File Path
$DrivePhpPath = $GetDomainURL.$playerpath."/resources/server/";
$DrivePhpFile = "drive.php";

$url = $url;
$url = substr($url, 0, strrpos( $url, '/'));

$search = array("https://drive.google.com/file/d/");
$replace = array("");
$string = "$url";
//replace
$id = (str_replace($search, $replace, $string));


if($server == 'Drive UC'){
$url = "https://drive.google.com/uc?export=download&confirm=yTib&id=" . $id;
return $url;

} else if($server == 'Drive PHP'){

$isStream = ($stream == "auto" ? '' : "&stream=". $stream);

// $url = $DrivePhpPath.$DrivePhpFile . "?id=" . $id . $isStream; 
$url = $DrivePhpPath.$DrivePhpFile . "?id=" . $id; 

return $url;

} else if($server == 'Drive API'){
$url = "https://www.googleapis.com/drive/v3/files/" . $id . "?alt=media&key=" . $api;
return $url;

} else{
$url = $id;
return $url;
}

    return $url; //returning the url
}
 
// usage
// url parameter can be your Google Drive Video Link
// api parameter can be your Google Drive API Key(AIzaSyD739-eb6NzS_KbVJq1K8ZAxnrMfkIqPyw) or null
// server parameter can be Drive UC, Drive PHP, Drive API or null
// stream parameter can be auto, 360p, 480p, 720p, 1080p or null

//Example 1
//$url = GetDriveStream("URL", "API", "SERVER", "STREAM");
//echo "$url";

//Example 2
/*
$url = GetDriveStream("https://drive.google.com/file/d/10LfO3UFS-CyLt6ZUG8__pCgJw9Njt27u/view?usp=drivesdk", "AIzaSyD739-eb6NzS_KbVJq1K8ZAxnrMfkIqPyw", "Drive PHP", "720p");
 echo "$url"; 
*/


$VideoSrc1 = $_GET['VideoSrc1'];
if (strpos($VideoSrc1, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$VideoSrc1 = GetDriveStream("$VideoSrc1", "$api", "$server", "360p");

}
else {
$VideoSrc1 = $_GET['VideoSrc1'];
}
$VideoType1 = $_GET['VideoType1'];
$VideoQuality1 = $_GET['VideoQuality1'];


$VideoSrc2 = $_GET['VideoSrc2'];
if (strpos($VideoSrc2, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$VideoSrc2 = GetDriveStream("$VideoSrc2", "$api", "$server", "720p");

}
else {
$VideoSrc2 = $_GET['VideoSrc2'];
}
$VideoType2 = $_GET['VideoType2'];
$VideoQuality2 = $_GET['VideoQuality2'];


$VideoSrc3 = $_GET['VideoSrc3'];
if (strpos($VideoSrc3, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$VideoSrc3 = GetDriveStream("$VideoSrc3", "$api", "$server", "1080p");

}
else {
$VideoSrc3 = $_GET['VideoSrc3'];
}
$VideoType3 = $_GET['VideoType3'];
$VideoQuality3 = $_GET['VideoQuality3'];


$VideoSrc4 = $_GET['VideoSrc4'];
if (strpos($VideoSrc4, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$VideoSrc4 = GetDriveStream("$VideoSrc4", "$api", "$server", "auto");

}
else {
$VideoSrc4 = $_GET['VideoSrc4'];
}
$VideoType4 = $_GET['VideoType4'];
$VideoQuality4 = $_GET['VideoQuality4'];


$VideoPoster = $_GET['VideoPoster'];
if ( strpos($VideoPoster, "https://drive.google.com/file/d/")!==false ){

//URL String Replace
$url = "$VideoPoster";
//URL String Replace
$search = array("https://drive.google.com/file/d/", "/view?usp=sharing", "/view?usp=drive_link", "/view?usp=drivesdk", "/view", "/preview", "https://drive.google.com/", "folderview?id=", "drive/folders/", "embeddedfolderview?id=", "#list", "#grid");
$replace = array("", "", "", "", "", "", "", "", "", "", "", "");
$string = "$url";
//replace
$Converted = (str_replace($search, $replace, $string));
// result ID
$ID = $Converted;

//Converted URL
$VideoPoster = "https://drive.google.com/thumbnail?authuser=0&sz=w720&id=" . $ID;
}
else if ($VideoPoster == ""){
//URL String Replace
$url = $_GET['VideoSrc1'];
//URL String Replace
$search = array("https://drive.google.com/file/d/", "/view?usp=sharing", "/view?usp=drive_link", "/view?usp=drivesdk", "/view", "/preview", "https://drive.google.com/", "folderview?id=", "drive/folders/", "embeddedfolderview?id=", "#list", "#grid");
$replace = array("", "", "", "", "", "", "", "", "", "", "", "");
$string = "$url";
//replace
$Converted = (str_replace($search, $replace, $string));
// result ID
$ID = $Converted;

//Converted URL
 $VideoPoster = "https://drive.google.com/thumbnail?authuser=0&sz=w720&id=" . $ID;
}else{
 $VideoPoster = $_GET['VideoPoster'];
} 


$kind1 = $_GET['kind1'];
$label1 = $_GET['label1'];
$srclang1 = $_GET['srclang1'];

$VideoTrack1 = $_GET['VideoTrack1'];
if (strpos($VideoTrack1, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$search6 = array("https://drive.google.com/file/d/", "/view?usp=sharing", "/view?usp=drive_link", "/view?usp=drivesdk", "/view", "/preview", "https://drive.google.com/", "folderview?id=", "drive/folders/", "embeddedfolderview?id=", "#list", "#grid");
$replace6 = array("https://drive.google.com/uc?export=view&confirm=yTib&id=", "", "", "", "", "", "", "", "", "", "", "");
$string6 = "$VideoTrack1";
//replace
$Converted6 = (str_replace($search6, $replace6, $string6));
//Converted URL
$VideoTrack1 = $Converted6;
// include("Tracks/save_vtt_1.php");
}
else {
$VideoTrack1 = $_GET['VideoTrack1'];
// include("Tracks/save_vtt_1.php");
}


$default1 = $_GET['default1'];


$kind2 = $_GET['kind2'];
$label2 = $_GET['label2'];
$srclang2 = $_GET['srclang2'];

$VideoTrack2 = $_GET['VideoTrack2'];
if (strpos($VideoTrack2, "https://drive.google.com/file/d/")!==false){

//URL String Replace
$search7 = array("https://drive.google.com/file/d/", "/view?usp=sharing", "/view?usp=drive_link", "/view?usp=drivesdk", "/view", "/preview", "https://drive.google.com/", "folderview?id=", "drive/folders/", "embeddedfolderview?id=", "#list", "#grid");
$replace7 = array("https://drive.google.com/uc?export=view&confirm=yTib&id=", "", "", "", "", "", "", "", "", "", "", "");
$string7 = "$VideoTrack2";
//replace
$Converted7 = (str_replace($search7, $replace7, $string7));
//Converted URL
$VideoTrack2 = $Converted7;
// include("Tracks/save_vtt_2.php");
}
else {
$VideoTrack2 = $_GET['VideoTrack2'];
// include("Tracks/save_vtt_2.php");
}


$default2 = $_GET['default2'];

// echo '<video controls height="100%"width="100%" autoplay="" preload="auto" src="'. $VideoSrc. '"></video>';
?>