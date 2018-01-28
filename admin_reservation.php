<?php  include ('connect.php');?>
<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | OLHRP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>


<link rel="stylesheet" href="DT/dt.css">
<style type="text/css">
  

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

  
</style>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



    <!-- Material Design Bootstrap -->
    <link href="layout/styles/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="layout/styles/style.css" rel="stylesheet">
        <link href="layout/styles/simple-sidebar.css" rel="stylesheet">

<script type="text/javascript">


$(document).ready(function(){
 

    $(".show-text").click(function(){
      $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate');
    });
});
</script>
        <style type="text/css">

#panel {
  
    display: none;
    margin-left: 20px;
    margin-right: 20px;

}
button 
{
  text-decoration: none !important;
}
label
{
  font-size:1em;
  margin-left: 20px;
}
img 
{
  width: 60px;
  height: 60px;
}
</style>





</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">

<br><br>
<div class="wrapper" style="background-color: transparent;">

<center><b><a style="color:black; font-size:24px;">RESERVATIONS</a></b></center>
</div>
<center><button class="btn btn-primary" data-toggle="modal" data-target="#monthlyModal"><i class="fa fa-print"> Print reservations by month</i></button></center>
<br><br>
<div class="wrapper" style="background-color: white;">




<div class="col-md-12">

<table id="reserve" class="display" cellspacing="0" width="100%">
        <thead >
            <tr>
              <th>ID</th>
              <th>Reservee</th>

              <th>Reservation Date</th>
              <th>Time</th>
              <th>Remarks</th>
            </tr>
        </thead>

        <tbody>
                   <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From reserve_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {

  ?>
        <tr>
            <td scope="row" style="vertical-align: middle;"><?php echo $row['r_id']; ?></td>
            <?php   $fetchuid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From account_tbl where `u_id`="'.$row['u_id'].'" ')); ?>


            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $fetchuid[3]; ?></td>



 
            <?php   $fetchvid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From venue_tbl where `v_id`="'.$row['v_id'].'" ')); ?>



            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['r_date']; ?></td>

            <?php   $fetchtid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From time_tbl where `t_id`="'.$row['t_id'].'" ')); ?>
            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $fetchtid[1]." - ".$fetchtid[2] ?></td>


            <?php    
      echo "<td class='col-md-4' style='color: black;background-color: white;vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$row['u_id'];
$Yourmodal="Yourmodal".$row['u_id'];
  $printmodal="printmodal".$row['u_id'];

/*     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#'.$printmodal.'"><i class="glyphicon glyphicon-print"></i></button></center>'*/
    echo '<center>




     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button>'


     ;




  echo "</td>";

?>

    
    <!-- Modal HTML -->
    <?php echo "<div id='".$Mymodal."' class='modal fade'>"; ?>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' style='color:black;' >EDIT FORM </h4>
                </div>
                <div class='modal-body'>
                 

    <div class='form-group'>
      <input type='text' class='form-control' name='p_id'   style='opacity:0;display:none;position:absolute;'>
      <label style='color:black;'>Reservation Name:</label>
      <input type='text' class='form-control'  name='editprayername'>
    </div>







     <label>PURPOSE</label>
    <select name="r_purpose" id="dept-list" class="form-control selectpicker" onChange="getState_new(this.value);">



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
  <input type='date' class='form-control' required name='r_date' min="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). '+ 7 day'));?>">



 <form  role='form' action='new_test.php' method='post'>  
                        <div id="new-list">


                                <!-- TABLE GOES IN -->
                        

                        </div>


                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit' class='btn btn-success'>Save</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
</form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal HTML -->
    <div id=monthlyModal class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' style='color:black;'>PRINT MONTHLY </h4>
                </div>
                <div class='modal-body'>
 <form action="sub_print.php" method="post">                

    <div class='form-group'>
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;'>
      <label ><center style='color:black;'> Select a Month</center></label>
      

     <label style="color: black;"></label>
    <select name="date_list" id="get-list" class="form-control selectpicker" style="height: 40px;" onChange="getState_new(this.value);">
<br>


         <option value="1"> January </option>
         <option value="2"> February </option>
         <option value="3"> March </option>
         <option value="4"> April </option>
         <option value="5"> May </option>
         <option value="6"> June </option>      
         <option value="7"> July </option>
         <option value="8"> August </option>
         <option value="9"> September </option>
         <option value="10"> October </option>
         <option value="11"> November </option>
         <option value="12"> December </option>

<br>
    </select>


    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit_printm'  class='btn btn-success'>Proceed</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>


<?php
//==========================================================================
  echo
"
    
    <!-- Modal HTML -->
    <div id='".$Yourmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' style='color:black;'>DELETE FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='del_reservation.php' method='post' >
    <div class='form-group'>
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;' value='".$row['r_id']."'>
      <label ><center style='color:black;'>Are you sure you want to delete '".$row['r_name']."' ?</center></label>
      
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit_delete'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";
//==========================================================================
  echo
"
    
    <!-- Modal HTML -->
    <div id='".$printmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' style='color:black;'>PRINT FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='print_reservation.php' method='post' >
    <div class='form-group'>
      <input type='text' class='form-control'  name='print_id'  style='opacity:0;display:none;' value='".$row['r_id']."'>
      <label ><center style='color:black;'>Are you sure you want to delete '".$row['r_name']."' ?</center></label>
      
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit_print'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";


  
  echo "</tr>";




  ?>
      <?php
       }

    ?>
      
        </tbody>
    </table>





  <!--Table-->

<!--Table-->
</div>
</div>


</div>




<?php include("admin-footer.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include("admin-scripts.php"); ?>
<script src="js/jquery.js"></script>
<!-- 

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>

<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script> -->

<script>

function getState_new(val) {



   $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'positionname='+val,
    success: function(data){
        $("#new-list").html(data);
    }
   
            
    });
}




</script>

<script>
$(document).ready(function(){
    $('#reserve').DataTable({
    

   });

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});
</script>
<script src="DT/dt.js"></script>
<script src="DT/dt1.js"></script>
<script src="DT/dt2.js"></script>
</body>
</html>
