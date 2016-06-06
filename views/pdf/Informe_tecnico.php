<?php 


//$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');



/*require ('fpdf.php');

class PDF extends fpdf*/ 
	//Cabecera de página
//function Header()

//{
//Logo
//$this->Image('C:\Users\rossy\Documents\rechner\imagenes\logo_galac_informe.jpg',25,80,150);
//}

//Pie de página
function Footer()
{
//Posición: a 1,5 cm del final
$this->SetY(-15);
//Arial italic 8
$this->SetFont('Arial','',7);
//Número de página
$this->Cell(20,-10,'SG-002 (27-04-2005)',0,0,'C');
//$this->Cell(0,-10,'Instituto de educación',0,0,'C');
$this->Cell(320,-10,'Página'.$this->PageNo().'/',0,0,'C');

}
	

// DECLARACION DE LA HOJA

$pdf= new PDF ('P','mm','A4');
$pdf->AddPage();// NUEVA PAGINA
$pdf->Image('C:\Users\rossy\Documents\rechner\imagenes\logo_galac_informe.jpg','L',5,40,35); // INSERTAR IMAGEN
$pdf-> Setfont('Arial','B',20);// DEFINICION DE LETRAS NOMBRE DE LA EMPRESA
$pdf->SetTextColor(0,80,0);// DEFINICION DE COLOR VERDE 
$pdf->cell(135,15,'OFICINA  RECHNER.CA',0,1,'C');//  NOMBRE DE LA EMPRESA
$pdf->SetFont('Arial','',10); // DEFINICION DE LETRAS  PEQUEÑA
$pdf->Cell(175,0,'Aliado de Negocio Galac Software de los Altos Mirandinos y Valles del Tuy',0,2,'C');// SLOGAN
$pdf->Ln(2);
$pdf->Cell(200,5,'Contacto:0212-3643790/3640360/Oficinarechner@gmail.com/galac-rechner@hotmail.com',0,2,'C');// CONTACTO
$pdf->Ln(1);
$pdf->Cell(190,5,'Calle Paez, Paralela a la Av.Bolivar. 50 metros de Ipostel. Los Teques.Edo Miranda',0,1,'C');// DIRECCCION
$pdf->Ln(1); // SALTO DE LINEA
$pdf->Cell(0,0,'',1,1,'C');// DEFINICION DE LA LINEA DIVISORIA
$pdf->Ln(2);
$pdf-> Setfont('Arial','B',16);// DEFINICION DE 2DO TITULO
$pdf->SetTextColor(50); // DEFINICION DE COLOR DEL SEGUNDO TITULO
$pdf->SetFillColor(200);
$pdf->cell(200,15,'HISTORICO DE LLAMADAS DE OPERADOR',0,0,'C',0);// 2DO TITULO DE LA PAGINA
//$pdf->Ln(1);

//******************************************************************

//Encabezado de la Tabla
$Y_Fields_Name_position = 160;
//Archivos que se colocaran debajo de la cabecera
$Y_Table_Position = 77;

//Primero se crea el encabezado de la tabla
//Se coloca color gris al encabezado

//*******************************************************************

//Lineas del Formulario
$pdf->SetFillColor(232,232,232);
// Primera Fila 
$pdf->Line(6,57,204,57);// Linea horizontal primera
$pdf->Line(50,58,50,70);// Linea Vertical  derc operador
$pdf->Line(80,58,80,70);// Linea Vertical  izq fecha
$pdf->Line(6,78,204,78); // Linea Horizontal primera horizontal
$pdf->Line(107,70,107,58);// Linea Vertical fecha derecha
$pdf->Line(137,70,137,58);// Linea Vertical ciudad izq
$pdf->Line(175,70,175,58);// Linea Vertical estado izq

//$pdf->Line(6,274,202,274);// Linea horizontal  Final

$pdf->Line(30,80,30,90); // Linea Vertical
$pdf->Line(58,80,58,90); // Linea Vertical
$pdf->Line(88,80,88,90); // Linea Vertical
$pdf->Line(112,80,112,90); // Linea Vertical
$pdf->Line(182,80,182,90); // Linea Vertical
$pdf->Line(6,71,204,71); // Linea Horizontal
// Cuerpo Bucle para hacer repetitivo
$posy=98;
$posyv=90;
for($i=0;$i<15;$i++)
{
   $pdf->Line(6,$posy,204,$posy); // Linea Horizontal
   $pdf->Line(30,$posyv,30,$posyv+8); // Linea Vertical
   $pdf->Line(58,$posyv,58,$posyv+8); // Linea Vertical
   $pdf->Line(88,$posyv,88,$posyv+8); // Linea Vertical
   $pdf->Line(112,$posyv,112,$posyv+8); // Linea Vertical
   $pdf->Line(182,$posyv,182,$posyv+8); // Linea Vertical
   $posy=$posy+8;
   $posyv=$posyv+8;
}
// Lineas inferior
$pdf->Line(105,213,105,219); // Linea Vertical
$pdf->Line(105,251,105,274); // Linea Vertical
$posicion=219;
for($j=0;$j<5;$j++)
{   
   $pdf->Line(6,$posicion,204,$posicion); // Linea Horizontal
   $posicion=$posicion+8;
}

//Texto Titulos 
// Principal
$pdf->SetFont('Arial','B',8);
$pdf->Text(7,62,'Nombre del Operador');
$pdf->Text(52,62,'Periodo de Consulta');
$pdf->Text(81,62,'Fecha de Solitud');
$pdf->Text(108,62,'Zona Atencion');
$pdf->Text(138,62,'Ciudad');
$pdf->Text(176,62,'Cargo');
// Secundario
$pdf->Text(10,86,'Id_Llamada');
$pdf->Text(40,86,'Fecha');
$pdf->Text(66,86,'Tipo llamada');
$pdf->Text(95,86,'Empresa ');
$pdf->Text(140,86,'Concepto');
$pdf->Text(184,86,'Contacto');
// Parte Inferior
$pdf->SetFont('Arial','B',8);
//$pdf->Text(7,213,'Total de Llamadas del cliente');
$pdf->Text(7,216,' Total Llamadas Entrantes:');
$pdf->Text(108,216,' Total Llamadas Salientes:');
$pdf->Text(7,226,'Observaciones');
$pdf->Text(7,256,'Enviado');
$pdf->Text(7,259,'Nombre');
$pdf->Text(108,256,'Recibido');
$pdf->Text(108,259,'Nombre');
$posy=272;
$posx=8;
$posx2=60;
for($j=0;$j<2;$j++)
{
   $pdf->Text($posx,$posy,'Firma');
   $pdf->Text($posx2,$posy,'Fecha');
   $posx=$posx+100;
   $posx2=$posx2+100;
}
/********************************************************************/
//Texto encabezado principal
$nenvio=12;
$uemite='x';
$date='12-12-12';


$pdf->SetFont('Arial','',9);
//$pdf->Text(138,58,"Nro de Envio:".$nenvio);
$pdf->Text(11,69,$uemite);
$pdf->Text(83,69,$date);
$pdf->Text(110,69,"");
$pdf->Text(140,69,'01');
//$pdf->Text(/*178*/-10,/*34*/70,""/*$_SESSION['sql']*/);


/*******************************************************************/
$cantidad=1;
$realizado='si';
$ncampos=0;



//Texto parte central (Carpetas y Documentos)
$pdf->SetFont('Arial','',7);
$filas    = 0;
for ($i=0;$i<$cantidad;$i++)
{
   $columnas = 0; $salto =0;
   for ($j=0;$j<$ncampos;$j++)
   {
      $pdf->Text(8+$columnas,55+$filas,$arreglod[$i][$j]);
      if (($j==0) || ($j==2))
         $salto = 22;
      else 
         $salto = 0;
      
      $columnas = $columnas + $salto + 19;
      //$pdf->Text(31,55,'cosa');
   }
   $filas = $filas + 9;
}
$pdf->Text(25,216,$cantidad);
/*******************************************************************/
//Texto Parte Inferior
$pdf->Text(11,262,$realizado);
$pdf->Text(70,272,$date);



//$pdf->OutPut();// CIEERE DEL OBJETO

?>
