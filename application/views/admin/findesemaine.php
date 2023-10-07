

<div class="col-md-8 grid-margin stretch-card">
    <form action="<?php echo site_url() ?>index.php/finsemaine/traitFinSemaine" method="post">
        <h2>Fin de semaine : </h2>
        <label for="">Choississez le service : </label>
        <select name="service" id="" class="form-control" >
            <option value="" disabled selected>Liste des services</option>
            <?php foreach($services as $service){ ?>
                <option value="<?php echo $service->idService ; ?>"><?php echo $service->nomService ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="">Entrez l'heure fini : </label>
        <input type="number" name="heure" id="" class="form-control">
        <br>
        <input type="submit" value="Soummettre" class="btn btn-primary mr-2">
    </form>
</div>

