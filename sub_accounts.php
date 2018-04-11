<?php 
include("connect.php");

if(isset($_POST["submit_add"]))


{


$username = $_POST["username"];
$password = $_POST["password"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$accessright = $_POST["accessright"];






        $table2 = "select * from account_tbl where `username`='".$username."' AND `password`='".$password."' ";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);




  if (!empty($row))
  {

  $xQx_insert = "INSERT INTO account_tbl ( username, password, fullname, email, phone, access, isDeleted) VALUES ('$username','$password','$fullname','$email','$phone','$accessright','0')";
  $query_insert=mysqli_query($c1,$xQx_insert);



    echo"<script>window.location.href='admin_accounts.php';</script>";

	}
else
{

	echo'
<script>

    alert("Username already taken!");

</script>';

    echo"<script>window.location.href='admin_accounts.php';</script>";









}






?>