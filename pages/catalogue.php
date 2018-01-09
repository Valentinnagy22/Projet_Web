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
        <div class="row catalogue">
            <div class="col-sm-3">
                </br></br>
                <img src="./admin/images/<?php print $liste_jeux[$i]['IMAGE_JEUX'] ?>" alt="Jeux"/>
            </div>
            <div class="col-sm-4 text-center"> 
                </br></br>
                <div class="row catalogue_plateforme">
                    <div class="col-sm-12">
                        <img src="./admin/images/<?php print $liste_jeux[$i]['PLATEFORME_JEUX'] ?>" alt="Plateforme"/>
                    </div>                             
                </div>
                <div class="row catalogue_nom">
                    <div class="col-sm-12">
                        </br></br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['NOM_JEUX']);
                        ?>
                    </div>                             
                </div>
                <div class="row catalogue_genre">
                    <div class="col-sm-12">
                        </br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['GENRE_JEUX']);
                        ?>
                    </div>                             
                </div>
                <div class="row catalogue_prix">
                    <div class="col-sm-12">
                        </br>
                        <?php
                        print utf8_decode($liste_jeux[$i]['PRIX_JEUX']);
                        ?>€
                    </div>                             
                </div>
                <div class="row catalogue_commander">
                    <div class="col-sm-12">
                        </br>
                        <?php
                        if (isset($_SESSION['client'])) {
                            ?>
                            <a href="index.php?page=commander.php&id=<?php print $liste_jeux[$i]['ID_JEUX']; ?>">
                                Commander
                            </a> 
                            <?php }else{
                                print "Veuillez vous connectez pour commander.";
                            }
                        ?>

                    </div>                             
                </div>
            </div>
        </div>
        </br>
        <?php
    }
    ?>
</div>