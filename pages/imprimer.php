<?php
if (isset($_GET['id'])) {
    $_SESSION['id_commande'] = $_GET['id'];
}

require 'C:\wamp64\www\projet web\projet_2017\admin\lib\php\fpdf\fpdf.php';

$pdf = new FPDF('P', 'cm', 'A4'); // P pour format portrait , cm pour la hauteur de page, de ligne et A4 pour la taille de la page
$pdf->SetFont('Arial', 'B', 14);
$pdf->AddPage();
$pdf->setX(8.5);
$pdf->cell(3.5, 1, UTF8_decode('Facture'), 0, 0, 'C');
?>