<?php
    // class PDF extends FPDF
    // {
    //     protected $B = 0;
    //     protected $I = 0;
    //     protected $U = 0;
    //     protected $HREF = '';

    //     function WriteHTML($html)
    //     {
    //         // HTML parser
    //         $html = str_replace("\n",' ',$html);
    //         $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    //         foreach($a as $i=>$e)
    //         {
    //             if($i%2==0)
    //             {
    //                 // Text
    //                 if($this->HREF)
    //                     $this->PutLink($this->HREF,$e);
    //                 else
    //                     $this->Write(5,$e);
    //             }
    //             else
    //             {
    //                 // Tag
    //                 if($e[0]=='/')
    //                     $this->CloseTag(strtoupper(substr($e,1)));
    //                 else
    //                 {
    //                     // Extract attributes
    //                     $a2 = explode(' ',$e);
    //                     $tag = strtoupper(array_shift($a2));
    //                     $attr = array();
    //                     foreach($a2 as $v)
    //                     {
    //                         if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
    //                             $attr[strtoupper($a3[1])] = $a3[2];
    //                     }
    //                     $this->OpenTag($tag,$attr);
    //                 }
    //             }
    //         }
    //     }

    //     function OpenTag($tag, $attr)
    //     {
    //         // Opening tag
    //         if($tag=='B' || $tag=='I' || $tag=='U')
    //             $this->SetStyle($tag,true);
    //         if($tag=='A')
    //             $this->HREF = $attr['HREF'];
    //         if($tag=='BR')
    //             $this->Ln(5);
    //     }

    //     function CloseTag($tag)
    //     {
    //         // Closing tag
    //         if($tag=='B' || $tag=='I' || $tag=='U')
    //             $this->SetStyle($tag,false);
    //         if($tag=='A')
    //             $this->HREF = '';
    //     }

    //     function SetStyle($tag, $enable)
    //     {
    //         // Modify style and select corresponding font
    //         $this->$tag += ($enable ? 1 : -1);
    //         $style = '';
    //         foreach(array('B', 'I', 'U') as $s)
    //         {
    //             if($this->$s>0)
    //                 $style .= $s;
    //         }
    //         $this->SetFont('',$style);
    //     }

    //     function PutLink($URL, $txt)
    //     {
    //         // Put a hyperlink
    //         $this->SetTextColor(0,0,255);
    //         $this->SetStyle('U',true);
    //         $this->Write(5,$txt,$URL);
    //         $this->SetStyle('U',false);
    //         $this->SetTextColor(0);
    //     }
    // }

    $pdf = new FPDF('l','mm','A5');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,7,'JAJAJAJAJAA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'NANANANNANANANANA',0,1,'C');
    
    // 
    // 
    // $pdf->WriteHTML("htmlview");
    // 

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'No',1,0);
    $pdf->Cell(85,6,'Nama Jasa',1,0);
    $pdf->Cell(27,6,'Jumlah',1,0);
    $pdf->Cell(40,6,'Harga',1,1);

    $count = 1;
    foreach ($cartData as $cart){
        $pdf->Cell(20,6,$count++,1,0);
        $pdf->Cell(85,6,$cart->product_name,1,0);
        $pdf->Cell(27,6,$cart->quantity,1,0);
        $pdf->Cell(40,6, number_format($cart->price * $cart->quantity, 2), 2,1,1); 
    }

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(190,7,'Total',0,1, 'R');
    $pdf->Cell(190,7, number_format($totalPrice, 2), 0,1,'R'); 
    $pdf->Cell(190,7,'Tanggal Pembelian',0,1, 'R');
    $pdf->Cell(190,7, date_format(date_create($cart->date_buy), "d M Y"), 0,1,'R'); 
    
    $pdf->Output();
?>
<script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
</script>
