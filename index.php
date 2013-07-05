<?php session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Responsive Magritte</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<article>
			<div class="image">
				<div class="ceci">
				    <img src="images/ceci.png" alt="" height="270" width="167">
				</div>
				<div class="n-est-pas">
				    <img src="images/n-est-pas.png" alt="" height="270">
				</div>
				<div class="une-pipe">
				    <img src="images/une-pipe.png" alt="" height="270" width="57">
				</div>
			</div>
			<div class="trehison">
				<img src="images/text.png" width="366" height="41">
			</div>
			<img id="signature" src="images/magritte.png" width="30" height="13">
		</article>

		<script>
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-xxxxx-x']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>