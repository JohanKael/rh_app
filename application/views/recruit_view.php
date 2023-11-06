<?php
    if($info == NULL){ ?>
        <div>Aucune fiche de recrutement trouvé. </div>
    <?php 
    }else{ 
        foreach($info as $row) : ?>

        <div class="recruit-card col-md-5">

            <h3>Nous, le service <?= $row->nomService ?> recrutons <?= $row->recrut ; ?> nouveaux employés.</h3>
            <h4>Toutefois, si vous êtes intéressé par cet offre, voici les pré-requis : </h4><br>
            <p>Cadre professionnel :</p>
            <ul>
                <li>diplôme obtenue : <?= $row->descriDiplome; ?></li>
                <li>année d'expérience : <?= $row->anneeExperience; ?></li>
            </ul>
            <p>Autres :</p>
            <ul>
                <li>situtation matrimoniale : <?= $row->descriSitMatrimoniale; ?></li>
                <li>sexe : <?= $row->descriSexe; ?></li>
                <li>nationalite : <?= $row->nation; ?></li>
            </ul>
            <br>
            <a href="<?php echo site_url(); ?>/index.php/recruit/delete/<?= $row->idDemand?>" style="color: red; margin-left: 170px;">❌ Delete</a>
        </div>

<?php endforeach; 

    }

?>