<?php
require("lib/fpdf/fpdf.php");
class PDF extends FPDF{
    function Header(){

        $this-> Image("recursos/logo.png",10,8,33);
        //Tipo de letra
        $this-> SetFont("Arial","B",15);
        //Mover a la derecha
        $this-> Cell(110);
        //Titulo
        $this-> Cell(60,10,'Reporte de categorias existentes',0,0,'C');
        //Salto de linea
        $this-> Ln(30);
        //Tipo de letra
        $this-> SetFont("Arial",'B',12);
        $this->SetFillColor(0,0,0);
        $this->SetTextColor(255,255,255);
        //Encabezado de la tabla
        $this-> Cell(30,10,utf8_decode('Categoria'),1,0,'C',true);
        $this-> Ln(10);
    }

    function Footer(){

        //Posi.cion al final de la hoja
        $this-> SetY(-15);
        $this-> SetFont('Arial','B',8);
        $this-> Cell(0,10,utf8_decode('Página '.$this->PageNo()),0,0,'C');
    }
}

//Consulta a base de datos
require("../servidor/conexion.php");
$consulta = "SELECT * FROM categorias";
$resultado = mysqli_query($conexion,$consulta);

$pdf = new PDF ('L');
//Referencia a la clase
$pdf -> AddPage();
$pdf-> SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
    $pdf->Cell(30,10,utf8_decode($row['categoria']),1,0,'C');
    $pdf-> Ln(10);
}
$pdf->Output();//Permite la salida de los datos


?>