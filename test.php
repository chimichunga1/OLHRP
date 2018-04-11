<?php

include("connect.php");



$u_id = "1";

$user_name_new  = "1";

$event_id  = "1";

$r_date  = "1";

$t_id  = "1";

$get_event  = "1";


$zero = "1";

  $table2c = "INSERT INTO reserve_tbl (`u_id`,`r_name`,`event_id`,`r_date`,`t_id`,`event_name`,`isDeleted`) VALUES ('$u_id','$user_name_new','$event_id','$r_date','$t_id','$get_event','$zero') ";
   $run_query2d = mysqli_query($c1,$table2c);





?>