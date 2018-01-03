<?php

$commande = new CommandeDB($cnx);
$commande->addCommande(array("id_client" => 1, "id_jeux" => 2 , "date" => "bonjour", "prix" => 50));
print ("blabla");