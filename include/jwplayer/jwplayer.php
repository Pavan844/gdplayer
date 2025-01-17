<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>JWPLAYER8 with Netflix Skin</title>

<!-- PHP Code -->
<?php include("../../config.php");?>

	<!-- CSS -->
<link rel="stylesheet" href="./jwplayer-netflix-skin/style.css">	
<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
       display: none;
}

.disclaimer{
display:none;
}
		
</style>

	<!-- JavaScript -->	
<!--
<script src="https://content.jwplatform.com/libraries/LJ361JYj.js"></script>
-->

<script src="https://ssl.p.jwpcdn.com/player/v/8.26.9/jwplayer.js"></script>
<script>
  jwplayer.key = "ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc="
</script>


<style type="text/css">*{margin:0;padding:0;outline:none;}#container{position:absolute;width:100%!important;height:100%!important;}*:focus{outline:none;}</style>
</head>
<body>
  
	<div id="container"></div>

<!-- JS -->
<script>

jwplayer("container").setup({

		    controls: true,
		    displaytitle: false,
		    fullscreen: "true",
		    primary: 'html5',
		    stretching: "uniform",
		    autostart: false,

		    skin: {
		    	name: 'Netflix',
		    },
/*
		    sharing: {
		    	sites: ["reddit","facebook","twitter","email"]
		    },
*/		     
		    captions: {
		        color: '#FFF',
		         fontSize: 14,
		         backgroundOpacity: 0,
		         edgeStyle: 'raised' 
		    },

		  playlist: [{
		   // title: "###",
		    //description: "###",
		    image: "<?php echo $VideoPoster; ?>",
		    sources: [{
		    file: "<?php echo $VideoSrc1; ?>",
		      label: '<?php echo $VideoQuality1; ?>',
		      'type': '<?php echo str_replace("video/","","$VideoType1"); ?>',
		      primary: 'html5',

		    },{
		    file: "<?php echo $VideoSrc2; ?>",
		      label: '<?php echo $VideoQuality2; ?>',
		      'type': '<?php echo str_replace("video/","","$VideoType2"); ?>',
		      primary: 'html5',

		    },{
		     file: "<?php echo $VideoSrc3; ?>",
		      label: '<?php echo $VideoQuality3; ?>',
		      'type': '<?php echo str_replace("video/","","$VideoType3"); ?>',
		      primary: 'html5',
		    },{
		     file: "<?php echo $VideoSrc4; ?>",
		      label: '<?php echo $VideoQuality4; ?>',
		      'type': '<?php echo str_replace("video/","","$VideoType4"); ?>',
		      primary: 'html5',
		    }],
		    captions: [{
		      file: "<?php echo $VideoTrack1; ?>",
		      label: '<?php echo $label1; ?>',
		      kind: "<?php echo $kind1; ?>",
<?php 
$isDefaultCaption1 = $default1;
if($isDefaultCaption1 == 'default'){
?>
		      "default": true,
<?php 
}
?>
		    },{ 
		      file: "<?php echo $VideoTrack1; ?>",
		         label: '<?php echo $label2; ?>',
		         kind: "<?php echo $kind2; ?>",
<?php 
$isDefaultCaption2 = $default2;
if($isDefaultCaption2 == 'default'){
?>
		      "default": true,
<?php 
}
?>
		         }
		    ],
		    
		  }]
		});

</script>

</script>
</body>
</html>
