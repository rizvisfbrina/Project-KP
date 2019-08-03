<?php  
// require('rotation.php');
// require('fpdf.php');
// require_once(APPPATH . '/third_party/fpdf/fpdf.php');

    $pdf = new FPDF('P','mm','A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetTitle('invoice'.date_format(date_create($orders->date_buy), "dMY").'.pdf');
    $pdf->Ln(10);

    // foreach ($cartData as $cart){
  
     
        // $image = "/products/image1.jpg";
        $image = base_url('style/assets/images/watermark.png');
        $pdf->Image($image, 15, 75, -100);

        $imgup = base_url('style/assets/images/sebelum.png');
        $pdf->Image($imgup, 145, 0, -180);

        $pdf->SetFont('Arial','BIU',12);
        $pdf->Cell(290,-20,'INVOICE',0,1,'C');
        $pdf->SetY(15);

         $pdf->Cell(9,1,'',0,1);
         $pdf->SetFont('Arial','U',9);
         $pdf->Cell(9,1,'PT Pelindo Daya Sejahtera',0,0,'L');
         $pdf->Cell(9,3,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,3,'Jl. Perak Timur 480 Surabaya, Jawa Timur 60165',0,0,'L');
         $pdf->Cell(9,4,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,4,'Telp. (031)51166384 || Fax. (031)51166386',0,0,'L');
         $pdf->Cell(9,4,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,4,'info@ptpds.co.id',0,0,'L');

         $pdf->Ln(10);

         $pdf->Cell(9,1,'',0,1);
         $pdf->SetFont('Arial','B',9);
         $pdf->Cell(9,1,'Billing to:',0,0,'L');
         $pdf->Cell(9,3,'',0,1);
         $pdf->SetFont('Arial','U',9);
         $pdf->Cell(9,3,$user->first_name.' '.$user->last_name.' '.'('.$user->perusahaan_name.')',0,0,'L');
         $pdf->Cell(9,4,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,4,$shipping_address->address.','.' '.$shipping_address->town.','.' '.$shipping_address->province.' '.$shipping_address->postcode,0,0,'L');
         $pdf->Cell(9,4,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,4,$user->email,0,0,'L');
         $pdf->Cell(9,4,'',0,1);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(9,4,'Date buy: '.date_format(date_create($orders->date_buy), "d M Y"),0,0,'L');



        $pdf->Ln(10);
        $pdf->Cell(20,12,'',0,1,'C');

        $pdf->SetFillColor(209,212,207);
        $pdf->SetTextColor(96);
        $pdf->SetDrawColor(209, 212, 207);
        $pdf->SetLineWidth(.3);
        // $pdf->SetFont('','B');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,12,'NO',1,0,'C',1);
        $pdf->Cell(65,12,'SERVICE',1,0,'C',1);
        $pdf->Cell(40,12,'PER UNIT',1,0,'C',1);
        $pdf->Cell(25,12,'QTY',1,0,'C',1);  
        $pdf->Cell(40,12,'SUBTOTAL',1,1,'C',1);

        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(96);
        $pdf->SetFont('');

        $count = 1;
        foreach ($cartData as $cart){
            $pdf->Cell(20,8,$count++,1,0,'C');
            $pdf->Cell(65,8,' '.$cart->product_name,1,0,'L');
            $pdf->Cell(40,8,'Rp '.number_format($cart->price, 2),1,0,'C');
            $pdf->Cell(25,8,$cart->quantity,1,0,'C');
            $pdf->Cell(40,8, 'Rp '.number_format($cart->price * $cart->quantity, 2),1,1,'C'); 
        }

       
        $pdf->Ln(10);
        $pdf->SetTextColor(0);

        $pdf->Cell(12,5,'',0,1);
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(150,6,'Subtotal',0,0, 'R');
        $pdf->Cell(30,6,'Rp '.number_format($totalPrice1, 2), 0,0, 'R');
        
        $pdf->Cell(12,5,'',0,1);
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(150,7,'Pajak',0,0, 'R');
        $pdf->Cell(30,7, 'Rp '.number_format($totalTax, 2), 0,0, 'R');
        
        $pdf->Cell(12,5,'',0,1);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(150,8,'Total',0,0, 'R');
        $pdf->Cell(30,8, 'Rp '.number_format($totalPrice, 2), 0,0, 'R');


    $pdf->SetY(259);
    $imgdown = base_url('style/assets/images/before.png');
    $pdf->Image($imgdown, 0, 200, 200);

    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'R');
    $pdf->Ln(4);
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(date_default_timezone_set("Asia/Bangkok"));
    $timestamp = time();
    $pdf->Cell(0,10, date("d-m-Y  h:i:sa", $timestamp), 0,0,'R');

    
    $pdf->Output();
    
?>
<script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
</script>