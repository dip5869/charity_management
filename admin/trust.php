
<?php
  	    include('../dbcon.php');

	        $trust_name=$_POST['trust_name'];
	      
		$q="select * from trust where trust_name='$trust_name'";
		$run=pg_query($con,$q);
		$num=  pg_num_rows($run);

	if($num==1)
	{
		?>
		      <script>
			alert('TRUST ALREADY ADDED...!!');
			window.open('addtrust.php','_self');
		      </script>
		<?php
	}
	else
	{
		$reg="insert into trust(trust_name) values('$trust_name')";
		pg_query($con,$reg);
		?>
		      <script>
			alert('TRUST ADDED SUCCESSFULLY...!!');
			window.open('addtrust.php','_self');
		      </script>
		<?php
	}


?>

