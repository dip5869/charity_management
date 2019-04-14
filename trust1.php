<?php 

	function showdetails($trust)
	{
		include('dbcon.php');

		$sql="select * from trust where trust_name='$trust'";

		$run=pg_query($con,$sql);

		if(pg_num_rows($run)>0)
		{
			$data=pg_fetch_assoc($run);
			?>
<div class="container">
	<h2 style="color:blue" align="center"><b><i>trust:<?php echo $data['trust_name'];?><i></b></h2>
      <header  style="background-image: url('img/portfolio/fullsize/8.jpg');height:540px;background-position: cover;background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 mx-auto">
               <a href="PayUMoney_form.php">
              <h2 class="post-title">
		<center><h1 style="margin-top:250px;color:maroon"><b>DONATE NOW</b></h1></center>
              </h2>
            </a>
          </div>
        </div>
      </div>
    </header>
	<?php
		}
		else
		{
			echo "<script>alert('NO TRUST FOUND.');</script>";
		}
	}
 ?>

