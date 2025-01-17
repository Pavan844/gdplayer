<?php
include("./player-path.php");

//Get Domain URL
 $DomainURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; 

//Define Video Plyr Directory or Location
$videoPlyr = "$playerpath";

$VideoSrc1 = $_GET['VideoSrc1'];
//URL String Replace
$search1 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace1 = array("https://drive.google.com/uc?export=download&confirm=yTib&id=", "", "", "");
$string1 = "$VideoSrc1";
//replace
$Converted1 = (str_replace($search1, $replace1, $string1));
//Converted URL
$VideoSrc1 = $Converted1;
$VideoSrc1 = urlencode("$VideoSrc1");

$VideoType1 = $_GET['VideoType1'];
$VideoType1 = urlencode("$VideoType1");

$VideoQuality1 = $_GET['VideoQuality1'];
$VideoQuality1 = urlencode("$VideoQuality1");


$VideoSrc2 = $_GET['VideoSrc2'];
//URL String Replace
$search2 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace2 = array("https://drive.google.com/uc?export=download&confirm=yTib&id=", "", "", "");
$string2 = "$VideoSrc2";
//replace
$Converted2 = (str_replace($search2, $replace2, $string2));
//Converted URL
$VideoSrc2 = $Converted2;
$VideoSrc2 = urlencode("$VideoSrc2");

$VideoType2 = $_GET['VideoType2'];
$VideoType2 = urlencode("$VideoType2");

$VideoQuality2 = $_GET['VideoQuality2'];
$VideoQuality2 = urlencode("$VideoQuality2");


$VideoSrc3 = $_GET['VideoSrc3'];
//URL String Replace
$search3 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace3 = array("https://drive.google.com/uc?export=download&confirm=yTib&id=", "", "", "");
$string3 = "$VideoSrc3";
//replace
$Converted3 = (str_replace($search3, $replace3, $string3));
//Converted URL
$VideoSrc3 = $Converted3;
$VideoSrc3 = urlencode("$VideoSrc3");

$VideoType3 = $_GET['VideoType3'];
$VideoType3 = urlencode("$VideoType3");

$VideoQuality3 = $_GET['VideoQuality3'];
$VideoQuality3 = urlencode("$VideoQuality3");

$VideoSrc4 = $_GET['VideoSrc4'];
//URL String Replace
$search4 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace4 = array("https://drive.google.com/uc?export=download&confirm=yTib&id=", "", "", "");
$string4 = "$VideoSrc4";
//replace
$Converted4 = (str_replace($search4, $replace4, $string4));
//Converted URL
$VideoSrc4 = $Converted4;
$VideoSrc4 = urlencode("$VideoSrc4");

$VideoType4 = $_GET['VideoType4'];
$VideoType4 = urlencode("$VideoType4");

$VideoQuality4 = $_GET['VideoQuality4'];
$VideoQuality4 = urlencode("$VideoQuality4");

$VideoPoster = $_GET['VideoPoster'];
//URL String Replace
$search5 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace5 = array("https://drive.google.com/thumbnail?authuser=0&sz=w720&id=", "", "", "");
$string5 = "$VideoPoster";
//replace
$Converted5 = (str_replace($search5, $replace5, $string5));
//Converted URL
$VideoPoster = $Converted5;
$VideoPoster = urlencode("$VideoPoster");


$kind1 = $_GET['kind1'];
$kind1 = urlencode("$kind1");

$label1 = $_GET['label1'];
$label1 = urlencode("$label1");

$srclang1 = $_GET['srclang1'];
$srclang1 = urlencode("$srclang1");

$VideoTrack1 = $_GET['VideoTrack1'];
//URL String Replace
$search6 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace6 = array("https://drive.google.com/uc?export=watch&confirm=yTib&id=", "", "", "");
$string6 = "$VideoTrack1";
//replace
$Converted6 = (str_replace($search6, $replace6, $string6));
//Converted URL
$VideoTrack1 = $Converted6;
$VideoTrack1 = urlencode("$VideoTrack1");

$default1 = $_GET['default1'];
$default1 = urlencode("$default1");


$kind2 = $_GET['kind2'];
$kind2 = urlencode("$kind2");

$label2 = $_GET['label2'];
$label2 = urlencode("$kind2");

$srclang2 = $_GET['srclang2'];
$srclang2 = urlencode("$srclang2");

$VideoTrack2 = $_GET['VideoTrack2'];
//URL String Replace
$search7 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace7 = array("https://drive.google.com/uc?export=watch&id=", "", "", "");
$string7 = "$VideoTrack2";
//replace
$Converted7 = (str_replace($search7, $replace7, $string7));
//Converted URL
$VideoTrack2 = $Converted7;
$VideoTrack2 = urlencode("$VideoTrack2");

$default2 = $_GET['default2'];
$default2 = urlencode("$default2");

//Final Generated Full URL
 $convertedURL = "$DomainURL$videoPlyr?VideoSrc1=$VideoSrc1&VideoType1=$VideoType1&VideoQuality1=$VideoQuality1&VideoSrc2=$VideoSrc2&VideoType2=$VideoType2&VideoQuality2=$VideoQuality2&VideoSrc3=$VideoSrc3&VideoType3=$VideoType3&VideoQuality3=$VideoQuality3&VideoSrc4=$VideoSrc4&VideoType4=$VideoType4&VideoQuality4=$VideoQuality4&VideoPoster=$VideoPoster&kind1=$kind1&label1=$label1&srclang1=$srclang1&VideoTrack1=$VideoTrack1&default1=$default1&kind2=$kind2&label2=$label2&srclang2=$srclang2&VideoTrack2=$VideoTrack2&default2=$default2&submit=Play+Video";

?>

