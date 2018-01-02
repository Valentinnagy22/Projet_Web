<?php
if (isset($_GET['id'])) {
    $_SESSION['id_jeux'] = $_GET['id'];

}
if (isset($_SESSION['id_jeux'])) {
    $jeux = new JeuxDB($cnx);
    $jeux_choisi = $jeux->getJeux($_SESSION['id_jeux']); 
    print ($_SESSION['mon_client']);
}
?>

<div class="row commander_commander">
    <div class="col-sm-3">
        </br></br>
        <img src="./admin/images/<?php print $jeux_choisi[0]['IMAGE'] ?>" alt="Jeux"/>
    </div>
    <div class="col-sm-4 text-center"> 
        </br></br>
        <div class="row catalogue_plateforme">
            <div class="col-sm-12">
                <img src="./admin/images/<?php print $jeux_choisi[0]['PLATEFORME'] ?>" alt="Plateforme"/>
            </div>                             
        </div>
        <div class="row catalogue_nom">
            <div class="col-sm-12">
                </br></br>
                <?php
                print utf8_decode($jeux_choisi[0]['NOM']);
                
                ?>
            </div>                             
        </div>
        <div class="row catalogue_genre">
            <div class="col-sm-12">
                </br>
                <?php
                print utf8_decode($jeux_choisi[0]['GENRE']);
                ?>
            </div>                             
        </div>
        <div class="row catalogue_prix">
            <div class="col-sm-12">
                </br>
                <?php
                print utf8_decode($jeux_choisi[0]['PRIX']);
                ?>€
            </div>                             
        </div>
        </br></br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
                <input type="submit" name="acheter" id="acheter" value="Acheter" class="pull-right">&nbsp;  
            </div>
            <div class="col-sm-4">
                <a href="index.php?page=catalogue.php">
                    <input type="button" value="Annuler" name="annuler" id="annuler">
                </a>
            </div>
        </div>
    </div>

</div>
