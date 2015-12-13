<?php
require('fpdf/fpdf.php');
$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("anggota");

$id = @$_GET['id'];

$data = mysql_query("SELECT * FROM anggota WHERE idAnggota = '$id'");
$row = mysql_fetch_array($data);
$nama = $row['Nama'];
$pdf = new FPDF('P','cm','a12');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetMargins(0,0,0);
$pdf->SetTextColor(137,213,75);
$pdf->Ln(0.1);
$pdf->Cell(0,1,"WE ARE",1,1,'C',true);
$pdf->Ln(0.1);
$pdf->Cell(0,1,"BANDUNG",1,1,'C',true);
$pdf->Cell(0,1,"",1,1,'C',true);
$pdf->Cell(0,1,"BEATBOX",1,1,'C',true);
$pdf->Cell(0,1,"",1,1,'C',true);
$pdf->Cell(0,1,"FAMILY",1,1,'C',true);
$pdf->Ln(0.1);
$pdf->Cell(0,1,$nama,1,1,'C',true);
$pdf->Output();
?>