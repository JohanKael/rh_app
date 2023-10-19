	<div class="container">
		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Insertion des besoins de l'entreprise</h2>
						<form class="forms-sample" action="<?php echo site_url("besoinController/insert"); ?>" method="post">
							<div class="card-body">
								<h3>Service suppose :</h3>
								<div class="form-group">
									<label for="horaire">Nom du service : </label>
									<input type="text" class="form-control" placeholder="Nom du service" aria-describedby="basic-addon1" name="nom_service" id="">
								</div>
								<div class="form-group">
									<label for="horaire">Heure voulu :</label>
									<input type="number" class="form-control" placeholder="Heure voulu" aria-describedby="basic-addon1" name="heureVoulu" id="">
								</div>
							</div>
							<div class="card-body">
								<h3>Besoin associé à ce service:</h3>
								<div class="form-group">
									<label for="diplome">Diplôme :</label>
									<select class="form-control" id="diplome" name="diplome">
									
									<option value="" disabled selected>Diplôme en possession</option>
									<?php
for($i = 0; $i < count($diplomes); $i++){?> 
    <option value="<?php echo $diplomes[$i]['idDiplome']; ?>"> <?php echo $diplomes[$i]['descriDiplome']; ?></option> 
<?php } ?>

									</select>
								</div>
								<div class="form-group">
									<label for="experience">An d'expérience: </label>
									<input type="number" class="form-control" placeholder="Expérience" aria-describedby="basic-addon1" name="experience" id="experience">
								</div>
								<h3>Autres :</h3>
								<div class="form-group">
									<label for="nationalite">Nationalité :</label>
									<select class="form-control" id="nationalite" name="nationalite">
									<?php
									for($i = 0; $i < count($nationalites); $i++){?> 
    									<option value="<?php echo $nationalites[$i]['idNationalite']; ?>"> <?php echo $nationalites[$i]['nation']; ?></option> 
									<?php } ?>

									</select>
								</div>
								<div class="form-group">
									<label for="nationalite">Genre :</label>
									<select class="form-control" id="genre" name="genre">
									<?php
									for($i = 0;$i<count($sex);$i++){?> 
										<option value="<?php echo $sex[$i]['idSex']; ?>"> <?php echo $sex[$i]['sex']; ?></option>
										<?php } ?>
		
									</select>
								</div>
								<div class="form-group">
									<label for="nationalite">Situtation matrimoniale :</label>
									<select class="form-control" id="matrimoniale" name="matrimoniale">
									<?php
for($i = 0; $i < count($situations_matrimoniales); $i++){?> 
    <option value="<?php echo $situations_matrimoniales[$i]['idSitMatrimoniale']; ?>"> <?php echo $situations_matrimoniales[$i]['descriSitMatrimoniale']; ?></option> 
<?php } ?>

									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mr-2" id="modalAnnonce">Terminer</button>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
