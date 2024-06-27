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
	
	<link rel="icon" type="image/png" href="https://mittelspitz-chemnitz.de/bilder/favicon.png">

	<title>Mittelspitz-Chemnitz</title>
  </head>
  <body>
  
	<div class="languages">
		<a href="ivo-wunjo.php?language=de" title="Wechsel zu Deutsch"><img src="https://mittelspitz-chemnitz.de/bilder/de_flag.svg" alt="German"></>
		<a href="ivo-wunjo.php?language=gb" title="Switch to English"><img src="https://mittelspitz-chemnitz.de/bilder/gb_flag.svg" alt="English"></a>
	</div>

	<div class="banner parent" id="Aslan">
		<h4 class="ribbon"><a style="color: #FFCE73;" href="mailto:info@mittelspitz-chemnitz.de">'.$content['bannertext'][$language].'</a></h4>
		<a class="" href="./index.php?language='.$language.'"><img src="https://mittelspitz-chemnitz.de/bilder/Banner_Webseite.jpg" class="img-fluid" alt="Banner 2022"></a>
	</div>
	
	<div class="container-fluid">
		<div class="row navigation-container">
			<div class="col-md-6 nav-item"><a class="" href="./aslan.php?language='.$language.'">
				Aslan von der Roßsteige<br>
				<div class="titel_nav">Deutscher Champion(VDH) <br>'.$content['deckruede'][$language].' VDSp.</div></a>
			</div>
			<div class="col-md-6 nav-item active"><a class="active" href="./ivo-wunjo.php?language='.$language.'">
				Ivo-Wunjo von Jaluk Aurora<br>
				<div class="titel_nav">'.$content['deckruede'][$language].' VDSp.</div>
				<div class="titel_nav_placeholder"></div></a>
			</div>
		</div>
	</div>
	
	<div class="container-fluid content">
		<div class="container-fluid content">
			
			<div class="row justify-content-center" style="margin-bottom:20px;">
				<div class="col-md-12" style="text-align: center;">
					<img class="aslan_images" title="Wunjo stehend" src="https://mittelspitz-chemnitz.de/bilder/DSC_2158~2.JPG" alt="Wunjo_02">
					<img class="aslan_images" title="Wunjo grinsend" src="https://mittelspitz-chemnitz.de/bilder/DSC_2172~2.JPG" alt="Wunjo_01">
				</div>
			</div>
			
			<div class="row aslan_text">
				'.$content['einfuehrung_wunjo'][$language].'
			</div>
		
			<div class="accordion" id="accordionExample">
			  <div class="accordion-item" style=" background: #FFCE73;">
				<h2 class="accordion-header" id="headingOne">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<h3>'.$content['ahnentafel_und_co'][$language].'</h3>
				  </button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				  <div class="accordion-body content">
					<h2>Ivo-Wunjo von Jaluk Aurora</h2>
					<div class="row space_bottom">
						<div class="col-md-6">
							<ul>
								<!--<li><b>'.$content['titel'][$language].'</b> - </li>-->
								<li><b>'.$content['vater'][$language].'</b> Gero von der Daburg [Lenny] (Black&Tan)</li>
								<li><b>'.$content['mutter'][$language].'</b> Delali von Jaluk Aurora (Orange-Sable)</li>
								<li><b>'.$content['geburtsdatum'][$language].'</b> 23.02.2023</li>
								<li><b>'.$content['groesse'][$language].'</b> 38cm</li>
								<li><b>'.$content['pl-befund'][$language].'</b> 0|0 (22.05.2024)</li>
								<li><b>'.$content['zahnstempel'][$language].'</b> '.$content['zahnstempel_text'][$language].' (13.04.2024)</li>
								<li><b>'.$content['zuchtzulassung'][$language].'</b> 03.06.2024</li>
							</ul>
						</div>

						<div class="col-md-6">
							<ul>
								<li><b>A-Lokus</b> at/at (BB1/BB1)</li>
								<li><b>B-Lokus</b> N/N</li>
								<li><b>D-Lokus</b> N/N</li>
								<li><b>E-Lokus</b> N/e1</li>
								<li><b>I-Lokus</b> i/i</li>
								<li><b>K-Lokus</b> ky/ky</li>
								<li><b>S-Lokus</b> N/N</li>
							</ul>
						</div>
						<div class="col-md-12" style="text-align: center;">
							<a data-bs-toggle="modal" data-bs-target="#ahnentafel_01"><img title="Klick mich!" src="https://mittelspitz-chemnitz.de/bilder/ahnentafel_wunjo_01.png" class="img-fluid ahnentafel ahnentafel_01" alt="Ahnentafel_01"></a>
							<a data-bs-toggle="modal" data-bs-target="#ahnentafel_02"><img title="Klick mich!" src="https://mittelspitz-chemnitz.de/bilder/ahnentafel_wunjo_02.png" class="img-fluid ahnentafel ahnentafel_02" alt="Ahnentafel_02"></a>
							<div class="space_bottom"><b>'.$content['hinweistext_ahnentafel'][$language].'</b></div>
							
							<div class="modal fade" id="ahnentafel_01" tabindex="-1" aria-labelledby="ahnentafel_01" aria-hidden="true">
							  <div class="modal-dialog modal-xl">
								<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
								  <div class="modal-body">
									<img src="https://mittelspitz-chemnitz.de/bilder/ahnentafel_wunjo_01.png" class="img-fluid ahnentafel_01" alt="Ahnentafel_01">
								  </div>
								</div>
							  </div>
							</div>
							<div class="modal fade" id="ahnentafel_02" tabindex="-1" aria-labelledby="ahnentafel_02" aria-hidden="true">
							  <div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
								  <div class="modal-body">
									<img src="https://mittelspitz-chemnitz.de/bilder/ahnentafel_wunjo_02.png" class="img-fluid ahnentafel_02" alt="Ahnentafel_02">
								  </div>
								</div>
							  </div>
							</div>
										
						</div>
						
					</div>
				  </div>
				</div>
			  </div>
			  <div class="accordion-item" style=" background: #FFCE73;">
				<h2 class="accordion-header" id="headingTwo">
				  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<h3>'.$content['ausstellungsergebnisse'][$language].'</h3>
				  </button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				  <div class="accordion-body content">
					<div class="row">
							<div class="col-md-8">
								<table class="table">
								  <thead>
									<tr>
									  <th scope="col">'.$content['show_title'][$language].'</th>
									  <th scope="col">'.$content['klasse_title'][$language].'</th>
									  <th scope="col">'.$content['ergebnisse_title'][$language].'</th>
									  <th scope="col">'.$content['richterberichte_title'][$language].'</th>
									</tr>
								  </thead>
								  <tbody>
								  ';
								  foreach ($modale['wunjo'] as $key => $modal) {
									echo '
										<tr>
										  <th scope="row">'.$modal['title'][$language].'</th>
										  <td>'.$modal['klasse'][$language].'</td>
										  <td>'.$modal['results'].'</td>
										  <td><a class="richterbericht" data-bs-toggle="modal" data-bs-target="#'.$key.'">'.$content['bericht_title'][$language].'</a></td>
										</tr>
									
										<div class="modal fade" id="'.$key.'" tabindex="-1" aria-labelledby="'.$key.'" aria-hidden="true">
										  <div class="modal-dialog '.(!empty($modal['modal_style']) ? $modal['modal_style']: '').'">
											<div class="modal-content">
											  <div class="modal-header">
												'.(!empty($modal['title'][$language]) ? '<h5 class="modal-title" id="exampleModalLabel">'.$modal['title'][$language].'</h5>' : '').'
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											  </div>
											  <div class="modal-body">
												'.$modal['content'][$language].'
											  </div>
											</div>
										  </div>
										</div>
									';
								}
echo '
								  </tbody>
								</table>
							</div>
							<div class="col-md-4">
								<div>
									<div class="row"><img src="https://mittelspitz-chemnitz.de/bilder/wunjo_schwarzenbruck_2024.png" class="img-fluid" alt="Wunjo Untersteinach 2024"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row justify-content-center" style="margin-bottom:20px;">
									<div class="col-md-12" style="text-align: center;">
										<img class="aslan_images" title="Wunjo stehend" src="https://mittelspitz-chemnitz.de/bilder/Wunjo_stehend_01.jpg" alt="Wunjo_02">
										<img class="aslan_images" title="Wunjo grinsend" src="https://mittelspitz-chemnitz.de/bilder/Wunjo-14-Monate.JPG" alt="Wunjo_01">
										<img class="aslan_images" title="Wunjo stehend im  Profil" src="https://mittelspitz-chemnitz.de/bilder/wunjo_seite_stehend_02.jpg" alt="Wunjo_01">
									</div>
									<div class="col-md-12" style="text-align: center; margin-top: 5px;">
										<img class="aslan_images" title="Wunjo grinsend" src="https://mittelspitz-chemnitz.de/bilder/wunjo_untersteinach.jpg" alt="Wunjo_01">
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="row aslan_text">
									<img src="https://mittelspitz-chemnitz.de/bilder/camp_black_and_tan.jpg" class="img-fluid" alt="Camp Black and Tan auf der Ausstellung.">
									<p>Auf einer Hundeshow braucht man gute Gesellschaft, viel Geduld und eine starke Ausrüstung!</p>
								</div>
							</div>
						</div>
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
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