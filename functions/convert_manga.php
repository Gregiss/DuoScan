<?php
require('fpdf.php');
$salvar = 1;
$pasta = '../images_pdf_scanner/One Punch-Man/cap1/';
$arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);
$pdf = new FPDF();
$manga = 'one-punch-man';

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

if($salvar == 1){
mkdir("../pdf/" . $manga);
$dir = "../pdf/" . $manga . '/';
$capitulo = 1;
$cap = 'Capitulo_' . $capitulo;
$filename = $dir . $cap . ".pdf";
$pdf->Output('F', $filename, true);
}