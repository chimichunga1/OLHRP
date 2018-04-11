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
