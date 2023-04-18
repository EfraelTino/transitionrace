<?php  
require 'fpdf.php';
require 'logica/conexion.php';

class PDF extends FPDF
{
    protected $B = 0;
    protected $I = 0;
    protected $U = 0;
    protected $HREF = '';

function Header()
{
    
    $this->Image('logo.png',10,2,33);
   
    $this->SetFont('Arial','B',10);
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(0,125,125);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
   
    $this->Cell(80);
 
    $this->Cell(100,10,utf8_decode('Registro de Jugadores'),1,0,'C');

    $this->Ln(20);
    $this->Cell(30,10,utf8_decode('POS'),1,0,'C', 0);
    $this->Cell(40,10,utf8_decode('Token'),1,0,'C', 0);
    $this->Cell(40,10,utf8_decode('Documento'),1,0,'C', 0);
    $this->Cell(30,10,utf8_decode('Puntaje'),1,0,'C', 0);
    $this->Cell(20,10,utf8_decode('Preguntas'),1,0,'C', 0);
    $this->Cell(40,10,utf8_decode('Fecha ingreso'),1,0,'C', 0);
    $this->Cell(40,10,utf8_decode('Fecha último'),1,0,'C', 0);
    $this->Cell(13,10,utf8_decode('Tipo'),1,0,'C', 0);
    $this->Cell(20,10,utf8_decode('Nivel'),1,1,'C', 0);

    

}
function WriteHTML($html)
{

    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
          
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
           
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
            
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}
function OpenTag($tag, $attr)
{
 
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
 
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{

    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{

    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}

function Footer()
{

    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode('*Descarge el archivo en Excel y pulse "SI", para abrir( Windows, Mac).'),0,0,'C');
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    $html = '<a href="./exportar.php">DESCARGAR PARA EXCEL</a>';
    $this->WriteHTML($html);
}

}//documento,puntuacion,preguntas,tiempo,fecha
$consulta = "select DISTINCT id, llabeglobal, documento, puntuacion,tipo, nivel,  preguntas, fechai, fechau from clientestra WHERE documento != '' ORDER BY puntuacion DESC";
$resultado = $dblink->query($consulta);

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$pos=0;
while ($row = $resultado-> fetch_assoc()){
    
    $pos++;
    $pdf->Cell(30,10,utf8_decode($pos),1,0,'C', 0);
    $pdf->Cell(40,10,utf8_decode($row['llabeglobal']),1,0,'C', 0);
    $pdf->Cell(40,10,utf8_decode($row['documento']),1,0,'C', 0);
    $pdf->Cell(30,10,utf8_decode($row['puntuacion']),1,0,'C', 0);
    $pdf->Cell(20,10,utf8_decode($row['preguntas']),1,0,'C', 0);
    $pdf->Cell(40,10,utf8_decode($row['fechai']),1,0,'C', 0);
    $pdf->Cell(40,10,utf8_decode($row['fechau']),1,0,'C', 0);
    $pdf->Cell(13,10,utf8_decode($row['tipo'] == 1 ? 'Expert' : 'Normal'),1,0,'C', 0);
    $pdf->Cell(20,10,utf8_decode($row['nivel']),1,1,'C', 0);
}



//for($i=1;$i<=40;$i++)
 //   $pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
$pdf->Output();

?>