<!DOCTYPE HTML>
<html>
	<head>
		<title>TextilExport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				
				<div>
					<h1 style="font-style: italic;text-align:center;font-weight:bold;">Textil Export</h1>
				</div>
				<!-- Main -->
					<div id="main">
					
					<?php
                        $productos=simplexml_load_file('productos.xml');
                        foreach($productos->producto as $row){
                    ?>
						<article class="thumb">
							<a href="img/<?=$row->img?>" class="image"><img src="img/<?=$row->img?>" alt="" /></a>
							<h2><?=$row->nombre?></h2>
							<p><?=$row->descripcion?></p>
						</article>
					<?php  
                    }
                    ?>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>