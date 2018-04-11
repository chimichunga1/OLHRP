<?php 


include("connect.php");







$appID=$_POST["appID"];







    $table2c = "UPDATE reserve_tbl  SET isApproved = '1' WHERE `r_id`='$appID'";

   $run_query2d = mysqli_query($c1,$table2c);



echo"<script> alert('Reservation has been Approved!');</script>";
echo"<script>window.location.href='admin_rpending.php';</script>";














?>