<?php 


		include('../dbcon.php');
		$trust_name=$_POST['trust_name'];
		$id=$_POST['sid'];

		$qry="update  trust set  trust_name =  '$trust_name' where id ='$id'";


		if(pg_query($con,$qry))
		{
			?>
			<script>
				alert('TRUST UPDATE SUCCESSFULLY.');
			window.open('updatetrustform.php? sid=<?php echo $id;?>','_self');


			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert('TRUST NOT UPDATE..!!');
			window.open('updatetrustform.php? sid=<?php echo $id;?>','_self');


			</script>
			<?php
		}
	


 ?>
