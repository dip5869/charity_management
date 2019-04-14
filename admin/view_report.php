<?php 
error_reporting(0);
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


<table align="center" width="100%" border="1" style="margin-top:10px;">
  <tr style="background-color:black; color:#fff;font-size:18px;">
    <th>no</th>
    <th>NAME</th>
    <th>AMOUNT</th>
    <th>EMAIL ID</th>
    <th>PHONE</th>
    <th>TRUST</th>
  </tr>
  <?php 

  include('../dbcon.php');
  //$fee=$_POST['fee'];
  $sql="SELECT * FROM pp";
  // echo $sql;
  $run=pg_query($con,$sql);

    $count=0;
    while($data=pg_fetch_assoc($run))
    {
      $count++;
      ?>
      <tr style="background-color:black; color:blue;font-size:18px;">
        <td><?php echo $count; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['amount']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['trust_name']; ?></td>

      </tr>
      <?php
    }
  


 ?>

</table>

