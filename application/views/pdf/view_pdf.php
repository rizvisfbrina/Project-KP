<?php
    // echo $this->session->flashdata("msg");
    $pdf = new FPDF('l','mm','A5');
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,7,'JAJAJAJAJAA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'NANANANNANANANANA',0,1,'C');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'ID',1,0);
    $pdf->Cell(85,6,'NAMA LENGKAP',1,0);
    $pdf->Cell(27,6,'PERUSAHAAN',1,0);
    $pdf->Cell(40,6,'ALAMAT',1,1);

    // $cardData = $data['cartData'] = $this->cart_model->getProductsInCart($cartid);
    // $data['totalPrice'] = 0;

    // $kata = $this->db->get('cart_table')->result();
    // foreach ($cardData as $row){
    //     $pdf->Cell(20,6,$row->user_id,1,0);
    //     $pdf->Cell(85,6,$row->product_name,1,0);
    //     $pdf->Cell(27,6,$row->quantity,1,0);
    //     $pdf->Cell(40,6,$data['totalPrice'] += $row->price * $row->quantity, 2,1,1); 
    // }

    $cartData = $this->db->get('cart_table')->result();
    foreach ($cartData as $cart) {
        $pdf->Cell(20,6,$cart->user_id,1,0);
        $pdf->Cell(85,6,$cart->date_buy,1,0);
        $pdf->Cell(27,6,$cart->cart_id,1,0);
        $pdf->Cell(40,6,$cart->flag,1,1); 

    }

    // $kata = $this->db->get('cart_table')->result();
    // if(isset($result)){
        // foreach ($data as $row){
        //     $pdf->Cell(20,6,$count++,1,0);
        //     $pdf->Cell(85,6, $row,1,0);
        //     $pdf->Cell(27,6,$cart->quantity,1,0);
        //     $pdf->Cell(40,6,$cart->price * $cart->quantity, 21); 
        // }
    // }
    
    $pdf->Output();
?>