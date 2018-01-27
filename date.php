<?php 
include("connect.php");





$today = date("Y.m.d");  
$a = date_parse_from_format("Y-m-d", $today);
 /// YEAR TODAY TO COMPARE
$current_year = $a["year"];
echo $current_year;
echo "<br>";





    $fetch=mysqli_query($c1,'SELECT * From reserve_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {




$d = date_parse_from_format("Y-m-d", $row["r_date"]);
    	if($d["month"] == "1")
    	{
echo $d["month"];
   	echo "<br>";
}

else

{





    }
}



$date = "2010-28-12";
$d = date_parse_from_format("Y-m-d", $date);
echo $d["month"];






?>