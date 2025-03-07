<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>JWPLAYER8 with Netflix Skin</title>

<!-- PHP Code -->
<?php include("../../config.php");?>

	<!-- CSS -->
<link rel="stylesheet" href="./jwplayer-netflix-skin/style.css">	

	<!-- JavaScript -->
	<script src="//content.jwplatform.com/libraries/Jq6HIbgz.js"></script>

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
		    stretching: "exactfit",
		    autostart: false,

		    skin: {
		    	name: 'Netflix',
		    },

		    //sharing: {
		    	//sites: ["reddit","facebook","twitter"]
		    //},
		     
		    captions: {
		        color: '#FFF',
		         fontSize: 14,
		         backgroundOpacity: 0,
		         edgeStyle: 'raised' 
		    },

		  playlist: [{
		    title: "Bumblebee",
		    //description: "###",
		    image: "https://image.tmdb.org/t/p/original/lN6Z8FZrtpphQyuI6yYdTZi6x3G.jpg",
		    sources: [{
		    file: "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
		      label: '4K',
		      'type': 'mp4',
		      primary: 'html5',

		    },{
		    file: "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
		      label: '1080p',
		      'type': 'mp4',
		      primary: 'html5',

		    },{
		     file: "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4",
		      label: '720p',
		      'type': 'mp4',
		      primary: 'html5',
		    },{
		     file: "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4",
		      label: '480p',
		      'type': 'mp4',
		      primary: 'html5',
		    }],
		    captions: [{
		      file: "https://raw.githubusercontent.com/KROUN/scss/master/bumblebee.srt",
		      label: 'Português',
		      kind: "captions",
		      "default": true,
		    },{ 
		      file: "https://raw.githubusercontent.com/KROUN/scss/master/bumblebee-2.srt",
		         label: 'Inglês',
		         kind: "captions",
		         }
		    ],
		    
		  }]
		});

</script>

</script>
</body>
</html>
