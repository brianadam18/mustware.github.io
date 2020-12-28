<?php 
include_once 'dbconfig.php';
require('pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('logo/batik.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Batik Of Java',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 081363872020',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL.Soekarno Hatta No.9 Malang - Jawa Timur',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Email : batikJava@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Jenis', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Suplier', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'modal', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'harga', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'jumlah', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query = "SELECT * from tb_barang";
$stmt = $DB_con->prepare($query);
$stmt->execute();
while($lihat=$stmt->fetch(PDO::FETCH_ASSOC)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_brg'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['jenis'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['suplier'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['harga_modal'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['harga_jual'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['jumlah'], 1, 1,'C');

	$no++;
}

$pdf->Output("laporan_data_barang.pdf","I");

?>