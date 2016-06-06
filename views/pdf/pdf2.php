<?
$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
    $html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

    <table align="center"><tr>
    <td align="center"><b>INFORME TECNICO</b></td>
    </tr></table>
    Total Resultados: '.$contador.'
        <table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1" width="100%" border="0">
            <tr class="principal">
                <td class="principal" width="7%">&nbsp;N° Control</td>
                <td class="principal" width="7%">&nbsp;N° Contrato</td>
                <td class="principal" width="19%">&nbsp;Empresa</td>
                <td class="principal" width="10%">&nbsp;Estado</td>
                <td class="principal" width="9%">&nbsp;Monto Contratado</td>
                <td class="principal" width="25%">&nbsp;Objeto Contrato</td>
                <td class="principal" width="14%">&nbsp;Personal Actuante</td>
                <td class="principal" width="9%">&nbsp;Tipo Informe</td>
            </tr>';
         $i=0;
         $val=count($dataProvider);
         
         while($i<$val){
$html.='
            <tr class="odd">
                <td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["num_control"].'</td>
                <td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["num_contrato"].'</td>
                <td class="odd" width="19%">&nbsp;'.$dataProvider[$i]["empresa"].'</td>
                <td class="odd" width="10%">&nbsp;'.$dataProvider[$i]["estado0"]["nombre_estado"].'</td>
                <td class="odd" width="9%">&nbsp;'.$dataProvider[$i]["monto_contratado"].'</td>
                <td class="odd" width="25%">&nbsp;'.$dataProvider[$i]["objeto_contrato"].'</td>
                <td class="odd" width="14%">&nbsp;'.$dataProvider[$i]["personal_actuante"].'</td>
                <td class="odd" width="9%">&nbsp;'.$dataProvider[$i]["informe0"]["nombre_tipo_informe"].'</td>
            ';
    $html.='</tr>'; $i++;
                        }
    $html.='</table>';
//$mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
$mpdf= new mPDF ('P','mm','A4');
$mpdf->AddPage();// NUEVA PAGINA
$mpdf->Image('C:\Users\rossy\Documents\rechner\imagenes\logo_galac_informe.jpg','L',5,40,35); // INSERTAR IMAGEN
$mpdf-> Setfont('Arial','B',20);// DEFINICION DE LETRAS NOMBRE DE LA EMPRESA
$mpdf->SetTextColor(0,80,0);// DEFINICION DE COLOR VERDE 
$mpdf->cell(135,15,'OFICINA  RECHNER.CA',0,1,'C');//  NOMBRE DE LA EMPRESA
$mpdf->SetFont('Arial','',10); // DEFINICION DE LETRAS  PEQUEÑA
$mpdf->Cell(175,0,'Aliado de Negocio Galac Software de los Altos Mirandinos y Valles del Tuy',0,2,'C');// SLOGAN
$mpdf->Ln(2);
$mpdf->Cell(200,5,'Contacto:0212-3643790/3640360/Oficinarechner@gmail.com/galac-rechner@hotmail.com',0,2,'C');// CONTACTO
$mpdf->Ln(1);
$mmpdf->Cell(190,5,'Calle Paez, Paralela a la Av.Bolivar. 50 metros de Ipostel. Los Teques.Edo Miranda',0,1,'C');// DIRECCCION
$mpdf->Ln(1); // SALTO DE LINEA
$mpdf->Cell(0,0,'',1,1,'C');// DEFINICION DE LA LINEA DIVISORIA
$mpdf->Ln(2);
$mpdf-> Setfont('Arial','B',16);// DEFINICION DE 2DO TITULO
$mpdf->SetTextColor(50); // DEFINICION DE COLOR DEL SEGUNDO TITULO
$mpdf->SetFillColor(200);
$mpdf->cell(200,15,'HISTORICO DE LLAMADAS DE OPERADOR',0,0,'C',0);// 2DO TITULO DE LA PAGINA
$mpdf->WriteHTML($html);
$mpdf->Output('Reporte_Contratos.pdf','D');
exit;
?>