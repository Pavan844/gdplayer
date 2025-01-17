<!DOCTYPE html>
<html lang="en">
<head>
  <title>GDrive Proxy Player</title>
<link rel="icon" type="../../image/png" href="./Images/blue-player-logo-512x512.png"/>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- PHP Code -->
<?php include("../../config.php");?>

 <!-- remove 000webhost Banner -->
 <link href="../remove-000webhost-Banner.css" rel="stylesheet">

<!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>


<!-- CSS Code -->
  <!--Add video.js Latest CSS Stylesheet-->
  <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
  <!-- Video.js base Extra CSS -->
  <link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet"/>
  <!-- Video.js Custom Blue Skin CSS -->
  <link href="./video.js-blue-skin/video.js-custom-blue-skin-style.css" rel="stylesheet"/>
  <!-- video.js-quality-selector.css -->
  <link href="./video.js-quality-selector/quality-selector.css" rel="stylesheet"/>
  <link rel='stylesheet' href='https://unpkg.com/silvermine-videojs-quality-selector/dist/css/quality-selector.css'>

<style>
body {
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
}	
.frame_border {
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
}	
video {
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
}	

		html, body {
			margin: 0;
			padding: 0;
		}
		#video_ctrl {
			position: absolute;
			width: 100% !important;
			height: 100% !important;
		}
                img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
       display: none;
}

.disclaimer{
display:none;
}
		
</style>
</head>
<body >
<!-- Video -->
<div id="div_video" class="frame_border">

<video id="video_ctrl" 
class="video-js vjs-fluid" 
controls 
preload="metadata"  
width="100%" 
height="100%"  
poster="<?php echo $VideoPoster; ?>" 
data-setup='{
            "aspectRatio":"16:9", "fluid": true,
            "playbackRates": [0.5, 0.75, 1, 1.25, 1.5, 1.75, 2, 4] }'
onerror="failed(event)"
>
            <source
              src="<?php echo $VideoSrc1; ?>"
              type="<?php echo $VideoType1; ?>"
              label="<?php echo $VideoQuality1; ?>"
            />
            <source
              src="<?php echo $VideoSrc2; ?>"
              type="<?php echo $VideoType2; ?>"
              label="<?php echo $VideoQuality2; ?>"
            />
            <source
              src="<?php echo $VideoSrc3; ?>"
              type="<?php echo $VideoType3; ?>"
              label="<?php echo $VideoQuality3; ?>"
            />
           <source
              src="<?php echo $VideoSrc4; ?>"
              type="<?php echo $VideoType4; ?>"
              label="<?php echo $VideoQuality4; ?>"
            />

       <track
              kind="<?php echo $kind1; ?>"
              label="<?php echo $label1; ?>"
              srclang="<?php echo $srclang1; ?>"
              src="<?php echo $VideoTrack1; ?>"
              <?php echo $default1; ?>
            />

       <track
              kind="<?php echo $kind2; ?>"
              label="<?php echo $label2; ?>"
              srclang="<?php echo $srclang2; ?>"
              src="<?php echo $VideoTrack2; ?>"
              <?php echo $default2; ?>
            />

<!-- Fallback for browsers that doesn't support HTML5 video tag. -->
<p>
  Your browser doesn't support HTML5 video tag.
  Here's <a href="<?php echo $VideoSrc1; ?>">a link to the video</a>
<p>

</video>
</div>

<!-- JS Code -->
  <!--Add video.js Latest JS Script-->
  <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
  <!--If you'd like to support IE8 (for Video.js versions prior to v7) --> 
  <script src='https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js'></script>	
  <!-- video.js-quality-selector js-->
  <script src="./video.js-quality-selector/silvermine-videojs-quality-selector.min.js"></script>
  <!-- js -->
  <script src="./scripts.js"></script>
 

<script>
 // Video playback errors
function failed(e) {
   // video playback failed - show a message saying why
   switch (e.target.error.code) {
     case e.target.error.MEDIA_ERR_ABORTED:
       // alert('You aborted the video playback.');
       break;
     case e.target.error.MEDIA_ERR_NETWORK:
       // alert('A network error caused the video download to fail part-way.');
       break;
     case e.target.error.MEDIA_ERR_DECODE:  
// alert('The video playback was aborted due to a corruption problem or because the video used features your browser did not support.');
       break;
     
case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:

// alert('The video could not be loaded, either because the server or network failed or because the format is not supported.');

break;

     default:
       // alert('An unknown error occurred.');
       break;
   }
  }
</script>
 </body>
 </html>