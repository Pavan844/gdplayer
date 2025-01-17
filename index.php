<?php
// Turn off error reporting
error_reporting(0);
include("./config-web-info.php");
?>
<?php
//if(!file_exists("./include/my_base_path.txt")){    
include("./include/base-path.php");
//  die();
//}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $website_title.' '.$website_version.' | Mobile Site'; ?></title>

<script>
msg = " | Desktop Site - ";
msg = "<?php echo $website_title.' '.$website_version; ?>" + msg;position = 0;
function scrolltitle() {
document.title = msg.substring(position, msg.length) + msg.substring(0, position); position++;
if (position > msg.length) position = 0
window.setTimeout("scrolltitle()",170);
}
scrolltitle();
</script>
<link rel="icon" type="image/png" href="<?php echo("$logo");?>"/>
<link rel="stylesheet" href="./resources/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
html {
  scroll-behavior: smooth;
}

.fa-spin {
  animation-duration: 10s; // or something else
}

img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;
}

.disclaimer{
display:none;
}

.input_url_style {
color: black;
background: #333333;
border: 1px solid white;
width:100%;
}

select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
text-align: center;
}

</style>
<style>
* {
/* box-sizing: border-box; */
}
body {
font-family: "Lato", sans-serif;
width: 100%;
}

/* Style the tab */
.tab {
float: left;
border: 1px solid #ccc;
background-color: #f1f1f1;
width: 30%;
height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
display: block;
background-color: inherit;
color: black;
padding: 22px 16px;
width: 100%;
border: none;
outline: none;
text-align: left;
cursor: pointer;
transition: 0.3s;
font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
float: left;
padding: 0px 12px;
border: 1px solid #ccc;
width: 70%;
border-left: none;
height: 300px;
}

.container .welcome {
   font-family: sans-serif;
  /* text-transform: uppercase; */
   display: block;
}

.container {
   text-align: center;
   position: absolute
   /*
   left: 50%;
   top: 50%;
   */
   transform: translate(-50%,-50%); 
   width: 100%;
}

.welcome {
   font-weight: 700;
 /*  color: #fff; */
   color: #333333;
   letter-spacing: 8px;
   margin-bottom: 20px;
   background: #f1f1f1; 
   position: relative;
   animation: text 3s 1;
}

.muzile {
   
 /*  color: #70a1ff; */
font-weight: 700;
 color: white; 
background: #000; 
opacity: 0.5;
}

@keyframes text {
   0%{
       color: #000;
       margin-bottom: -40px;
   }

   30%{
       letter-spacing: 25px;
       margin-bottom: -40px;
   }

   85%{
       letter-spacing: 8px;
       margin-bottom: -40px;
   }
}

.divheading {
font-weight: 700;
 color: #35FFFF;
background: #000; 
opacity: 0.5;
}

</style>

<script>
    if (window.innerWidth >= 800) {
        window.location.href = "./index2.php"; 
    }
</script>
<script >
  window.addEventListener('resize', function() {
  //  alert(screen.width);
    if (window.innerWidth >= 800) {
        window.location.href = "./index2.php"; 
    }
 });
</script>

</head>

<body>
<!-- HTML -->
<div class="container">  
<form id="contact" >
<center>
<div class="container">
   <h1 class="welcome"><?php echo $website_title; ?></h1>
   <p class="muzile"><?php echo $website_version; ?>
</p>
    </div>

<!--
<h3><?php echo $website_title; ?></h3>
<h4><?php echo $website_version; ?></i>
</h4> 
-->
</center>

<fieldset style="color: white; background-color: #333333;">
<!--
<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>
-->
<div class="tab" style="overflow: scroll;">
<button class="tablinks" onclick="openCity(event, 'Video'); return false;" id="defaultOpen">Video</button>
<button class="tablinks" onclick="openCity(event, 'Poster'); return false;">Poster</button>
<button class="tablinks" onclick="openCity(event, 'Track'); return false;">Track</button>
<button class="tablinks" onclick="openCity(event, 'Player'); return false;">Player</button>
<button class="tablinks" onclick="openCity(event, 'Server'); return false;">Server</button>
<button class="tablinks" onclick="openCity(event, 'Embed'); return false;">Embed</button>
</div>

<div id="Video" class="tabcontent" style="overflow: scroll;">
<br>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Video
</h2>

<div style="background: ; border:1px solid #35FFFF; padding-top: 50px;">

<form name="form" action="#" method="get">

<p style="color: white; background: ;">Enter Video 1- URL</p>
<input class="input_url_style" type="url" name="VideoSrc1" value="" placeholder="https://my-video-360p.mp4">
<br/><br/>

type
<select name="VideoType1" style="padding:0px; width: 64px;">
<option value="" hidden>Select</option>
<option value="" disabled>Video Types-</option>
<option value="">Off</option>
<option value="video/mp4" selected>mp4</option>
<option value="video/webm">webm</option>
<option value="video/ogg">ogg</option>
</select>

label
<select name="VideoQuality1" style="padding:0px; width: 66px;">
<option value="" style="display:none;">Select</option>
<option value="" disabled>Video Qualities-</option>
<option value="" selected>Off</option>
<option value="360p" selected>360p</option>
<option value="480p">480p</option>
<option value="576p">576p</option>
<option value="720p">720p</option>
<option value="1080p">1080p</option>
<option value="1440p">1440p</option>
</select>
<br/><br/>
</div>
<br/>

<div style="background: ; border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">Enter Video 2- URL</p>
<input class="input_url_style" type="url" name="VideoSrc2" value="" placeholder="https://my-video-480p.mp4">
<br/><br/>

type
<select name="VideoType2" style="padding:0px; width: 64px;">
<option value="" hidden>Select</option>
<option value="" disabled>Video Types-</option>
<option value="" selected>Off</option>
<option value="video/mp4">mp4</option>
<option value="video/webm">webm</option>
<option value="video/ogg">ogg</option>
</select>

label
<select name="VideoQuality2" style="padding:0px; width: 66px;">
<option value="" style="display:none;">Select</option>
<option value="" disabled>Video Qualities-</option>
<option value="" selected>Off</option>
<option value="360p">360p</option>
<option value="480p">480p</option>
<option value="576p">576p</option>
<option value="720p">720p</option>
<option value="1080p">1080p</option>
<option value="1440p">1440p</option>
</select>
<br/><br/>
</div>
<br/>

<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">Enter Video 3- URL</p>
<input class="input_url_style" type="url" name="VideoSrc3" value="" placeholder="https://my-video-720p.mp4">
<br/><br/>

type
<select name="VideoType3" style="padding:0px; width: 64px;">
<option value="" hidden>Select</option>
<option value="" disabled>Video Types-</option>
<option value="" selected>Off</option>
<option value="video/mp4">mp4</option>
<option value="video/webm">webm</option>
<option value="video/ogg">ogg</option>
</select>

label
<select name="VideoQuality3" style="padding:0px; width: 66px;">
<option value="" style="display:none;">Select</option>
<option value="" disabled>Video Qualities-</option>
<option value="" selected>Off</option>
<option value="360p">360p</option>
<option value="480p">480p</option>
<option value="576p">576p</option>
<option value="720p">720p</option>
<option value="1080p">1080p</option>
<option value="1440p">1440p</option>
</select>
<br/><br/>
</div>
<br/>

<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">Enter Video 4- URL</p>
<input class="input_url_style" type="url" name="VideoSrc4" value="" placeholder="https://my-video-1080p.mp4">
<br/><br/>

type
<select name="VideoType4" style="padding:0px; width: 64px;">
<option value="" hidden>Select</option>
<option value="" disabled>Video Types-</option>
<option value="" selected>Off</option>
<option value="video/mp4">mp4</option>
<option value="video/webm">webm</option>
<option value="video/ogg">ogg</option>
</select>

label
<select name="VideoQuality4" style="padding:0px; width: 66px;">
<option value="" style="display:none;">Select</option>
<option value="" disabled>Video Qualities-</option>
<option value="" selected>Off</option>
<option value="360p">360p</option>
<option value="480p">480p</option>
<option value="576p">576p</option>
<option value="720p">720p</option>
<option value="1080p">1080p</option>
<option value="1440p">1440p</option>
</select>
<br/><br/>
</div>
<br/>
<input onclick="openCity(event, 'Poster'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>
<br/><br/><br/>



</div>
</div>
</div>    
</center>

</section>
</div>

<div id="Poster" class="tabcontent" style="overflow: scroll;">
<br>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Poster
</h2>

<div style="border:1px solid #35FFFF; padding-top: 50px;">


<p style="color: white; background: ;">Enter Poster- URL</p>
<input class="input_url_style" type="url" name="VideoPoster" value="" placeholder="https://my-poster-image.jpg">
<br/><br/><br/><br/>
</div>
<br/>

<input onclick="openCity(event, 'Track'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>
<br/><br/><br/>


</div>
</div>
</div>    
</center>

</section>
</div>

<div id="Track" class="tabcontent" style="overflow: scroll;">
<br/>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 2px;">
Track
</h2>

<div style="border:0px solid #35FFFF; padding-top: 0px;">


<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">
Enter Track 1- URL</p>

<input class="input_url_style" type="url" name="VideoTrack1" value="" placeholder="https://my-captions-track1.vtt">
<br/><br/>


kind
<select name="kind1" style="text-align-last:center; padding:0px; width: 75px;">
<option value="" selected>Off</option>
<option value="captions">captions</option>
<option value="subtitles">subtitles</option>
<option value="metadata">metadata</option>
</select>


srclang
<select name="srclang1" style="text-align-last:center; padding:0px; width: 40px;">
<option value="">off</option>
<option value="en">en</option>
<option value="hi">hi</option>
<option value="fr">fr</option>
</select>
<br/><br/>

label
<select name="label1" style="text-align-last:center; padding:0px; width: 72px;">
<option value="">Select</option>
<option value="English">English</option>
<option value="Hindi">Hindi</option>
<option value="Français">Français</option>
</select>

default
<select id="default1" name="default1" style="text-align-last:center; padding:0px; width: 43px;" onchange="isTrack1default(this)">
<option value="" selected>No</option>
<option value="default">Yes</option>
</select>
<br/><br/>
</div>
<br/>

<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">
Enter Track 2- URL</p>
<input class="input_url_style" type="url" name="VideoTrack2" value="" placeholder="https://my-captions-track2.vtt">
<br/><br/>
kind
<select name="kind2" style="text-align-last:center; padding:0px; width: 75px;">
<option value="" selected>Off</option>
<option value="captions">captions</option>
<option value="subtitles">subtitles</option>
<option value="metadata">metadata</option>
</select>


srclang
<select name="srclang2" style="text-align-last:center; padding:0px; width: 40px;">
<option value="">off</option>
<option value="en">en</option>
<option value="hi">hi</option>
<option value="fr">fr</option>
</select>
<br/><br/>

label
<select name="label2" style="text-align-last:center; padding:0px; width: 72px;">
<option value="">Select</option>
<option value="English">English</option>
<option value="Hindi">Hindi</option>
<option value="Français">Français</option>
</select>

default
<select id="default2" name="default2" style="text-align-last:center; padding:0px; width: 43px;" onchange="isTrack2default(this)">
<option value="" selected>No</option>
<option value="default">Yes</option>
</select>
<br/><br/>

</div>
<br/>
<script>
function isTrack1default(selectObject) {
  var value = selectObject.value;  
if(value == 'default'){
document.getElementById("default2").disabled = true;
} else if(value == ''){
document.getElementById("default2").disabled = false;
}
}

function isTrack2default(selectObject) {
  var value = selectObject.value;  
if(value == 'default'){
document.getElementById("default1").disabled = true;
}else if(value == ''){
document.getElementById("default1").disabled = false;
}
}
</script>

<input onclick="openCity(event, 'Player'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>

<br/><br/><br/>

</div>


</div>
</div>
</div>
</center> 
</section>
</div>


<div id="Player" class="tabcontent" style="overflow: scroll;">
<br>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Player
</h2>

<div style="border:1px solid #35FFFF; padding-top: 50px;">


<p style="color: white; background: ;">Select Video Player</p>

<select id="player" name="player" style="text-align-last:center; padding:0px; width: 85px;">
<option value="video.js" selected>video.js</option>
<option value="jw player">jw player</option>
<option value="fluid player">fluid player</option>
</select>
<br/><br/><br/>
</div>
<br/>

<input onclick="openCity(event, 'Server'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>
<br/><br/><br/>

</div>
</div>
</div>    
</center>

</section>
</div>


<div id="Server" class="tabcontent" style="overflow: scroll;">
<br>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Server
</h2>

<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">Select Stream Server</p>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #04AA6}

th {
  background-color: #f2f2f2;
  color: black;
}
</style>

<select id="server" name="server" style="text-align-last:center; padding:0px; width: 85px;">
<option value="Drive PHP" selected>Drive PHP</option>
<option value="Drive API">Drive API</option>
<option value="Drive UC">Drive UC</option>
</select>
<br><br/>

<div id="api_box">
<p style="color: white; background: ;">Enter Drive API Key</p>
<input id="api" name="api" class="input_url_style"  type="text" value="" placeholder="AIzaSyD739eb6NzS_**********xnrMfkIqPyw" />
<br/><br/>
</div>
<script>
$('#api_box').slideUp(1500);

$('#server').change(function() {
var ServerValue = $(this).val();
var ServerText = $(this).text();

if(ServerValue == "Drive API" || ServerText == "Drive PHP"){
  $('#api_box').slideDown(1500);
}else{
  $('#api_box').slideUp(1500);
}

});
</script>

<table>
  <tr>
    <th>Servers</th>
    <th>File Size</th>
  </tr>
  <tr>
    <td>Drive PHP</td>
    <td>Unlimited</td>
  </tr>
  <tr>
    <td>Drive API</td>
    <td>Unlimited</td>
  </tr>
  <tr>
    <td>Drive UC</td>
    <td>100 MB</td>
  </tr>

</table>

</div>
<br/>

<input onclick="openCity(event, 'Embed'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>
<br/><br/><br/>

</div>
</div>
</div>    
</center>

</section>
</div>


<div id="Embed" class="tabcontent" style="overflow: scroll;">
<br>
<section>
<center>
<div class="container" style="padding-bottom:10px;">
<div class="row">
<div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Embed
</h2>

<div style="border:1px solid #35FFFF; padding-top: 50px;">
<p style="color: white; background: ;">iframe sizing </p>

<label for="width" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: silver; ">width:</label>
<input class="input-Width" type="text" name="width" id="width" value="100%" style="width: 25%;
  padding: 3px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;"/>

<label for="height" style="margin: 0.9em 0 9em 0; font-size: 1.1em; font-weight: 700; color: silver; ">height:</label>
<input class="input-Height" type="text" name="height" id="height" value="400px" style="width: 25%;
  padding: 3px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;"/>
<br/>

<br/><br/>
</div>
<br/>

<!--
<input onclick="openCity(event, 'Play'); return false;" class="btn btn-success" style="padding: 3px; padding-left: 20px; padding-right: 20px; text-align: center; cursor: pointer;" type="button" value="Next"/>
<br/><br/><br/>
-->

</div>
</div>
</div>    
</center>

</section>
</div>

</fieldset>

<!--
<fieldset>
<label for="server3"><b>DOWNLOAD SERVER3 (default)<b></label>
<select id="server3" name="server3">
<option vaue="ON">ON</option>
<option vaue="OFF" selected="selected">OFF</option>
</select>
<br><br/>
</fieldset>
-->


<fieldset>

   <p class="divheading">Preview</p>
<iframe tabindex="4" scrolling="no" src="" frameborder="0" width="100%  " height="400" allowfullscreen="allowfullscreen"></iframe>
</fieldset>

<fieldset>
<style>
/* Hide scrollbar for Chrome, Safari and Opera */
.textarea::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.textarea {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
</style>
<p class="divheading">Embed URL</p>
<textarea onclick="copy(this);" id="embed-url" class="textarea" placeholder="Embed URL..." tabindex="5" style="height:100px; width:100%; color:pink; background: black;" readonly></textarea>
</fieldset>

<fieldset>
<p class="divheading">Embed Code</p>
<textarea onclick="copy(this);" id="embed-code" class="textarea" placeholder="Embed Code..." tabindex="5" style="height:100px; width:100%; color:pink; background: black;" readonly></textarea>
</fieldset>

<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending"><i style="margin-top:3px;" class="fa fa-cog fa-spin" aria-hidden="true"></i>
Create Player</button>
</fieldset>

<p class="copyright">© <?php echo date('Y'); ?> <a href="https://youtube.com/@trcoder202" target="_blank" title="Colorlib"><?php echo $author; ?></a></p>
</form>
</div>  
    

<!-- JS -->
<script>
$('iframe').hide();
$('input').hide();
$("input").slideDown(1500);
$('#embed-url').hide();
$('#embed-code').hide();
$('button').hide();
$("button").slideDown(2500);
$('.divheading').hide();

$(document).ready(function(){
$('form').submit(function(e){
e.preventDefault();

// transform FormData into query string
const myForm = document.getElementById("contact");
const queryString = new URLSearchParams(new FormData(myForm)).toString();
// alert(queryString);

var GetDomainURL = (window.location.protocol + "//" + window.location.hostname);
var loc = window.location.pathname;
var dir = loc.substring(0, loc.lastIndexOf('/'));
var player = $("#player :selected").text();
var iframeWidth = document.getElementById("width").value;
var iframeHeight = document.getElementById("height").value;

if(player === 'video.js'){
var newURL = (GetDomainURL+ "" +dir+ "/include/video.js-player/video.js-player.php?" + queryString);
$('iframe').attr( "src", newURL ).slideDown(3000);
$('iframe').attr( "width", iframeWidth );
$('iframe').attr( "height", iframeHeight );

$('#embed-url').val(GetDomainURL+ '' +dir+ '/include/video.js-player/video.js-player.php?' + queryString).slideDown(3000);

$('#embed-code').val('<iframe src="' +GetDomainURL+ '' +dir+ '/include/video.js-player/video.js-player.php?' + queryString + '" frameborder="0" width="' +iframeWidth+ '" height="' +iframeHeight+ '" allowfullscreen="allowfullscreen" scrolling="no"></iframe>').slideDown(3000);

$("body"). css("background-color","dodgerblue"); 
$("#contact-submit"). css("background-color","dodgerblue");
}


if(player === 'jw player'){
var newURL = (GetDomainURL+ "" +dir+ "/include/jwplayer/jwplayer.php?" + queryString);
$('iframe').attr( "src", newURL ).slideDown(3000);
$('iframe').attr( "width", iframeWidth );
$('iframe').attr( "height", iframeHeight );

$('#embed-url').val(GetDomainURL+ '' +dir+ '/include/jwplayer/jwplayer.php?' + queryString).slideDown(3000);

$('#embed-code').val('<iframe src="' +GetDomainURL+ '' +dir+ '/include/jwplayer/jwplayer.php?' + queryString + '" frameborder="0" width="' +iframeWidth+ '" height="' +iframeHeight+ '" allowfullscreen="allowfullscreen" scrolling="no"></iframe>').slideDown(3000);

$("body"). css("background-color","red"); 
$("#contact-submit"). css("background-color","red");
}


if(player === 'fluid player'){
var newURL = (GetDomainURL+ "" +dir+ "/include/fluidplayer/fluidplayer.php?" + queryString);
$('iframe').attr( "src", newURL ).slideDown(3000);
$('iframe').attr( "width", iframeWidth );
$('iframe').attr( "height", iframeHeight );

$('#embed-url').val(GetDomainURL+ '' +dir+ '/include/fluidplayer/fluidplayer.php?' + queryString).slideDown(3000);

$('#embed-code').val('<iframe src="' +GetDomainURL+ '' +dir+ '/include/fluidplayer/fluidplayer.php?' + queryString + '" frameborder="0" width="' +iframeWidth+ '" height="' +iframeHeight+ '" allowfullscreen="allowfullscreen" scrolling="no"></iframe>').slideDown(3000);

$("body"). css("background-color","#3F51B5"); 
$("#contact-submit"). css("background-color","#3F51B5");

}


$('.divheading').slideDown(3000);

});
});
</script>


<script>
//Copy Text Value
function copy(e) {
var id = e.id;
let textarea = document.getElementById(e.id);
textarea.select();
document.execCommand("copy");
return alert('Copied successfully!');
}
</script>

<script>
function openCity(evt, cityName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
