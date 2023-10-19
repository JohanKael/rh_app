<?php
    if($info == NULL){ ?>
        <div>Aucune fiche de recrutement trouvé. </div>
    <?php 
    }else{ 
        foreach($info as $row) : ?>

        <div class="recruit-card col-md-5">

            <h3>Nous, le service <?php echo $row->nomService ?> recrutons <?php echo $row->recrut ; ?> nouveaux employés.</h3>
            <h4>Toutefois, si vous êtes intéressé par cet offre, voici les pré-requis : </h4><br>
            <p>Cadre professionnel :</p>
            <ul>
                <li>diplôme obtenue : <?php echo $row->descriDiplome; ?></li>
                <li>année d'expérience : <?php echo $row->anneeExperience; ?></li>
            </ul>
            <p>Autres :</p>
            <ul>
                <li>situtation matrimoniale : <?php echo $row->descriSitMatrimoniale; ?></li>
                <li>sexe : <?php echo $row->descriSexe; ?></li>
                <li>nationalite : <?php echo $row->nation; ?></li>
            </ul>
            <br>
            <a href="<?php echo site_url(); ?>/index.php/recruit/delete/<?php echo $row->idDemand?>" style="color: red; margin-left: 170px;">❌ Delete</a>
        </div>

<?php endforeach; 

    }

?>