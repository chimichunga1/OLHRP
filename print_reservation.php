<?php 

include("connect.php");
require('fpdf17/fpdf.php');

if(isset($_POST["print_id"]))
{
$print_id = $_POST["print_id"];



  $xQx_select = "SELECT * FROM reserve_tbl WHERE r_id ='$print_id'";
  $fetch=mysqli_query($c1,$xQx_select);
  

    while($row=mysqli_fetch_assoc($fetch))
    {

    	$r_name = $row["r_name"];
    	$r_date = $row["r_date"];
    	$t_id = $row["t_id"];
    	$event_id = $row["event_id"];




    }



  $xQx_time = "SELECT * FROM time_tbl WHERE t_id ='$t_id'";
  $fetch_time=mysqli_query($c1,$xQx_time);
  

    while($row_time=mysqli_fetch_assoc($fetch_time))
    {

    	$t_start = $row_time["t_start"];
    	$t_end = $row_time["t_end"];


    	

    }



  $xQx_event = "SELECT * FROM event_tbl WHERE event_id ='$event_id'";
  $fetch_event=mysqli_query($c1,$xQx_event);
  

    while($row_event=mysqli_fetch_assoc($fetch_event))
    {

    	$event_name = $row_event["event_name"];


    	

    }



//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
//output the result

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'Our Lady of the Holy Rosary Parish',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'G. Marcelo St., Maysan,',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Valenzuela City, Philppines, 1440',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line GET DATE TAS PASOK DITO

$pdf->Cell(130 ,5,'Phone [+578-17-50]',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line RESERVATION ID


$pdf->Cell(25 ,5,'Customer ID : ',0,0);
$pdf->Cell(34 ,5,$print_id,0,1);//end of line USER ID

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(120 ,5,'Reservee Details : ',0,1);//end of line
$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(80 ,5,'',0,1);
//add dummy cell at beginning of each line for indentation
$pdf->Cell(80 ,5,'Customer Name : ',0,0);
$pdf->Cell(20 ,5,$r_name,0,1);

$pdf->Cell(80 ,5,'Event Reserved : ',0,0);
$pdf->Cell(20 ,5,$event_name,0,1);

$pdf->Cell(80 ,5,'Starting Time : ',0,0);
$pdf->Cell(20 ,5,$t_start,0,1);

$pdf->Cell(80 ,5,'End Time : ',0,0);
$pdf->Cell(20 ,5,$t_end,0,1);

$pdf->Cell(80 ,5,'Scheduled Date : ',0,0);
$pdf->Cell(20 ,5,$r_date,0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(20 ,5,'',0,1);

$pdf->Cell(130 ,5,'NOTE : PROCEED TO THE OFFICE OF OUR LADY OF THE HOLY PARISH',0,0);
$pdf->Cell(20 ,5,'',0,1);

$pdf->Cell(80 ,5,'FOR THE SUBMISSION OF REQUIREMENTS',0,0);
$pdf->Cell(20 ,5,'',0,1);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Output();


}



?>