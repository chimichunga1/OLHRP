
<!DOCTYPE html>
<html>
<head>
  <title>OLHRP | RESERVE</title>
  <meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="sm/sm2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="sm/sm2/dist/sweetalert2.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/w3w.css">


<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
</head>
<body>



<?php 
include("connect.php");

if(isset($_POST["moira"]))
{
$event_id = $_SESSION["event_id"];
$u_id=$_SESSION['u_id'];

$get_event_here = $_POST["r_purpose"];

$t_id=$_POST['t_id'];
$r_date=$_POST['r_date'];
$_SESSION["user_id"] = $u_id;
$_SESSION["get_date"] = $r_date;



/*echo $event_id;
echo "<br>";
echo $u_id;
echo "<br>";
echo $t_id;
echo "<br>";
echo $r_date;

*/
  $xQx_username = "SELECT * FROM account_tbl WHERE u_id ='$u_id'";
  $getuser=mysqli_query($c1,$xQx_username);
  

    while($row=mysqli_fetch_assoc($getuser))
    {

      $user_name_new = $row["username"];

    }


  $xQx_event = "SELECT * FROM event_tbl WHERE event_id ='$get_event_here'";
  $getevent=mysqli_query($c1,$xQx_event);
  

    while($row=mysqli_fetch_assoc($getevent))
    {

      $get_event = $row["event_name"];

    }


  $xQx_select = "SELECT * FROM reserve_tbl WHERE r_date = '$r_date' AND t_id = '$t_id' ";
  $row=mysqli_query($c1,$xQx_select);
  
$search= mysqli_fetch_assoc($row);


  if (empty($search))
{



echo $u_id;
echo "<br>";
echo $user_name_new;
echo "<br>";
echo $event_id;
echo "<br>";
echo $r_date;
echo "<br>";
echo $t_id;
echo "<br>";
echo $get_event;
echo "<br>";

$zero = "0";


  $table2c = "INSERT INTO reserve_tbl (`u_id`,`r_name`,`event_id`,`r_date`,`t_id`,`event_name`,`isDeleted`) VALUES ('".$u_id."','".$user_name_new."','".$event_id."','".$r_date."','".$t_id."','".$get_event."','".$zero."') ";
   $run_query2d = mysqli_query($c1,$table2c);



?>

<script>
{
    alert("Reservation was successful!");
}

</script>


<?php 




?>



<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section contact">
  <div class="container">
    <div class="row">

<!--       <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
        <div class="contact_des">
          <h3>OLHRP</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        </div>
      </div> -->

      <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
        <div class="contact_detail">
          <div class="section-title">
            <h2>Thank you for choosing our Church! </h2>
            <h3>You may now print this form for proof of reservation (Optional)</h3>
          </div>


          <form action="PRINT.php" method="post">


           User ID NO. : <?php  echo $u_id; ?><br>
           Username : <?php
    



  $xQx_select = "SELECT * FROM account_tbl WHERE u_id ='$u_id'";
  $fetch=mysqli_query($c1,$xQx_select);
  

    while($row=mysqli_fetch_assoc($fetch))
    {

          $get_user = $row["username"];

    }
    echo $get_user;
    $_SESSION["get_user"] = $get_user;
            ?>  
                          <br>



<!-- $event_id = $_SESSION["event_id"];
$u_id=$_SESSION['u_id'];
(int)$t_id=$_POST['t_id'];
$r_date=$_POST['r_date']; -->

            Purpose : <?php 


  $xQx_select = "SELECT * FROM event_tbl WHERE event_id ='$event_id'";
  $fetch=mysqli_query($c1,$xQx_select);
  

    while($row=mysqli_fetch_assoc($fetch))
    {

          $get_event = $row["event_name"];

    }
    echo $get_event;
     $_SESSION["get_event"] = $get_event;


            ?>

            <br>

Date Scheduled : <?php echo $r_date; ?>

<br>

            Time reserved : <?php 


  $xQx_select = "SELECT * FROM time_tbl WHERE t_id ='$t_id'";
  $fetch=mysqli_query($c1,$xQx_select);
  

    while($row=mysqli_fetch_assoc($fetch))
    {

          $get_start = $row["t_start"];
          $get_end = $row["t_end"];

    }



    echo $get_start;
    echo " - ";
    echo $get_end;
     $_SESSION["get_start"] = $get_start;
      $_SESSION["get_end"] = $get_end;


            ?>





    <br><br>
            <div class="col-md-12 col-sm-12">
              <input name="feedback" type="submit" class="form-control" id="submit" value="PRINT OUT ">
            </div>



          </form>





        </div>
      </div>

    </div>
  </div>


</section>

<!-- =========================
   6 SECTION   
============================== -->





<?php 






}


else
{
?>


<script>
{
    alert("Schedule is Already taken!");
window.location.href='index.php';
}

</script>


<?php 

}


}



else
{
  ?>

<script>
  window.location.href='index.php';
</script>
  <?php
}




?>



</body>

</html>
