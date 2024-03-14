<html>

<head>
	<meta charset="utf-8">
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<link rel="icon" href="Views/img/img.jpg">
	<link href="Views/css/bootstrap.min.css" rel="stylesheet">
	<link href="Views/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="Views/css/jquery-ui.css">
	<script src="Views/js/js.js"></script>
	<title>
		Guia Turistica
	</title>

</head>

<body id="body-pd">
	<?php
	$mvc = new controladorViews();
	$mvc->enlacesPaginaControlador();
	?>
	<!--<script src="Views/js/ConectorJavaScript.js"></script>
	<script src="Views/js/jquery-3.6.0.js"></script>
	<script type='text/javascript' src='Views/js/jquery/3.2.1/jquery.min.js'></script>
	<script src="Views/js/jquery-ui.js"></script>-->
	<script src="Views/js/bootstrap.bundle.min.js"></script>
	<script src="Views/js/popper.min.js"></script>
	<script src="Views/js/bootstrap.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ_dlbvUgEp1DEOepAF6iYh8HXopaNbcE&callback=initMap&libraries=places&v=weekly"
		defer></script>	
</body>

</html>