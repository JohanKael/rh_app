	<div class="container">
		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Insertion des besoins de l'entreprise</h2>
						<form class="forms-sample">
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
									<select class="form-control" id="diplome">
									
									<option value="" disabled selected>Diplôme en possession</option>
										<option>Master</option>
										<option>Licence</option>
										<option>Bacc</option>
									</select>
								</div>
								<div class="form-group">
									<label for="experience">An d'expérience: </label>
									<input type="number" class="form-control" placeholder="Expérience" aria-describedby="basic-addon1" name="epxerience" id="experience">
								</div>
								<h3>Autres :</h3>
								<div class="form-group">
									<label for="nationalite">Nationalité :</label>
									<select class="form-control" id="nationalite">
										<option>Malagasy</option>
										<option>Anglais</option>
										<option>Francais</option>
										<option>Autres</option>
									</select>
								</div>
								<div class="form-group">
									<label for="nationalite">Genre :</label>
									<select class="form-control" id="genre">
										<option>Homme</option>
										<option>Femme</option>
									</select>
								</div>
								<div class="form-group">
									<label for="nationalite">Situtation matrimoniale :</label>
									<select class="form-control" id="matrimoniale">
										<option>Marié</option>
										<option>Célibataire</option>
										<option>Veuf(ve)</option>
										<option>Séoaré</option>
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
