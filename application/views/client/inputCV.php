
<div class="col-md-12 grid-margin stretch-card">
    <h2 class="card-title">Insertion de votre CV</h2>
    <form action="<?php echo site_url("index.php/InputCV/traitInsertionCV"); ?>" method="post">
        <div class="row">
            <div class="col-md-8">
                <h3> <u> Identite : </u> </h3>
                <div class="form-group">
                    <label for="nom" class="col-md-4 control-label">Nom</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nom" id="nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-md-4 control-label">Prenom</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="prenom" id="prenom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="date_de_naissance" class="col-md-5 control-label">Date de naissance</label>
                    <div class="col-md-7">
                        <input type="date" class="form-control" aria-describedby="basic-addon1" name="date_de_naissance" id="date_de_naissance">
                    </div>
                </div>
                <div class="form-group">
                    <label for="adresse" class="col-md-4 control-label">Adresse</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="adresse" id="adresse">
                    </div>
                </div>
            </div>
        </div><br>

        <br><div class="row">
            <div class="col-md-8">
                <h3> <u> Contact : </u> </h3>
                <div class="form-group">
                    <label for="phone" class="col-md-4 control-label">Numero telephone</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control" aria-describedby="basic-addon1" name="phone" id="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-md-4 control-label">Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" aria-describedby="basic-addon1" name="mail" id="mail">
                    </div>
                </div>
            </div>
        </div><br>

        <br><div class="row">
            <div class="col-md-8">
                <h3> <u> Experience : </u> </h3>
                <div class="form-group">
                    <label for="experience" class="col-md-4 control-label">Annee d'experience</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control" aria-describedby="basic-addon1" name="experience" id="experience">
                    </div>
                </div>
            </div>
        </div><br>

        <br><div class="row">
            <div class="col-md-8">
                <h3> <u> Situation patrimoniale : </u> </h3>
                <div class="form-group">
                    <label for="etat" class="col-md-4 control-label">Etat</label>
                    <div class="col-md-8">
                        <select name="etat" id="etat" class="form-control">
                            <?php foreach ($states as $state) { ?>
                                <option value="<?php echo $state->idSitMatrimoniale ; ?>"><?php echo $state->descriSitMatrimoniale ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div><br>
        <input type="submit" value="Soummettre" class="btn btn-primary mr-2">
    </form>
</div>
