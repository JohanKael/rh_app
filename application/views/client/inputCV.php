
<div class="col-md-12 grid-margin stretch-card">
    <h2 class="card-title">Insertion de votre CV</h2>
    <form action="<?php echo site_url("index.php/InputCV/traitInsertionCV"); ?>" method="post">
        <div class="row">
            <div class="col-md-8">
                <h3> <u> Identite : </u> </h3>
                <div class="form-group">
                    <label for="nom" class="col-md-4 control-label">Nom</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nom" id="nom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-md-4 control-label">Prenom</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="prenom" id="prenom"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date_de_naissance" class="col-md-5 control-label">Date de naissance</label>
                    <div class="col-md-7">
                        <input type="date" class="form-control" aria-describedby="basic-addon1" name="date_de_naissance" id="date_de_naissance" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adresse" class="col-md-4 control-label">Adresse</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="adresse" id="adresse" required>
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
                        <input type="number" class="form-control" aria-describedby="basic-addon1" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-md-4 control-label">Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" aria-describedby="basic-addon1" name="mail" id="mail" required>
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
                        <input type="number" class="form-control" aria-describedby="basic-addon1" name="experience" id="experience" required>
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
                        <select id="etat" name="etat" class="form-control">
                            <?php for ($i = 0 ;$i < count($states) ; $i++ ) { ?>
                                <option value="<?php echo $states[$i]['idSitMatrimoniale']; ?>"><?php echo $states[$i]['descriSitMatrimoniale'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div><br>
        <input type="submit" value="Soummettre" class="btn btn-primary mr-2">
    </form>
</div>
