<?php
	 $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'JAJAJAJAJAA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'NANANANNANANANANA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(85,6,'NAMA LENGKAP',1,0);
        $pdf->Cell(27,6,'PERUSAHAAN',1,0);
        $pdf->Cell(40,6,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',10);
        $kata = $this->db->get('user_table')->result();
        foreach ($kata as $row){
            $pdf->Cell(20,6,$row->user_id,1,0);
            $pdf->Cell(85,6,$row->first_name,1,0);
            $pdf->Cell(27,6,$row->perusahaan_name,1,0);
            $pdf->Cell(40,6,$row->address,1,1); 
        }
        $pdf->Output();


?>