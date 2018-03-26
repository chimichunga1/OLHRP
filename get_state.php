<?php 
include("connect.php");


  $event = $_POST["positionname"];
 
$_SESSION["event_id"] = $event;

if($event == "1")


{

?> 


<label class="containerbtn"> SLOT 1 | 08:00 AM - 10:00 AM
  <input type="radio" name="t_id" checked value="1" required>
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 2 | 11:00 AM - 01:00 PM
  <input type="radio" name="t_id" value="2" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 3 | 02:00 PM - 04:00 PM
  <input type="radio" name="t_id" value="3" >
  <span class="checkmark"></span>
</label>



REQUIREMENTS FOR WEDDING : 


  
<ol>
<li>New Baptismal Confirmation and Certificates</li>
<li>Canonical INterview </li>
<li>Wedding/Marriage Permit </li>
<li>New Birth Certificate and Certificate of No Marriage </li>
<li>Confession </li>
</ol>







<?php 
}

elseif ($event == "2")

{

?> 

<label class="containerbtn"> SLOT 1 | 08:00 AM - 9:30 AM
  <input type="radio" name="t_id" checked value="4" required>
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 2 | 10:30 AM - 12:00 NN
  <input type="radio" name="t_id" value="5" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 3 | 01:30 PM - 03:00 PM
  <input type="radio" name="t_id" value="6" >
  <span class="checkmark"></span>
</label>


  
<ol>
<li>Child’s Birth Certificate</li>
<li>Parent’s Marriage Certificate </li>
<li>Sponsor’s Catholic Baptismal or Confirmation Certificate </li>
<li>Seminar </li>

</ol>






<?php 
}



elseif($event == "3")

{


?> 

<label class="containerbtn"> SLOT 1 | 11:00 AM - 12:00 NN
  <input type="radio" name="t_id" checked value="7" required>
  <span class="checkmark"></span>
</label>
<ol>
<li>Child’s Birth Certificate</li>
<li>Parent’s Marriage Certificate </li>
<li>Sponsor’s Catholic Baptismal or Confirmation Certificate </li>
<li>Seminar </li>

</ol>

<?php 


}




elseif($event == "4")

{


?> 

<label class="containerbtn"> SLOT 1 | 8:00 AM - 9:00 AM
  <input type="radio" name="t_id" checked value="8" required>
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 2 | 10:00 AM - 11:00 AM
  <input type="radio" name="t_id" value="9" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 3 | 12:00 PM - 1:00 PM
  <input type="radio" name="t_id" value="10" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 4 | 1:00 PM - 2:00 PM
  <input type="radio" name="t_id" value="11" >
  <span class="checkmark"></span>
</label>
<label class="containerbtn">SLOT 5 | 2:00 PM - 3:00 PM
  <input type="radio" name="t_id" value="12" >
  <span class="checkmark"></span>
</label>


<ol>
<li>You will need to speak to the priest of the parish where you want the funeral service to take place</li>


</ol>
<?php 


}





?>