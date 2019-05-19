<?php
require('fpdf.php');
$salvar = 0;
$pasta = '../images_pdf_scanner/One Punch-Man/cap1/';
$arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);
$pdf = new FPDF();

$i = 0;
foreach($arquivos as $img){
    echo '<img src="' . $img . '"/>';
    if($salvar == 1){
        $image = $img;
        $pdf->AddPage();
        $pdf->Image($image,20,40,170,170);
        }
    $i++;
}

$dir = "../pdf/";
$filename = $dir . "teste.pdf";
$pdf->Output('F', $filename, true);