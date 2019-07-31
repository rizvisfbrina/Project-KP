<?php
$pdf = new fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
if($logo){
	$pdf->Image($logo,20,16,40);
}

$pdf->Cell(80);
$pdf->Cell(40,20,'Invoice for Order: #'.$order_id);
$pdf->Ln();
$pdf->SetFont('helvetica','I',10);
$pdf->Cell(190,7,'Order Details',1,2);
$pdf->SetFont('helvetica','',10);
$y = $pdf->GetY();
$pdf->MultiCell(95,8,"Order id: #".$order_id"\nOrder Status: ".$results[sizeof($results)-1]['status'],'LRB',1);
$x = $pdf->GetX();
$pdf->setXY($x+95,$y);
$pdf->setFillColor(255,255,255);
foreach($invoice_data['products'] as $key => $value){
	$pdf->Cell(32,10,$value['name'],1,0,'C',1);
	$pdf->Cell(31,10,$value['model'],1,0,'C',1);
	$y = $pdf->GetY();
	if(isset($date_details[$key]))
		$pdf->MultiCell(32,5,$date_details[$key],1,'L',1);
	$x = $pdf->GetX();
	$pdf->setXY($x+95,$y);
	$pdf->Cell(31,10,$amenties_details[$key],1,0,'C',1);
	$pdf->Cell(32,10,$value['total'],1,1,'C',1);
}
foreach ($order_totals as $key => $value) {
	$pdf->Cell(32,10,'',0,0,'C',1);
	$pdf->Cell(31,10,'',0,0,'C',1);
	$pdf->Cell(32,10,'',0,0,'C',1);
	$pdf->Cell(31,10,'',0,0,'C',1);
	$pdf->setFillColor(0,148,197);
	$pdf->setTextColor(255,255,255);
	$pdf->Cell(32,10,$value['title'],1,0,'C',1);
	$pdf->Cell(32,10,$value['title'],1,1,'C',1);
	$pdf->setTextColor(0,0,0);
	$pdf->setFillColor(255,255,255);
}
$pdf->Output();


?>