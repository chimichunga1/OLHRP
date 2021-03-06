<?php 
include ("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Our Lady of the Holy Rosary Parish</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="57x57" href="images/favico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">








<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> 







<!-- Main css -->
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/w3w.css">

<script src="sm/papa/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="sm/papa/sweetalert2.css">
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>


<style type="text/css">
#datepicker
{



}


	.section1 #myVideo {
position: relative;

 	min-width: 100%; 
    min-height:100%;
 

    opacity: 0.5;
}

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
  		min-width: 100%;

  	
  		height: 450px;
      margin: auto;
  }


/* The container */
.containerbtn {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.containerbtn input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containerbtn:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containerbtn input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.containerbtn input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.containerbtn .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.news
{
	    background: url('images/news.jpg') 50% 0 repeat-y fixed;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
  	padding-top: 7rem;
    padding-bottom: 7rem;
}
.announcement
{
	    background: url('images/announcement.jpg') 50% 0 repeat-y fixed;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
  	padding-top: 15rem;
    padding-bottom: 15rem;
}
.prayers
{
	    background: url('images/prayers.jpg') 50% 0 repeat-y fixed;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
  	padding-top: 7rem;
    padding-bottom: 7rem;
}
.reservation
{
	    background: url('images/reservation.jpg') 50% 0 repeat-y fixed;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
  	padding-top: 7rem;
    padding-bottom: 7rem;
}
.register {
    background: url('images/register-bg.jpg') 50% 0 repeat-y fixed;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
  	padding-top: 7rem;
    padding-bottom: 7rem;
}
.venue {
    background: url('images/venue-bg.jpg') 50% 0 repeat-y fixed;
      -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    padding-top: 7rem;
    padding-bottom: 7rem;
}
.contact {
    background: url('images/contact-bg.jpg') 50% 0 repeat-y fixed;
      -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    	padding-top: 7rem;
    padding-bottom: 7rem;
}


</style>
</head>


<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     LOGIN      
============================== -->
<div class="w3w-container">


  <div id="id01" class="w3w-modal" style="background-color: rgba(0,0,0,0.9);position: fixed;z-index: 99999;">
    <div class="w3w-modal-content w3w-card-4 w3w-animate-zoom" style="max-width:60%;" >

      <div class="row" style="margin:0px;background-color: #2196F3; color:white;">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3w-button w3w-xlarge w3w-hover-red w3w-display-topright" title="Close Modal">&times;</span>
        <div class="col-md-4"><img src="images/logo.png" style="width:80%;opacity: 0.8;" ></div>

        <div class="col-md-8">
        
        	<br>
        	<br>
        	<br><center><h1 >Our Lady of the Holy Rosary Parish</h1></center></div>


      </div>

      <form class="w3w-container" action="index.php" method="post">
        <div class="w3w-section">
          <label><b>Username</b></label>
          <input class="w3w-input w3w-border w3w-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3w-input w3w-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3w-button w3w-block w3w-blue w3w-section w3w-padding" name="submit" type="submit">Login</button>
  
        </div>
      </form>

   

    </div>
  </div>
</div>


<?php


if(isset($_POST['submit']))

{
$row=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" AND `isDeleted`="0"   ');

$search= mysqli_fetch_assoc($row);
  $_SESSION['fn']=$search['fullname'];
  $_SESSION["u_id"] = $search["u_id"];

  if (!empty($search) && ($search['access']==1))
  {




?>

  <script>
 
  var user="<?php echo $search['fullname'] ?>";


swal({

	title: 'Login Successful !',
    text: 'Welcome '+ user

}).then(result => {
  if (result.value) {
 
 window.location.href='index_admin.php';

  } else {

  }
})






  </script>
  <?php

  }


  elseif (!empty($search) && ($search['access']==2))
  {



?>

  <script>
 
  var user="<?php echo $search['fullname'] ?>";


swal({

	title: 'Login Successful !',
    text: 'Welcome '+ user

}).then(result => {
  if (result.value) {
 
 window.location.href='index.php';

  } else {

  }
})






  </script>
  <?php

  }









  elseif (!empty($search) && ($search['isDeleted']==1))
  {



?>

<script type='text/javascript'>
  sweetAlert('LOGIN FAILED !', 'This account is blocked ', 'error');
</script>
  <?php

  }

















  else
  {
     echo " 

<script type='text/javascript'>
	sweetAlert('LOGIN FAILED !', 'Incorrect Username or Password ', 'error');
</script>



 ";







  }
}


?>

            

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->


<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">OLHRP</a>
		</div>

		<div class="collapse navbar-collapse">


						<?php 
if(empty($_SESSION['fn']))
{


						$navigation=array("HOME","NEWS","ANNOUNCEMENTS","PRAYERS","RESERVATIONS","WHAT IS OLHRP");


						echo '<ul class="nav navbar-nav navbar-right">';
						for ($i=0; $i < count($navigation); $i++) { 
						echo "<li><a href='#".$navigation[$i]."' class='smoothScroll'>".$navigation[$i]."</a></li>";
						}
						echo '</ul>';
}
else
{


						$navigation=array("HOME","NEWS","ANNOUNCEMENTS","PRAYERS","RESERVATIONS","WHAT IS OLHRP");


						echo '<ul class="nav navbar-nav navbar-right">';
						for ($i=0; $i < count($navigation); $i++) { 
						echo "<li><a href='#".$navigation[$i]."' class='smoothScroll'>".$navigation[$i]."</a></li>";
						}
						echo "<li><a href='logout.php' class='smoothScroll'>SIGN OUT</a></li>";
						echo '</ul>';
}

						?>
			
		
		</div>

	</div>
</div>
<!-- =========================
    1 SECTION   
============================== -->

<?php echo '<section id="'.$navigation[0].'" class="parallax-section section1">';?>
<video autoplay  loop id="myVideo" height="85%"  >
  <source src="video/v1.mp4" type="video/mp4">

</video>	
<!-- <div class="embed-responsive embed-responsive-16by9" style="position:absolute; z-index:10;">
  <iframe class="embed-responsive-item" src="video/v1.mp4" allowfullscreen></iframe>
</div> -->
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12" style="position:absolute;left:0;">
				<h1 class="wow bounceIn" data-wow-delay="5s">Our Lady of the Holy Rosary Parish</h1>
	<?php 
if(empty($_SESSION['fn']))
{
	?>
				<a  onclick="document.getElementById('id01').style.display='block'" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="5.3s">SIGN IN</a>
				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="5.3s">REGISTER NOW</a>
<?php } 
else
{

}
?>

			</div>


		</div>
	</div>
</section>


<!-- =========================
    SUNDAY SECTION   
============================== -->
<?php date_default_timezone_set('Asia/Manila');

$daterangestart=date("Y-m-d"); 
$daterangeend=date('Y-m-d', strtotime($daterangestart. '+ 6 day'));




$qsrcheck=mysqli_query($c1,"SELECT * FROM sunday_tbl WHERE  `s_date` BETWEEN '".$daterangestart."' AND '".$daterangeend."' ");

$xx=0;
while ($rowsssssss=mysqli_fetch_assoc($qsrcheck)) {
$xx+=1;
}


if ($xx==0)

{

}
else
{
 ?>

	<div class="col-md-12 col-sm-12 wow bounceIn" >
				<div class="section-title">
					<br>
					<center><h2>SUNDAY REFLECTION</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>	
				</div>
		</div>


<div style="padding:0;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<?php 


for ($i=0; $i <($xx-1) ; $i++) { 
	echo ' <li data-target="#myCarousel" data-slide-to="'.$i.'" ></li>';
}

?>

      
     

    </ol>
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

<?php 
$qsr=mysqli_query($c1,"SELECT * FROM sunday_tbl WHERE  `s_date` BETWEEN '".$daterangestart."' AND '".$daterangeend."' ");
$xi=0;
 while ($rowsr=mysqli_fetch_array($qsr)) {
$xi+=1;

if($xi==1)
{
	echo '<div class="item active">';
}

else
{
	echo '<div class="item">';
}
 			echo '
        <img src="'.$rowsr[3].'">
        <div class="carousel-caption">
          <h2>'.$rowsr[1].'</h2>
          <p>'.$rowsr[2].'</p>
        </div>
      </div>

 			';




 }



 ?>

      

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i style="padding-top:175%;font-size:2em;color:black;" class="fa fa-chevron-circle-left"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    	<i style="padding-top:175%;font-size:2em;color:black;" class="fa fa-chevron-circle-right"></i>
    </a>
  </div>

</div>
<?php } ?>
<!-- =========================
    z2 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[1].'" class="parallax-section sectionA2 news" >';?>
	<div class="container" style="color: white;">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>NEWS</h2>
					<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>

			
<?php 

date_default_timezone_set('Asia/Manila');

$timerangestart=date("Y-m-d"); 
$timerangeend=date('Y-m-d', strtotime($timerangestart. '+ 6 day'));




$qnews=mysqli_query($c1,"SELECT * FROM news_tbl WHERE  `newsdate` BETWEEN '".$timerangestart."' AND '".$timerangeend."' ");

while ($rownews=mysqli_fetch_array($qnews)) 
{


$str=$rownews[3] ;
$modalnewsid=$rownews[0];


		echo '<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.9s">
				<img src="'.$rownews[4].'"  height="250" width="100%">
				<center><h4>'.$rownews[1].'</h4>';




$postnews=substr($str, 0, 100);

 echo "<p>".$postnews.". . .</p>";
 echo '<a data-toggle="modal" data-target="#'.$modalnewsid.'" class="btn btn-info">Read More . . .</a></center>
 ';



				


echo '<br><br></div>';

echo "<!-- Modal HTML -->
    <div id='".$modalnewsid."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>News </h4>
                </div>
                <div class='modal-body'>
                 


<h1>".$rownews[1]."</h1>
<p>".$rownews[3]."</p>


                </div>
                <div class='modal-footer'>
                   
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>

                </div>
            </div>
        </div>
    </div>
";		
			
	


}


?>
		 
		


		



	</div>
	</div>


</section>












<!-- =========================
    PROGRAM SECTION   
============================== -->
<section id="<?php echo $navigation[2];?>" class="parallax-section section5 announcement"  >
	<div class="container" >
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title" style="color: black;">
					<h2>ANNOUNCEMENT</h2>
						<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<!-- Nav tabs -->
				<?php

?>
     <label>PURPOSE</label>
    <select name="r_purpose" id="announce-list" class="form-control selectpicker" onChange="getState_announce(this.value);">



       <?php

  

            $table2 = "SELECT * FROM announce_tbl";
            $run_query2b = mysqli_query($c1,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
  
        <?php

        echo "<option value=$row[an_date] >$row[an_date] </option>";
        }
        ?>

    </select>
<br><br>
<div id="announcement-list">


</div>

    <?php



				
				?>


		</div>
	</div>
	<br>
	<br>
	<br>
</section>

<!-- =========================
    5 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[3].'" class="parallax-section section5 prayers" >';?>
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title" style="color: white;">
					<h2 >PRAYERS</h2>
							<p style="color: white; font-size: 24px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
<br>
<br>
<br>
<?php $qprayer=mysqli_query($c1,"SELECT * FROM prayer_tbl");
	 while ($row=mysqli_fetch_array($qprayer)) {

$modalprayerid="prayer".$row[0];
	 
?>




			<div class="wow fadeInUp col-md-4 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<br>
				<?php echo '<DIV data-toggle="modal" data-target="#'.$modalprayerid.'" style="padding:20px;border:3px solid #46b8da;"><SPAN style="font-size:2em;color:#46b8da;"><b>'.$row[1].' </b></SPAN></DIV>
				';?>

				<br>
			</div>




	

<?php	
echo "
<!-- Modal HTML -->
    <div id='".$modalprayerid."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>PRAYERS </h4>
                </div>
                <div class='modal-body'>
                 


<h1>".$row[1]."</h1>
<p>".$row[2]."</p>


                </div>
                <div class='modal-footer'>
                   
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>

                </div>
            </div>
        </div>
    </div>
";




 }
?>

			

		</div>
	</div>
	<br>
<br>
<br>

<br>
	<br>
	<br>
	
</section>






<!-- =========================
   REGISTER SECTION   
============================== -->
<?php
if(empty($_SESSION['fn']))
{
	?>
<section id="register" class="parallax-section register">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				<h2>Register Here</h2>
				<h3>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
				<form action="index.php" method="post">
					<input name="username" type="text" class="form-control" id="username" pattern="[A-Za-z]" placeholder="Username" required>
					<input name="password" type="password" class="form-control" id="password" pattern="[0-9]+" placeholder="Password" required>
					<input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" required>
					<input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" required>
					<input name="phone" type="text" class="form-control" id="phone" placeholder="Phone Number" required>
					<input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submitreg" type="submit" class="form-control" id="submit" value="REGISTER">
					</div>
				</form>
			</div>


<?php 

if (isset($_POST["submitreg"]))
{

	$a11=$_POST['username'];
	$a12=$_POST['password'];

	$a13=$_POST['firstname'];
	$a14=$_POST['lastname'];

	$a34=$a13 ." ". $a14;

	$a15=$_POST['phone'];
	$a16=$_POST['email'];

	mysqli_query($c1,"INSERT INTO account_tbl (`username`,`password`,`fullname`,`email`,`phone`,`access`,`isDeleted`) VALUES ('".$a11."','".$a12."','".$a34."','".$a16."','".$a15."','2','0') ");


}
else
{

}


?>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>

<?php } 
else
{
	
}
?>
<!-- =========================
   A2 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[4].'" class="parallax-section sectionA2 reservation">';?>
	<div class="container">
		<div class="row">


			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title" style="color: white;">
					<CENTER><h2>RESERVATIONS</h2>
							<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
						</CENTER>
				</div>
			</div>
		
					
			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s" style="color: white;">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3 >PARISH</h3>
					<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>



<?php 
if(empty($_SESSION['fn']))
{
	?>

	<a  onclick="document.getElementById('id01').style.display='block'" class="btn btn-info">RESERVE</a>

	<?php
}
else
{

?>

	<a data-toggle="modal" data-target="#modalreserve1"  class="btn btn-info">RESERVE</a>

	<?php




}
?>
				</CENTER>		
						<BR>
			</div>

      <div class="wow fadeInUp col-md-8 col-sm-6" data-wow-delay="0.9s" style="color: white;">
   
<table class="table" style="background-color:black;">

    <!--Table head-->
    <thead>
        <tr>
            <th>Reservation #</th>
            <th>Purpose</th>
            <th>Date</th>
            <th>Time Slot</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>


<?php 
            $table2 = "SELECT * FROM reserve_tbl WHERE isDeleted ='0' AND isApproved ='1'";
            $run_query2b = mysqli_query($c1,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  

?>

        <tr>
            <th scope="row"><?php echo $row["r_id"]; ?></th>
            <td><?php echo $row["event_name"]; ?></td>

            <td><?php echo $row["r_date"]; ?></td>
            <td>



              <?php 



            $table2_time = "SELECT * FROM time_tbl WHERE t_id = '".$row["t_id"]."'";
            $run_query2b_time = mysqli_query($c1,$table2_time);

            while($row = mysqli_fetch_array($run_query2b_time))

        {  
              echo $row["t_start"];
              echo " - ";
              echo $row["t_end"];

          }





               ?>
                






              </td>












        </tr>
<?php 

}
?>


    </tbody>
    <!--Table body-->

</table>
<!--Table-->
          <CENTER><h3 >RESERVED DATES</h3>
          <p style="color: white;">Here is the list of all the currently reserved dates </p>





        </CENTER>   
            <BR>
      </div>
























    <div id='modalreserve1' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>RESERVE </h4>
                </div>
                <div class='modal-body'>
<form method="post" action="reserve_new.php">

	<center><h1>PARISH</h1></center>
	<input type='text' class='form-control' name='v_id'   style='opacity:0;display:none;position:absolute;' value='1'>

	<br>
    <label>PURPOSE</label>
    <select name="r_purpose" id="dept-list" class="form-control selectpicker" onChange="getState(this.value);">



       <?php

  

            $table2 = "SELECT * FROM event_tbl";
            $run_query2b = mysqli_query($c1,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
  
        <?php

        echo "<option value=$row[event_id] >$row[event_name] </option>";
        }
        ?>

    </select>
	<br>
	<label>DATE</label>
	<input class='form-control'  id="datepicker" required name='r_date' >
<br>
<br>
	

<!-- 	
min="<?php //echo date('Y-m-d', strtotime(date('Y-m-d'). '+ 7 day'));?>"



<label class="containerbtn"> SLOT 1 | 08:00 AM - 11:00 AM
  <input type="radio" name="t_id"   checked value="1" required>
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 2 | 12:00 PM - 03:00 PM
  <input type="radio" name="t_id" value="2" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 3 | 04:00 PM - 07:00 PM
  <input type="radio" name="t_id" value="3" >
  <span class="checkmark"></span>
</label> -->

                        <div id="state-list" >
<BR>

                                <!-- TABLE GOES IN -->
                        

                        </div>
<br>
<br>
NOTE: Reservee are required to reserve at least 7 days !

	
	



                </div>
                <div class='modal-footer'>
                   
                                    <button type='submit' name="moira" class='btn btn-success' >Submit</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>

                </div>
                </form>
            </div>
        </div>
    </div>


</section>



<!-- =========================
    VENUE SECTION   
============================== -->
<section id="venue" class="parallax-section venue">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
				<h2>OLHRP</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<h4>Our Lady of the Holy Rosary Parish</h4>
  				<h4>street</h4>
  				<h4>country,zip</h4>
				<h4>Tel: 010-020-0120</h4>		
			</div>

		</div>
	</div>
</section>



<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section contact">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>OLHRP</h3>
					<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				</div>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Keep in touch</h2>
					</div>

<?php
if(empty($_SESSION['id']))
{
	?>
					<form action="index.php" method="post">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="feedback" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
<?php 
}
else
{

	$rowf=mysqli_query($c1,"SELECT * FROM account_tbl WHERE `u_id`='".$_SESSION['id']."' ");
	$rowff=mysqli_fetch_assoc($rowf);

	$ax=$rowff['fullname']; 
	$ay= $rowff['email'];
?>
					<form action="index.php" method="post">
						<LABEL  name="name"><?php echo $ax; ?></LABEL> 
						<br>
							<br>
					  <LABEL  name="email"><?php echo $ay; ?></LABEL> 
					  	<br>
					  		<br>
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="feedback" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>

<?php	
}
?>



				</div>
			</div>

		</div>
	</div>


	<?php
	if(isset($_POST['feedback']))
	{
		

		mysqli_query($c1,"INSERT INTO feedback_tbl (`f_name`,`f_email`,`f_message`) VALUES ('".$ax."','".$ay."','".$_POST['message']."')");

	}

	?>
</section>

<!-- =========================
   6 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[5].'" class="parallax-section section6" >';?>
	<br>
	<BR><br>
	<BR>
	<div class="container">
		<div class="row">

<?php $qmvc=mysqli_query($c1,"SELECT * FROM about_tbl WHERE abt_id='1'");
$rowmvc=mysqli_fetch_array($qmvc);
?>

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>MISSION</h3>
				<p style="color: white;"><?php echo $rowmvc[1];?></p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-eye"></i>
				<h3>VISION</h3>
				<p style="color: white;"><?php echo $rowmvc[2];?></p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-heart"></i>
				<h3>CORE VALUES</h3>
			<p style="color: white;"><?php echo $rowmvc[3];?></p>
			</div>


		</div>



	</div>
</section>
<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 Our Lady of the Holy Rosary Parish</p>

				<!-- <ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul> -->

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>

<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>




<script>

function getState(val) {



   $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'positionname='+val,
    success: function(data){
        $("#state-list").html(data);
    }
   
            
    });
}




</script>

<script>

function getState_announce(val) {



   $.ajax({
    type: "POST",
    url: "get_announce.php",
    data:'positionname='+val,
    success: function(data){
        $("#announcement-list").html(data);
    }
   
            
    });
}




</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js">
  
</script>
 <script> $(document).ready(function() { 
  $('#datepicker').datepicker({ beforeShowDay: noSunday ,minDate:7}); 


  function noSunday(date){ 

    var day = date.getDay(); return [(day > 0), '']; 
  };


   });
  </script>





</body>
</html>