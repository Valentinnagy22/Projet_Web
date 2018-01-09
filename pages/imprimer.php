<?php

require '../admin/lib/php/adm_liste_include.php';
require '../admin/lib/php/dbConnectMysql.php';
require '../admin/lib/php/classes/Connexion.class.php';
require '../admin/lib/php/classes/Commande.class.php';
require '../admin/lib/php/classes/CommandeDB.class.php';
require '../admin/lib/php/classes/Client.class.php';
require '../admin/lib/php/classes/ClientDB.class.php';
require '../admin/lib/php/classes/Jeux.class.php';
require '../admin/lib/php/classes/JeuxDB.class.php';


$cnx = Connexion::getInstance($dsn, $user, $pass);

if (isset($_GET['id'])) {
    $_SESSION['id_commande'] = $_GET['id'];
}
if (isset($_SESSION['id_commande'])) {
    $commande = new CommandeDB($cnx);
    $commande_facture = $commande->getCommande($_SESSION['id_commande']);
    $client = new ClientDB($cnx);
    $client_facture =$client->getClient($commande_facture[0]['ID_CLIENT']);
    $jeux = new JeuxDB($cnx);
    $jeux_facture =$jeux->getJeux($commande_facture[0]['ID_JEUX']);
}

require 'C:\wamp64\www\projet web\projet_2017\admin\lib\php\fpdf\fpdf.php';


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);


$pdf->Cell(47, 10, 'Geek Garden', 'B');
$pdf->Ln(0, 0);

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(200, 10, 10);
$pdf->Cell(60);
$pdf->Cell(50, 40, UTF8_decode('Commande numéro ') . $commande_facture[0]['ID_CLIENT'], 'C');
$pdf->Ln(0, 0);

$pdf->SetFont('Arial', 'I', 11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(3);
$pdf->Cell(50, 85, UTF8_decode('Date et heure de la commande : ') . $commande_facture[0]['DATE'], 'C');
$pdf->Ln(0, 0);

$pdf->Cell(3);
$pdf->Cell(50, 105, UTF8_decode('Client concerné : ') . $client_facture[0]['NOM']. (' ') . $client_facture[0]['PRENOM'], 'C');
$pdf->Ln(0, 0);

 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(20);
 $pdf->Cell(50,170,UTF8_decode('Quantité'),'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(60);
 $pdf->Cell(50,170,UTF8_decode('Description'),'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(130);
 $pdf->Cell(50,170,UTF8_decode('Prix'),'C');
 $pdf->Ln(0,0);

 $pdf->SetFont('Arial','I',11);
 $pdf->Cell(25);
 $pdf->Cell(50,190,UTF8_decode('1'),'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(60);
 $pdf->Cell(50,190,$jeux_facture[0]['NOM'],'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(130);
 $pdf->Cell(50,190,$commande_facture[0]['PRIX'],'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(142);
 $pdf->Cell(50,190, UTF8_decode('EUR') ,'C');
 $pdf->Ln(0,0);
 
 $pdf->SetFont('Arial','B',18);
 $pdf->Cell(20);
 $pdf->Cell(50,240,UTF8_decode('TOTAL : '),'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(50);
 $pdf->Cell(50,240,$commande_facture[0]['PRIX'],'C');
 $pdf->Ln(0,0);
 
 $pdf->Cell(70);
 $pdf->Cell(50,240, UTF8_decode('EUR') ,'C');
 $pdf->Ln(0,0);

$pdf->Output();
?>