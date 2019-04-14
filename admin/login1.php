
      <?php 
	$username=$_POST['user'];
        $password=$_POST['password'];
	$con=pg_connect("user=postgres dbname=charity") or die("error");

        $qry="select * from admin where username='$username' and password='$password'";

        $run=pg_query($con,$qry);

        $row=pg_fetch_assoc($run);
			
    	if($row>1)
	{	

			$id=$row['id'];
			
			//echo"id=".$id;		

			session_start();
			$_SESSION['uid']=$id;
			
		header('location:admindash.php');
	}
	else
	{
	 ?>
	      <script>
		alert('USERNAME OR PASSWORD NOT MATCHED...!!');
		window.open('login.php','_self');
	      </script>
        <?php
	}


 ?>   
