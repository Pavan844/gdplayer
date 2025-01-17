<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fluid Player</title>

 <!-- PHP Code -->
<?php include("../../config.php");?>

<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
<style>
		body {
			padding: 0;
			margin: 0;
		}

		video {
			width: 100%;
			height: 100%;
			position: absolute;
		}

img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
       display: none;
}

.disclaimer{
display:none;
}

.fp_hd_source { 
color: #3F51B5 !important; 
}
</style>
</head>

<body>
<video id="video" controls>
    <source <?php if($VideoQuality1 == '720p' || $VideoQuality1 == '1080p' || $VideoQuality1 == '1440p'){ echo "data-fluid-hd"; }?> src='<?php echo $VideoSrc1; ?>' title='<?php echo $VideoQuality1; ?>' type='<?php echo $VideoType1; ?>' />

    <source <?php if($VideoQuality2 == '720p' || $VideoQuality2 == '1080p' || $VideoQuality2 == '1440p'){ echo "data-fluid-hd"; }?> src='<?php echo $VideoSrc2; ?>' title='<?php echo $VideoQuality2; ?>' type='<?php echo $VideoType2; ?>' />

    <source <?php if($VideoQuality3 == '720p' || $VideoQuality3 == '1080p' || $VideoQuality3 == '1440p'){ echo "data-fluid-hd"; }?> src='<?php echo $VideoSrc3; ?>' title='<?php echo $VideoQuality3; ?>' type='<?php echo $VideoType3; ?>' />

<source <?php if($VideoQuality4 == '720p' || $VideoQuality4 == '1080p' || $VideoQuality4 == '1440p'){ echo "data-fluid-hd"; }?> src='<?php echo $VideoSrc4; ?>' title='<?php echo $VideoQuality4; ?>' type='<?php echo $VideoType4; ?>' />

    <track label="<?php echo $label1; ?>" kind="<?php echo $kind1; ?>" srclang="<?php echo $srclang1; ?>" src="<?php echo $VideoTrack1; ?>" <?php echo $default1; ?> />
    <track label="<?php echo $label2; ?>" kind="<?php echo $kind2; ?>" srclang="<?php echo $srclang2; ?>" src="<?php echo $VideoTrack2; ?>" <?php echo $default2; ?> />

</video>

<script>
    var myFP = fluidPlayer(
        'video',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true,
			"playbackRates": [
				"x2",
				"x1.5",
				"x1",
				"x0.5"
			]
		},
		"htmlOnPauseBlock": {
			"html": null,
			"height": null,
			"width": null
		},
		"autoPlay": false,
		"mute": false,
		"allowTheatre": true,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": true,
		"playButtonShowing": true,
		"fillToContainer": false,
		"primaryColor": "#3F51B5",
		"posterImage": "<?php echo $VideoPoster; ?>"
	},
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
<?php 
if($VideoTrack1 !== '' || $VideoTrack2 !== ''){ 

?>
,
layoutControls: {
            subtitlesEnabled: true,
        }
<?php
}
?>

});
</script>

</body>
</html>