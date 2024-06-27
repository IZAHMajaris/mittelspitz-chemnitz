<?php 
include 'translation.php';

if(isset($_GET['language']))
  $language = $_GET['language'];
else
  $language = "de";
		
echo '
<html lang="de">
  <head>
	<meta charset="UTF-8">
	<!-- css / Javascript / Bootstrap Start -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
	<link rel="stylesheet" href="./stylesheet.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!--<script language="javascript" type="text/javascript" src="https://mittelspitz-chemnitz.de/script.js"></script>-->
	<!-- css / Javascript / Bootstrap Ende -->
	
	<link rel="icon" type="image/png" href="https://mittelspitz-chemnitz.de//bilder/favicon.png">
	
	<title>Mittelspitz-Chemnitz</title>
  </head>
  <body>
  
	<div class="languages">
		<a href="index.php?language=de" title="Wechsel zu Deutsch"><img src="https://mittelspitz-chemnitz.de/bilder/de_flag.svg" alt="German"></>
		<a href="index.php?language=gb" title="Switch to English"><img src="https://mittelspitz-chemnitz.de/bilder/gb_flag.svg" alt="English"></a>
	</div>

	<div class="banner parent" id="Aslan">
		<h4 class="ribbon"><a style="color: #FFCE73;" href="mailto:info@mittelspitz-chemnitz.de">'.$content['bannertext'][$language].'</a></h4>
		<a class="" href="./index.php?language='.$language.'"><img src="https://mittelspitz-chemnitz.de/bilder/Banner_Webseite.jpg" class="img-fluid" alt="Banner 2022"></a>
	</div>
	
	<div class="container-fluid">
		<div class="row navigation-container">
			<div class="col-md-6 nav-item">
				<a class="" href="./aslan.php?language='.$language.'">Aslan von der Roßsteige</a>
				<div class="titel_nav">Deutscher Champion(VDH) <br>'.$content['deckruede'][$language].' VDSp.</div>
				<div class="image_aslan_index">
					<h4 class="ribbon_3"><a style="color: #FFCE73;" href="./aslan.php?language='.$language.'">Weiter zu Aslan</a></h4>
					<a class="" href="./aslan.php?language='.$language.'">
						<img class="image_index" title="Weiterleitung zu Aslan" src="https://mittelspitz-chemnitz.de/bilder/Aslan_01_kleiner.jpg" alt="Aslan_01">
					</a>
				</div>
			</div>
			<div class="col-md-6 nav-item">
				<a class="" href="./ivo-wunjo.php?language='.$language.'">Ivo-Wunjo von Jaluk Aurora</a>
				<div class="titel_nav">'.$content['deckruede'][$language].' VDSp.</div>
				<div class="titel_nav_placeholder"></div>
				<div class="image_wunjo_index">
					<h4 class="ribbon_3"><a style="color: #FFCE73;" href="./ivo-wunjo.php?language='.$language.'">Weiter zu Ivo-Wunjo</a></h4>
					<!--<a class="" href="./ivo-wunjo.php?language='.$language.'"><img class="image_index" title="Weiterletung zu Ivo-Wunjo" src="https://www.im-pressed.de/msp-chemnitz/bilder/wunjo_seite_stehend.jpg" alt="Wunjo"></a>-->
					<a class="" href="./ivo-wunjo.php?language='.$language.'"><img class="image_index" title="Weiterletung zu Ivo-Wunjo" src="https://mittelspitz-chemnitz.de/bilder/Wunjo_stehend_01.jpg" alt="Wunjo"></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid content">
	
	</div>
	
	<div class="modal fade" id="impressum" tabindex="-1" aria-labelledby="impressum" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h2>'.$content['impressum_title'][$language].'</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
		  <div class="modal-body">
			Dorit Wittig<br>Wenzel-Verner-Straße 71<br>09120 Chemnitz
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="kontakt" tabindex="-1" aria-labelledby="kontakt" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h2>'.$content['kontakt_title'][$language].'</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
		  <div class="modal-body">
			E-Mail: <a href="mailto:info@mittelspitz-chemnitz.de">info@mittelspitz-chemnitz.de</a><br>
			Tel.: 0174 8455133
		  </div>
		</div>
	  </div>
	</div>
	
  </body>
  <footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col"></div>
			<div class="col"><a class="footer" data-bs-toggle="modal" data-bs-target="#impressum">'.$content['impressum_title'][$language].'</a></div>
			<div class="col"></div>
			<div class="col"><a class="footer" data-bs-toggle="modal" data-bs-target="#kontakt">'.$content['kontakt_title'][$language].'</a></div>
			<div class="col"></div>
		</div>
		<div class="eckfoto"><img src="https://mittelspitz-chemnitz.de/bilder/Aslan_Foto_2020_02.png" class="img-fluid" alt="Aslan_Foto_2020"></div>
	</div>
  </footer>
</html>
'; 