<?php
    if($info == NULL){ ?>
        <div>Aucune fiche de recrutement trouvé. </div>
    <?php 
    }else{ 
        for($i = 0; $i < count($info); $i++){?> 

        <div class="recruit-card col-md-5">

            <h3>Nous, recrutons <?php echo $info[$i]['recrut'] ; ?> nouveaux <?php echo $info[$i]['nomService'] ?>.</h3>
            <h4>Toutefois, si vous êtes intéressé par cet offre, voici les pré-requis : </h4><br>
            <p>Cadre professionnel :</p>
            <ul>
                <li>diplôme obtenue : <?php echo $info[$i]['descriDiplome']; ?></li>
                <li>année d'expérience : <?php echo $info[$i]['anneeExperience']; ?></li>
            </ul>
            <p>Autres :</p>
            <ul>
                <li>situtation matrimoniale : <?php echo $info[$i]['descriSitMatrimoniale']; ?></li>
                <li>sexe : <?php echo $info[$i]['descriSexe']; ?></li>
                <li>nationalite : <?php echo $info[$i]['nation']; ?></li>
            </ul>
            <br>
            <a href="<?php echo site_url(); ?>/index.php/recruit/delete/<?php echo $info[$i]['idDemand']?>" style="color: red; margin-left: 170px;">❌ Delete</a>
        </div>
            <?php } ?>

        <?php
    }
        ?>