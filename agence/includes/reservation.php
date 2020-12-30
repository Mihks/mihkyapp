<?php include_once 'header.php'; ?>			
<!-- Start Form-->
			<h2 id="reserve">Réservation</h2>

			<div id="reservation" >

					<!-- infos personnelles-->

					<form action="traitements.php" method="POST" id="form">
							
							
						<div class="">

								
								
								<div >
									<label for="nom" class="" >Nom</label>
									<input type="text" name="nom" class="frm-control" id="nom" placeholder="ex:Mouloungui"  autocomplete="off"  required maxlength="20" minlength="5" pattern="^[A-Za-z -]+$" />
									
								</div>
								
						</div>
								
								<div>
									<label for="type_billet">Type de réservation</label>
									<select name="type_billet" id="type_billet" class="frm-control">
										<option value="Aller_simple" selected>Aller-simple</option>
										<option value="Aller_retour" >Aller-retour</option>
									</select> 

								</div>
									
								
								<div id="nbre-place" >
									<label for="nombre_billet">Nombre de place</label>
									<input  class="frm-control" type="number" id="nombre_billet" name="nombre_billet" min="1" max="10" placeholder="nombre entre 1 et 10" class="frm-control" autocomplete="off" required />
								</div>

								

								<div >
								<label for="agence">Agence</label>
								<select name="agence" id="agence"  class="frm-control">
									<option value="">Choisir votre agence</option>
									<optgroup label="Terrestre">
										<option value="excellence_transport">Excellence Transport</option>
									</optgroup>
								</select>

								</div>

							<!--excellence transport -->
							<?php include('excellence_transport.php'); ?>
<!--------------------------------------------------------------------------------------------------------------------------------->

				<?php		$reponse = $bdd->query(" SELECT 
										CURRENT_DATE + interval 1 DAY AS jour_1,
										CURRENT_DATE + interval 2 DAY AS jour_2 "); 
							
							$donnee = $reponse->fetch();

							$jour1 = $donnee['jour_1'];
							$jour2 = $donnee['jour_2'];

							$reponse->closeCursor();



							  ?>

							<div class="" >
								
								<div id="date_dep" >
									<label for="depart">Date de Depart</label>
									<input type="text" id="depart" name="depart" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="aaaa-mm-jj" class="frm-control" required autocomplete="off" readonly  value='<?= strip_tags($jour1); ?>' /> <!-- une autre façon d'ecrire echo dans les versions recentes
													php est comme c ecrit dans value -->
								</div>



								<div>
									<label for="heure-depart" >Heure de Depart</label>
									<select name="heure_depart" id="heure-depart" class="frm-control">
											
										
									</select>
								</div>
								
								
								<div id="date_retour" >
									<div>
										<label for="retour">Date de Retour</label>
										<input type="text" id="retour" name="retour" placeholder="aaaa-mm-jj" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="frm-control" value='<?= strip_tags($jour2);?>' autocomplete="off" readonly />

									</div>

									<div>
										<label for="heure-retour" >Heure de Retour</label>
										<select name="heure_retour" id="heure-retour" class="frm-control">

										</select>	
									</div>
									
								</div>


							</div>
						
						
							<div>
									<label for="moyen_paiement">Moyen de paiement</label>
									<select name="moyen_paiement" id="moyen_paiement" class="frm-control">
										<option value="airtel" selected>Airtel Money</option>
										<option value="gabontelecom" >MobiCash</option>
									</select> 

								</div>


							
							<div style='margin-left: 30px;' id='valid' >

								<button style="border-radius: 15px;width: 100px;height: 40px;font-size: 14px;border-bottom: 1px solid orange;cursor: pointer;"  type="submit" id="envoyer" value="envoyer" >Valider</button>

								<!-- <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button> -->

							</div>
						</form>
					<!-- END Form -->
				</div>

			<p class="info"><b>Important: </b>Saisir le <strong>champ</strong> "nom" est <strong>obligatoire</strong>,celui-ci vous servira <strong>d'identifiant</strong>.<br/>Le <strong>type de réservation</strong> indique si le billet que vous sollicitez est un simple billet <strong>aller</strong> ou alors un billet <strong>aller-retour</strong> dans le cas d'un billet <strong>aller-retour</strong>,2 champs <strong>obligatoires</strong> apparaitront <strong>'Date de Retour' et' Heure de retour'</strong> .<br/><br/>Le 3e champ indique le <strong>nombre de place que vous reservez</strong>.<br/><br/><strong>Agence</strong> indique l'agence avec laquelle vous souhaitez <strong> voyager</strong>,selon le choix de cette dernière, vous serez amenés à sélectionner un <strong>trajet</strong>.<br/><br/><strong>Trajet</strong> indique le <strong>tronçon</strong> à effectuer. Les trajets disponibles, dépendent de ceux proposés par chacune des agences.<br/> <br/>Les champs <strong>Date de depart</strong> et <strong>heure de Depart</strong> indiquent <strong>respèctivemment le jour et l'heure</strong> du voyage.<br/><br/>.Pour plus <strong>d'infos ou un problème</strong> avec le <strong>formulaire n'hésitez</strong> pas à nous contacter.</p>


<?php include_once 'footer.php'; ?>
