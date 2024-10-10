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
        $this-> Cell(60,10,'Reporte de usuarios existentes',0,0,'C');
        //Salto de linea
        $this-> Ln(30);
        //Tipo de letra
        $this-> SetFont("Arial",'B',12);
        $this->SetFillColor(0,0,0);
        $this->SetTextColor(255,255,255);
        //Encabezado de la tabla
        $this-> Cell(30,10,'Nombre',1,0,'C',true);
        $this-> Cell(40,10,'Paterno',1,0,'C',true);
        $this-> Cell(40,10,'Materno',1,0,'C',true);
        $this-> Cell(140,10,'Correo',1,0,'C',true);
        $this-> Cell(30,10,utf8_decode('Télefono'),1,0,'C',true);

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
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion,$consulta);

$pdf = new PDF ('L');
//Referencia a la clase
$pdf -> AddPage();
$pdf-> SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
    $pdf->Cell(30,10,utf8_decode($row['nomusu']),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row['apausu']),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row['amausu']),1,0,'C');
    $pdf->Cell(140,10,$row['correo'],1,0,'C');
    $pdf->Cell(30,10,$row['telefono'],1,0,'C');
    $pdf-> Ln(10);
}
$pdf->Output();//Permite la salida de los datos


?>