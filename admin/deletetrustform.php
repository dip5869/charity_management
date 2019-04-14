<?php 
	
		include('../dbcon.php');
		
		$id=$_REQUEST['sid'];

		$qry="DELETE FROM trust WHERE id='$id'";

		if(pg_query($con,$qry))
		{
			?>
			<script>
				alert('trust Deleted successfully');
			window.open('deletetrust.php','_self');


			</script>
			<?php
		}
		else
		{
			echo"trust not Deleted";
		}
	

 ?>



 
