<?php
if (isset($_SESSION['mon_client'])) {
    $client = new ClientDB($cnx);
    $client_connecte = $client->getClient($_SESSION['mon_client']);
}


require '../admin/lib/php/fpdf/fpdf.php';


$pdf = new FPDF('P', 'cm', 'A4'); // P pour format portrait , cm pour la hauteur de page, de ligne et A4 pour la taille de la page
$pdf->SetFont('Arial', 'B', 14);
$pdf->AddPage();
$pdf->setX(8.5);
$pdf->cell(3.5, 1, UTF8_decode('Nos pâtisseries'), 0, 0, 'C');
//sous_titre
$pdf->SetFillColor(200, 10, 10);
$pdf->SetDrawColor(0, 0, 255);
$pdf->SetTextColor(255, 255, 255);
$pdf->setXY(3, 2);
$pdf->cell(15, .7, UTF8_decode('Pour tout évenement'), 0, 0, 'C',1);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);

$pdf->SetFont('Arial', '',12);
$y = $y +2;
    $pdf->setXY($x,$y);
    $pdf->cell(3.5,1,$client_connecte[0]['NOM'],0,0,'C');
    $pdf->SetXY($x+8,$y);
    $pdf->cell(1,1,$client_connecte[0]['PRENOM'],0,0,'C');
    
    $y = $y + 2;


$pdf->Output();



?>
