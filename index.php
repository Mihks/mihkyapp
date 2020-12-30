
<?php 
session_name("flemard");
session_start(); 

 // On écrit un cookie setcookie
// On démarre la session AVANT d'écrire du code HTML
include_once 'fonction.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Flemard</title>
		<meta charset="utf-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1 ,target- densitydpi=device-dpi,maximum-scale=1.0" />
		<meta name="description" content="voyage terrestre maritime ferroviaire Gabon" />
		<meta name="keywords" content="voyage GABON" />
		<meta name="author" content="Klein Mihks" />
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 


        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 

         <!--[if lte IE 7]> <link rel="stylesheet" href="style_ie.css" /> <![endif]--> 
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />



		
		<link rel="stylesheet" type="text/css" href="agence/css/style.css">
		<link rel="stylesheet" type="text/css" href="agence/css/jquery-ui.structure.css">
		<link rel="stylesheet" type="text/css" href="agence/css/jquery-ui.theme.min.css">
		

	
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="agence/images/flemard.jpg" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
		
	</head>

	<body>

		<?php include_once 'agence/includes/header.php'; ?>
		
		<section>
			
		<div align='center'>
			<div class="slideshow">
			<ul>
				<li><img class="img-slide" src="agence/images/iStock-516654892-e1544537163371.jpg" alt="" /></li>
 				<li><img class="img-slide" src="agence/images/itl.cat_bus-wallpaper_2969762.png" alt=""  /></li> 
				<li><img class="img-slide" src="agence//images/iStock-516654892-e1544537163371.jpg" alt=""  /></li>
				<li><img class="img-slide" src="agence/images/téléchargé.jpg" alt="" /></li>
			</ul>
			</div>
		</div>
			<h2>Accueil</h2>

			<div class="centre-text">

				<p>Bienvenue sur votre site de réservation en ligne de billets de bus et de bateaux . Plus besoin de vous déplacer dans les agences de voyage pour une réservation. Réservez vos billets depuis chez vous et soldez via <b>Airtel Money</b> ou via <b>Mobi Cash</b> .</p>
 

				<p>Tout juste après avoir effectué votre paiement , un identifiant unique s'affiche en rouge , ce dernier contient toutes les coordonnées de votre réservation , il est à présenter à l'agence sollicitée. Ne procrastinez plus,  <b style="color: rgb(0,128,128);">Flemard</b> pointe le bout de son nez !</p>
			</div>
			
	
			<img class="img-diaspo" src="agence/images/51459340_949759081892876_3562716998855032832_n.jpg" height='200' width='250' id="imaga" />
<!-- 			<img hidden class="img-diaspo" height='200' width='250' src="agence/images/532d5cf1f3749247e6221c63fea18c3b.jpg" id="imaga">
 -->
<!-- 			<img class="img-diaspo" height='200' width='250' src="agence//images/unnamed.jpg" id="img4">
			<img class="img-diaspo" height='200' width='250' src="agence/images/FACEBOOK_RESERVATION_LIGNE.jpg" id="img3">
			<img class="img-diaspo" height='200' width='250' src="agence/images/6.png" id="img2">
			<img class="img-diaspo" height='200' width='250' src="agence/images/presentation.jpg" id="img1">	 -->

			
<!-- Start Form-->	
		
		</section>

		                

		<hr/>

		<?php include('agence/includes/footer.php'); ?>

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


		<script> 
			$(function() {
			 
			setInterval(function(){
         			$(".slideshow ul").animate({marginLeft:-350},800,function(){
            			$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         			})
      			}, 3500);
				
			$(".slogan").html("Donner un Sens à votre Flemme !").css("font-size","small").css("color","rgb(0,128,128)").css("text-decoration","underline").css("text-decoration-color","orange");

			//met une largeur de 200px à toutes les entrées du formulaire(input,textarea,button,select) sauf a l"input
			//de type submit
			//$(":input:not(input[type='submit'])").css("width","250px").css("margin-bottom","15px").css("padding","10px").css("border-radius","8px") ;

			var mois_fr = new Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

			var jour_fr = new Array('00','01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
			
			var date = new Date();

			var annee = date.getFullYear();

			var jour = date.getDate();

			var mois = date.getMonth();

	

			


			//---CONTROLE DE SAISIE TYPE DE BILLET
//----------------------------------------------------------------------------------------
			$("#date_retour").hide();
				
			// selectionne l'element ayant l'atribut name de la valeur type_billet et applique lui
			// la methode change selon les valeurs de la l'attribut name afficher ou masquer
			// le champs date de retour

			$("[name='type_billet']").on("click change",function(e){

				//je stock dans la variable la valeur 
				//du type de billet
				//this fais reference au type de billet
				var resultat = $(this).val();

				if (resultat == 'Aller_retour') {

					$("#date_retour").fadeIn(2000,'linear');
					$("#retour").attr('required','required').prop('disabled',false);

					$("#heure-retour").prop('disabled',false);

				}
				else {
					
					$("#date_retour").fadeOut(2000,'linear');
					$("#retour").removeAttr('required').prop('disabled',true);
					$("#heure-retour").prop('disabled',true);
					
					}

				});

			 
			//---CONTROLE DE SAISIE AGENCE
//----------------------------------------------------------------------------------------
			//choix de l"agence et ses differents controles de saisies
			//du moins controles de selections

			$(".cache").hide() // tous les champs consernant les options des agences sont cachés lors du chargement de la page
			$(".a1").prop("disabled",true); //tous les champs concernant les options des agences sont disactivés lors du charchement de la page

			$(".horaire_depart,.horaire_retour").prop("disabled",true); // tous les horaires du champs heure sont desactivés au chargement de la page

			$("[type='submit']").prop("disabled",true); // le bouton d'envoie du formulaire est desactivé lors du chargement de la page


			function horaire(trajet) {
				// body...*

				var type = $('#type_billet').val();
				var depart = $('#depart').val();
				
				var agence = $("[name='agence']").val();

				if (type=='Aller_retour') {
					var retour = $('#retour').val();
					$.post('agence/horaire_retour.php',{trajet:trajet,agence:agence,date:retour},

					function(data){

						$('#heure-retour').html(data);

				});

				}
	
				$.post('horaire.php',{trajet:trajet,agence:agence,date:depart},

					function(data){

						$('#heure-depart').html(data);
						
						
				});
			}


			$('#lieu_dep_maj,#lieu_depart,#lieu_dep_akewa,#lieu_dep_transp').on("click change touch",function(){

				horaire($(this).val());
			});


			$('#depart,#type_billet,#retour').change(function(){


				var agence = $("[name='agence']").val();

				if (agence =='major') {

					horaire($('#lieu_dep_maj').val());

				}else if (agence=='transporteur'){


					horaire($('#lieu_dep_transp').val());
				
				}else if (agence=='hitu') {

					horaire($('#lieu_depart').val());
				
				}else if (agence=='akewa') {

					horaire($('#lieu_dep_akewa').val());
				
				}else if (agence=='excellence_transport') {

					horaire($('#lieu_dep_excel').val());
				
				}

				

							});


			$("[name='agence']").on("click change",function(){

				
				var agence = $(this).val();

				var type = $('#type_billet').val();

				if (agence=="major") {

					$("#destination_major").show("slow");

					$("#lieu_dep_maj").prop("disabled",false);//les champs lie à major sont activés


					(type =="Aller_retour" )? $("#horaire_rtr_maj").prop("disabled",false) :  $("#horaire_rtr_maj").prop("disabled",true); //les horaires de major sont actives
					

					$(".cache:not(#destination_major)").hide(1000);

					$(".a1:not(#lieu_dep_maj)").prop("disabled",true); //les champs des autres agence 																						//restent desactivé sauf ceux de major 
					$("[type='submit']").prop("disabled",false);

					horaire($('#lieu_dep_maj').val());

					}else if (agence=="hitu"){

					$("#destination_hitou").show("slow");
					
					$("#lieu_depart").prop("disabled",false); //mm resonnement que celui de major


					( type=='Aller_retour' )? $("#horaire_rtr_hitu").prop("disabled",false) :  $("#horaire_rtr_hitu").prop("disabled",true);

				

					$(".horaire_depart:not(#horaire_dep_hitu),.horaire_retour:not(#horaire_rtr_hitu)").prop("disabled",true);  // les horaires des autres agences sont desactivés

					$(".cache:not(#destination_hitou)").hide(1000);

					$(".a1:not(#lieu_depart)").prop("disabled",true);

					$("[type='submit']").prop("disabled",false);

					horaire($('#lieu_depart').val());

				
				} else if (agence=="akewa") {
					
					$("#destination_akewa").show("slow");
					$("#lieu_dep_akewa,#nombre_adulte,#nombre_enfant,#classe_adulte,#classe_enfant").prop("disabled",false);


					( type=='Aller_retour' )? $("#horaire_rtr_akewa").prop("disabled",false) :  $("#horaire_rtr_akewa").prop("disabled",true);


					$(".horaire_depart:not(#horaire_dep_akewa),.horaire_retour:not(#horaire_rtr_akewa)").prop("disabled",true);

					$(".cache:not(#destination_akewa)").hide(1000);
					$(".a1:not(#lieu_dep_akewa,#nombre_adulte,#nombre_enfant,#classe_adulte,#classe_enfant)").prop("disabled",true);
					$("[type='submit']").prop("disabled",false);

					horaire($('#lieu_dep_akewa').val());


				} else if (agence == "choix") {

					$(".cache").hide(1000);
					$(".a1").prop("disabled",true);

					$(".horaire_depart,.horaire_retour").prop("disabled",true);

					$("[type='submit']").prop("disabled",true);

				} else if (agence=='transporteur'){


					$("#destination_transp").show("slow");
					
					$("#lieu_dep_transp").prop("disabled",false); //mm resonnement que celui de major

					
					( type=='Aller_retour' )? $("#horaire_rtr_transp").prop("disabled",false) :  $("#horaire_rtr_transp").prop("disabled",true);

					$(".horaire_retour:not(#horaire_rtr_transp)").prop("disabled",true);  // les horaires des autres agences sont desactivés

					$(".cache:not(#destination_transp)").hide(1000);

					$(".a1:not(#lieu_dep_transp)").prop("disabled",true);

					$("[type='submit']").prop("disabled",false);

					horaire($('#lieu_dep_transp').val());

				}else if (agence=='excellence_transport'){


					$("#destination_excel_transp").show("slow");
					
					$("#lieu_dep_excel").prop("disabled",false); //mm resonnement que celui de major

					
					( type=='Aller_retour' )? $("#horaire_rtr_transp").prop("disabled",false) :  $("#horaire_rtr_transp").prop("disabled",true);

					$(".horaire_retour:not(#horaire_rtr_transp)").prop("disabled",true);  // les horaires des autres agences sont desactivés

					$(".cache:not(#destination_excel_transp)").hide(1000);

					$(".a1:not(#lieu_dep_excel)").prop("disabled",true);

					$("[type='submit']").prop("disabled",false);

					horaire($('#lieu_dep_excel').val());

				}else {

					$(".cache").hide(1000);
					$(".a1").prop("disabled",true);
					$(".horaire_depart,.horaire_retour").prop("disabled",true);
					$("[type='submit']").prop("disabled",true);
				}



				});



				// $('#agence').change(function(){

				// 	var agence = $(this).val();
					
				// 	if (agence =='akewa') {


				// 		$('#details').dialog({
				// 			modal:true,
				// 			width:340,
				// 			title:'Details',
				// 			buttons: {        
				// 			"Ok": function() { 
                 
				// 				$(this).dialog("close");
								    
				// 			}   
				// 		} });
					
				// 	}
				


				// });
				

			


  
				//AFFICHE LHEURE
//----------------------------------------------------------------------------------------

			function horloge(){

				var date = new Date();
				var h = date.getHours()+ ":"+ date.getMinutes()+ ":"+ date.getSeconds();
				$("#heure").text(h).css("color",'rgb(0,128,128)');
			}

			setInterval(horloge,1000);



		//-------------GERE LE NAV POUR PETIT ECRANS----------------------------------------------------------
//----------------------------------------------------------------------------------------
	
			
			$('#btnMenu').on('click', function(){            

				$('#nav').slideToggle();    

				});
			// $('nav a').on('click touch',function(){

			// 	$('#nav').slideToggle(); 
			// });



		//----------------INITIALISATION DE DATEPICKER-
		//METTRE LA DATE EN FR--------------------------
//----------------------------------------------------------------------------------------
			$.datepicker.regional['fr'] = {

					altField : 'Fermer',
					prevText : 'Précédent',
					nextText : 'Suivant',
					CurrentText : "Ajourd'hui",
					firstDay : 1,
					monthNames : ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aoùt', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],

					monthNamesShort : ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Aout.', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
					dayNames : ['Dimanche', 'Lundi','Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
					dayNamesShort : ['Dim.','Lun.','Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
					dayNamesMin : ['D','L','M','M', 'J', 'V','S'],
					weekHeader : 'sem.',
					dateFormat : 'yy-mm-dd',
					isRTL: false,  
					showMonthAfterYear: false,
					 yearSuffix: ''

				};

			$.datepicker.setDefaults($.datepicker.regional["fr"]);

			//----------DATEPICKER LE PLANNING DE RESERVATION SUR 2 SEMAINES
//----------------------------------------------------------------------------------------
			

			$(window).load(function(){

			var OjourD = $("#depart"),
				dateJour = new Date();

			OjourD.prop({

				"min": "+1j",
				"max": "+3j"

			}).datepicker({

				minDate : OjourD.prop("min"),
				maxDate : OjourD.prop("max"),
				dateFormat:'yy-mm-dd'
				
			});

			var retour =  $("#retour"),
				dateRetour = new Date();
			
			retour.prop({

				"min": "+2j",
				"max": "+4j"

			}).datepicker({

				minDate : retour.prop("min"),
				maxDate :retour.prop("max"),
				dateFormat:'yy-mm-dd'
				
			});
	
			$("[name='agence'],[name='type_billet']").trigger("click"); //

		});


		// var mois_fr = new Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

		// var jour_fr = new Array('00','01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
		
		
		// var date = new Date();

		// var annee = date.getFullYear();

		// var jour = date.getDate();

		// var mois = date.getMonth();


		// // date_reserve = new Date(annee,mois,++jour);

		// // $("#depart").val(annee+'-'+mois_fr[mois]+'-'+jour);
		$("#retour").attr('placeholder','Ex:2020-03-09');

		$('#depart,#retour').focus(function(){  
			$(this).blur();

		});

		
		







	});


		
	</script>
	</body>
</html>
