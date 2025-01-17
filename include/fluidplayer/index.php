<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fluid Player</title>
 
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
    <source data-fluid-hd src='<?php echo $VideoSrc1; ?>' title='<?php echo $VideoQuality1; ?>' type='<?php echo $VideoType1; ?>' />

    <source data-fluid-hd src='<?php echo $VideoSrc2; ?>' title='<?php echo $VideoQuality2; ?>' type='<?php echo $VideoType2; ?>' />

    <source src='<?php echo $VideoSrc3; ?>' title='<?php echo $VideoQuality3; ?>' type='<?php echo $VideoType3; ?>' />

<source src='<?php echo $VideoSrc4; ?>' title='<?php echo $VideoQuality4; ?>' type='<?php echo $VideoType4; ?>' />
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
});
</script>
</body>
</html>