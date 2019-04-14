<?php 
session_start();

  if(isset($_SESSION['uid']))
  {
    echo "";
  }
  else
  {
    header('location:../login.php');
  }

 ?>

 <?php 

include('../dbcon.php');


$sid= $_GET['sid'];

$sql="select * from trust where id='$sid'";
$run=pg_query($con,$sql);

$data=pg_fetch_assoc($run);

 ?>           

 <?php
include('admin_header.php');
?>
 <div class="container">
        <div class="row">
           <div class="col-md-12 col-md-offset-6">


 <div class="container">
        <div class="row">
           <div class="col-md-12 col-md-offset-6">
              <form action="updatetrustdata.php" method="post" style="background: rgba(211,211,211,0.5);">
                <fieldset>
                 <div class="form-group" align="left" style="padding:25px;">
                   <label for="route"><b>TRUST-NAME:</b></label>
                  <input type="text" name="trust_name" value="<?php echo $data['trust_name'];?>" class="form-control" placeholder="enter the trust_name" required>
                  </div></center>
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">            
                  </fieldset>
                  <center><button type="submit" name="submit" class="btn btn-primary" style="margin-bottom:20px;">UPDATE</button>
                  <button type="reset" name="reset" class="btn btn-primary" style="margin-bottom:20px;">RESET</button></center>
                </fieldset>
              </form>
       </div>
      </div>

       </div>
      </div>







