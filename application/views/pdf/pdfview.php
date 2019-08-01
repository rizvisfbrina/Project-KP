
<?php
    
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    // $image1 = "/logo.png";
    // $pdf->Image($image1,10,10,-300);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'PT Pelindo Daya Sejahtera',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'INVOICE',0,1,'C');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(20,6,'PROJECT',0,0, 'L');
    $pdf->Cell(20,6,'PROJECT',0,0, 'L');
    $pdf->Cell(155,6,'Jl. Perak Timur 480 Surabaya', 0,0, 'R');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(20,7,'CLIENT',0,0,'L');
    $pdf->Cell(20,7,'CLIENT',0,0,'L');
    $pdf->Cell(155,7,'(031) 51166384',0,0,'R');
    
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(20,8,'ADDRESS',0,0,'L');
    $pdf->Cell(20,8,'ADDRESS',0,0,'L');
    $pdf->Cell(155,8,'(031) 51166386',0,0,'R');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(20,9,'EMAIL',0,0,'L');
    $pdf->Cell(20,9,'EMAIL',0,0,'L');
    $pdf->Cell(155,9,'info@ptpds.co.id',0,0,'R');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(20,10,'DATE',0,0,'L');
    $pdf->Cell(40,10, date_format(date_create($cart->date_buy), "d M Y"), 0,0,'L'); 
    
    
    $pdf->Cell(10,12,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'NO',1,0);
    $pdf->Cell(85,6,'SERVICE',1,0);
    $pdf->Cell(27,6,'QTY',1,0);
    $pdf->Cell(40,6,'TOTAL',1,1);

    $count = 1;
    foreach ($cartData as $cart){
        $pdf->Cell(20,6,$count++,1,0);
        $pdf->Cell(85,6,$cart->product_name,1,0);
        $pdf->Cell(27,6,$cart->quantity,1,0);
        $pdf->Cell(40,6, number_format($cart->price * $cart->quantity, 2),1,1,0); 
    }

    $pdf->Cell(12,5,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(120,6,'Total Harga',0,0, 'R');
    $pdf->Cell(50,6,number_format($totalPrice1, 2), 0,0, 'R');
    
    $pdf->Cell(12,5,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(120,7,'Total Pajak',0,0, 'R');
    $pdf->Cell(50,7, number_format($totalTax, 2), 0,0, 'R');
    
    $pdf->Cell(12,5,'',0,1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(120,8,'Total yang harus dibayar',0,0, 'R');
    $pdf->Cell(50,8, number_format($totalPrice, 2), 0,0, 'R');
    
    $pdf->Output();
    
?>
<script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
</script>