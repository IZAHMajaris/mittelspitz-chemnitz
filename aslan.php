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
		<a href="aslan.php?language=de" title="Wechsel zu Deutsch"><img src="https://mittelspitz-chemnitz.de/bilder/de_flag.svg" alt="German"></>
		<a href="aslan.php?language=gb" title="Switch to English"><img src="https://mittelspitz-chemnitz.de/bilder/gb_flag.svg" alt="English"></a>
	</div>

	<div class="banner parent" id="Aslan">
		<h4 class="ribbon"><a style="color: #FFCE73;" href="mailto:info@mittelspitz-chemnitz.de">'.$content['bannertext'][$language].'</a></h4>
		<a class="" href="./index.php?language='.$language.'"><img src="https://mittelspitz-chemnitz.de/bilder/Banner_Webseite.jpg" class="img-fluid" alt="Banner 2022">
	</div>
	
	<div class="container-fluid">
		<div class="row navigation-container">
			<div class="col-md-6 nav-item active"><a class="active" href="./aslan.php?language='.$language.'">
				Aslan von der Roßsteige<br>
				<div class="titel_nav">Deutscher Champion(VDH) <br>'.$content['deckruede'][$language].' VDSp.</div></a>
			</div>
			<div class="col-md-6 nav-item"><a class="" href="./ivo-wunjo.php?language='.$language.'">
				Ivo-Wunjo von Jaluk Aurora<br>
				<div class="titel_nav">'.$content['deckruede'][$language].' VDSp.</div>
				<div class="titel_nav_placeholder"></div></a>
			</div>
		</div>
	</div>
	
	<div class="container-fluid content">
		<div class="container-fluid content">
			
			<div class="row justify-content-center" style="margin-bottom:20px;">
				<div class="col-md-6" style="text-align:right;"><img class="aslan_images" title="Aslan_Stehend" src="https://mittelspitz-chemnitz.de/bilder/Aslan_01_kleiner.jpg" alt="Aslan_01"></div>
				<div class="col-md-6"><img class="aslan_images" title="Aslan_Sitzend" src="https://mittelspitz-chemnitz.de/bilder/Aslan_02_kleiner.jpg" alt="Aslan_02"></div>
			</div>
			
			<div class="row aslan_text">
				'.$content['einfuehrung'][$language].'
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
					<h2>Aslan von der Roßsteige</h2>
					<div class="row space_bottom">
					
						<div class="col-md-2">
							<a data-bs-toggle="modal" data-bs-target="#champion_urkunde"><img title="Klick mich!" src="https://mittelspitz-chemnitz.de/bilder/Champion_Urkunde.png" class="img-fluid ahnentafel ahnentafel_01" alt="Deutscher Champion(VDH) - Aslan von der Roßsteige"></a>
							<div class="modal fade" id="champion_urkunde" tabindex="-1" aria-labelledby="champion_urkunde" aria-hidden="true">
							  <div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
								  <div class="modal-body">
									<img src="https://mittelspitz-chemnitz.de/bilder/Champion_Urkunde.png" class="img-fluid ahnentafel_01" alt="champion_urkunde">
								  </div>
								</div>
							  </div>
							</div>
						</div>
					
						<div class="col-md-6">
							<ul>
								<li><b>'.$content['titel'][$language].'</b> Deutscher Champion(VDH),<br>Auslesegruppe(VDSp.)</li>
								<li><b>'.$content['vater'][$language].'</b> Vitkind\'s Mayas Dominic (Orange)</li>
								<li><b>'.$content['mutter'][$language].'</b> Nessaja von der Roßsteige (Graugewolkt)</li>
								<li><b>'.$content['geburtsdatum'][$language].'</b> 23.03.2019</li>
								<li><b>'.$content['groesse'][$language].'</b> 34cm</li>
								<li><b>'.$content['pl-befund'][$language].'</b> 0|0 (03.05.2022)</li>
								<li><b>'.$content['zahnstempel'][$language].'</b> '.$content['zahnstempel_text'][$language].' (07.05.2022)</li>
								<li><b>'.$content['zuchtzulassung'][$language].'</b> 05.11.2022</li>
							</ul>
						</div>
						<div class="col-md-2">
							<b>'.$content['farbgenetik'][$language].'</b>
							<ul>
								<li><b>A-Lokus</b> at/at</li>
								<li><b>B-Lokus</b> N/bs</li>
								<li><b>D-Lokus</b> N/N</li>
								<li><b>E-Lokus</b> N/e1</li>
								<li><b>I-Lokus</b> I/i</li>
								<li><b>K-Lokus</b> ky/ky</li>
								<li><b>S-Lokus</b> N/N</li>
							</ul>
						</div>
						
						<div class="col-md-12" style="text-align: center;">
							<a data-bs-toggle="modal" data-bs-target="#ahnentafel_01"><img title="Klick mich!" src="https://mittelspitz-chemnitz.de/bilder/Ahnentafel_01.jpg" class="img-fluid ahnentafel ahnentafel_01" alt="Ahnentafel_01"></a>
							<a data-bs-toggle="modal" data-bs-target="#ahnentafel_02"><img title="Klick mich!" src="https://mittelspitz-chemnitz.de/bilder/Ahnentafel_02.jpg" class="img-fluid ahnentafel ahnentafel_02" alt="Ahnentafel_02"></a>
							<div class="space_bottom"><b>'.$content['hinweistext_ahnentafel'][$language].'</b></div>
							
							<div class="modal fade" id="ahnentafel_01" tabindex="-1" aria-labelledby="ahnentafel_01" aria-hidden="true">
							  <div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
								  <div class="modal-body">
									<img src="https://mittelspitz-chemnitz.de/bilder/Ahnentafel_01.jpg" class="img-fluid ahnentafel_01" alt="Ahnentafel_01">
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
									<img src="https://mittelspitz-chemnitz.de/bilder/Ahnentafel_02.jpg" class="img-fluid ahnentafel_02" alt="Ahnentafel_02">
								  </div>
								</div>
							  </div>
							</div>
										
						</div>
						
					</div>
				  </div>
				</div>
			  </div>
			  
			  <!--
			  
			  <div class="accordion-item" style=" background: #FFCE73;">
				<h2 class="accordion-header" id="headingThree">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<h3>'.$content['deckakte'][$language].'</h3>
				  </button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				  <div class="accordion-body content">
					<div class="col-md-12">
						<table class="table">
						  <tbody>
							';
								  foreach ($deckakte_gebo as $deckakt) {
									echo '
										<tr>
										  <td>
											<div class="row">
												<div class="col-md-4">
													<h4>'.$deckakt['zuchtstaette']['wurf'].' <a href="'.$deckakt['zuchtstaette']['webseite'].'">'.$deckakt['zuchtstaette']['name'].'</a></h4><br>
													<b>Mutter:</b> '.$deckakt['deckakt_info']['name_huendin'].'<br>
													<b>Farbe:</b> '.$deckakt['deckakt_info']['farbe_huendin'].'<br><br>
													<img src="'.$deckakt['deckakt_info']['bild_url'].'" class="img-fluid ahnentafel_02" alt="'.$deckakt['deckakt_info']['name_huendin'].'"><br>
													'.$deckakt['deckakt_info']['beschreibung'].'
												</div>
												
												<div class="col-md-8">
													'.$deckakt['welpen']['beschreibung'].'<br><br>
														<div class="row">
														';
														  foreach ($deckakt['welpen']['bilder'] as $bild) {
															echo '
																<div class="col-md-4">
																	<img src="'.$bild['bild_url'].'" class="img-fluid ahnentafel_02" alt="'.$bild['beschreibung'].'">'.$bild['beschreibung'].'
																</div>
															';
															}
														echo '
													</div>
												</div>
											</div>
										  </td>
										</tr>
									';
								}
							echo '
						  </tbody>
						</table>
					</div>
				  </div>
				</div>
			  </div>
			  
			  -->
			  
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
								  foreach ($modale['gebo'] as $key => $modal) {
									  if($modal['type'] === 'show'){
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
								}
echo '
								  </tbody>
								</table>
							</div>
							<div class="col-md-4">
								<div>
									<div class="row"><img src="https://mittelspitz-chemnitz.de/bilder/erfurt_2022_01.jpg" class="img-fluid" alt="Aslan_Foto_2020"></div>
									<div class="row"><img src="https://mittelspitz-chemnitz.de/bilder/aslan_pokale_2023.JPG" class="img-fluid" alt="Aslan_Foto_2023"></div>
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
			<div class="col">
			</div>
			<div class="col"><a class="footer" data-bs-toggle="modal" data-bs-target="#kontakt">'.$content['kontakt_title'][$language].'</a></div>
			<div class="col"></div>
		</div>
		<div class="eckfoto"><img src="https://mittelspitz-chemnitz.de/bilder/Aslan_Foto_2020_02.png" class="img-fluid" alt="Aslan_Foto_2020"></div>
	</div>	
  </footer>
</html>
'; 