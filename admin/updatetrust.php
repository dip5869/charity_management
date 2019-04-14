





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
include('admin_header.php');
?>
 <div class="container">
        <div class="row">
           <div class="col-md-12 col-md-offset-6">

<h3 align="center" style="color:green">UPDATE THE TRUST HERE</h3>
          <center><form method="post" action="updatetrust.php">
          <input type="text" name="trust_name" placeholder="search trusts here..." style="width:550px;"><input type="submit" name="submit" value="SEARCH">             
  </form></center><br>
 <div class="container">
        <div class="row">
           <div class="col-md-12 col-md-offset-6">


 <table align="center" width="100%" border="1" style="margin-top:10px;background-color:blue">
  <tr style="background-color:#000; color:#fff;">
    <th>NO</th>
    <th>TRUSTS</th>
    <th>EDIT</th>
  </tr>
<?php 

if(isset($_POST['submit']))
{
  include('../dbcon.php');
  $trust_name=$_POST['trust_name'];
  $sql="select * from trust where trust_name='$trust_name'";
  // echo $sql;
  $run=pg_query($con,$sql);

  if(pg_num_rows($run)<1)
  {
    echo'<tr><td colspan="5">no records found</td></tr>';
  }
  else
  {
    $count=0;
    while($data=pg_fetch_assoc($run))
    {
      $count++;
      ?>
      <tr style="color:white;background-color:silver;">
    <td><?php echo $count; ?></td>
    <td><?php echo $data['trust_name']; ?></td>
    <td><a href="updatetrustform.php?sid=<?php echo $data['id']; ?>"><button type="button" class="btn btn-outline-success">EDIT</button>
</a></td>
    </tr>
      <?php
    }
  }
}
 ?>

</table>
       </div>
      </div>

       </div>
      </div>







