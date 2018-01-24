<?php 
include("connect.php");
  $announcement_date = $_POST["positionname"];


$qday2=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$announcement_date."' ");


while ($rday2=mysqli_fetch_array($qday2))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span style="font-size: 24px; color:black;"><i class="fa fa-clock-o"></i>'.$rday2[5].'</span> 
								<span style="font-size: 24px; color:black;"><i class="fa fa-map-marker"></i>'.$rday2[4].'</span>
							</h6>
							<h3 style="font-size: 38px; color:black;">'.$rday2[1].'</h3>
							<h4 style="font-size: 28px; color: black;">By '.$rday2[2].'</h4>
							<p style="font-size: 24px; color:black;">'.$rday2[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div> 	</div>';

}

?>

				

<?php


?>