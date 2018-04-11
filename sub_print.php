<?php 
include("connect.php");



$selected_month = $_POST["date_list"]; //SELECTED MONTH CAUGHT
if($selected_month == "1")
{
	$date_name_new = "JANUARY";
}

elseif($selected_month == "2")
{
	$date_name_new = "FEBRUARY";
}

elseif($selected_month == "3")
{
	$date_name_new = "MARCH";
}
elseif($selected_month == "4")
{
	$date_name_new = "APRIL";
}
elseif($selected_month == "5")
{
	$date_name_new = "MAY";
}
elseif($selected_month == "6")
{
	$date_name_new = "JUNE";
}
elseif($selected_month == "7")
{
	$date_name_new = "JULY";
}
elseif($selected_month == "8")
{
	$date_name_new = "AUGUST";
}
elseif($selected_month == "9")
{
	$date_name_new = "SEPTEMBER";
}
elseif($selected_month == "10")
{
	$date_name_new = "OCTOBER";
}
elseif($selected_month == "11")
{
	$date_name_new = "NOVEMBER";
}
elseif($selected_month == "12")
{
	$date_name_new = "DECEMBER";
}





$today = date("Y.m.d");  
$a = date_parse_from_format("Y-m-d", $today);
 /// YEAR TODAY TO COMPARE
$current_year = $a["year"];


require('fpdf17/fpdf.php');

//create pdf object
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(180 ,5,'Our Lady of the Holy Rosary Parish',0,1,'C');
$pdf->Cell(59 ,5,'',0,1);//end of line


//output the result
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

$pdf->Cell(180 ,5,'Schedule for the Month',0,1,'C');




$pdf->Cell(180 ,5,$date_name_new,0,1,'C');
$pdf->Cell(10 ,5,'',0,1);//end of line




$pdf->Cell(50 ,5,'Date',1,0);
$pdf->Cell(45 ,5,'Purpose',1,0);
$pdf->Cell(49 ,5,'Slot #',1,0);
$pdf->Cell(45 ,5,'Reservee',1,1);//end of line

/*
$pdf->Cell(50 ,5,'',1,0);
$pdf->Cell(45 ,5,'',1,0);
$pdf->Cell(49 ,5,'',1,0);
$pdf->Cell(45 ,5,'',1,1);//end of line*/
    $fetch=mysqli_query($c1,'SELECT * From reserve_tbl'); 
    while($row=mysqli_fetch_assoc($fetch)) //QUERY ALL THE DATES IN THE TABLE
    {

    	$get_event = $row["event_id"];	

$d = date_parse_from_format("Y-m-d", $row["r_date"]);
    	if($d["month"] == $selected_month && $d["year"] == $current_year)
    	{

/*    echo $d["month"];
   	echo "<br>";
*/
/*
$pdf->Cell(130 ,5,$d["month"],0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line*/
  $fetch2=mysqli_query($c1,'SELECT * From event_tbl where event_id="'.$row["event_id"].'" '); 
    $row1=mysqli_fetch_assoc($fetch2);


$pdf->Cell(50 ,5,$row["r_date"],1,0);
$pdf->Cell(45 ,5,$row1["event_name"],1,0);
$pdf->Cell(49 ,5,$row["t_id"],1,0);
$pdf->Cell(45 ,5,$row["r_name"],1,1,'R');//end of line


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm



    	

}
}









//invoice contents
$pdf->SetFont('Arial','B',12);


$pdf->Output();





?>