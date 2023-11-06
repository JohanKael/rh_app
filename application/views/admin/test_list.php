

<div class="col-md-8 grid-margin stretch-card">

    <form action="" method="POST">
        <div class="form-group">
            <label for="">Choississez le service : </label>
            <select name="service" id="" class="form-control" >
                <option value="" disabled selected>Liste des services</option>
                    <?php foreach($services as $service){ ?>
                        <option value="<?php echo $service->idService ; ?>"><?php echo $service->nomService ?></option>
                    <?php } ?>
            </select>
        </div>
        <br>
        <div class="form-group">
			<label for="horaire">Entrez la question :</label>
			<input type="text" class="form-control" placeholder="Question" aria-describedby="basic-addon1" name="nom_service" id="">
		</div>

    </form>

</div>