<?php
$info = new JeuxDB($cnx);
$liste_jeux = $info->readallJeux();
$nbrJeux = count($liste_jeux);
//var_dump($liste_jeux);
?>


<div class="container">
    <?php
    for ($i = 0; $i < $nbrJeux; $i++) {
        ?>
        <div class="row catalogue_image">
            <div class="col-sm-3">
                </br></br>
                <img src="./admin/images/<?php print $liste_jeux[$i]['IMAGE'] ?>" alt="Jeux"/>
            </div>
            <div class="col-sm-4 text-center"> 
                </br></br>
                <div class="row catalogue_plateforme">
                    <div class="col-sm-12">
                        <img src="./admin/images/<?php print $liste_jeux[$i]['PLATEFORME'] ?>" alt="Plateforme"/>
                    </div>                             
                </div>
                <div class="row catalogue_nom">
                    <div class="col-sm-12">
                        </br></br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['NOM']);
                        ?>
                    </div>                             
                </div>
                <div class="row catalogue_genre">
                    <div class="col-sm-12">
                        </br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['GENRE']);
                        ?>
                    </div>                             
                </div>
                <div class="row catalogue_prix">
                    <div class="col-sm-12">
                        </br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['PRIX']);
                        ?>€
                    </div>                             
                </div>
                <div class="row plus_infos">
                    <div class="col-sm-12">
                        </br>
                        <a href="index.php?page=commander.php&id=<?php print $liste_jeux[$i]['ID_JEUX']; ?>">
                            Commander
                        </a>                 
                    </div>                             
                </div>
            </div>
        </div>
        </br>
        <?php
    }
    ?>
</div>