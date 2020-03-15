<?php
	include 'database/dbconfig.php';

	$que = "SELECT * FROM tbl_kado_buat";

	$que = mysqli_query($connection, $que);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
	  <input type="checkbox" name="vehicle1" value="Bike">
	  <label for="vehicle1" id="all">All Category</label><br>



	  <?php
	  		while ($rows = mysqli_fetch_assoc($que)) {
	  			?>
	  				<input type="checkbox" name="vehicle1" value="Bike">
  					<label for="vehicle1"><?php echo $rows['sub_category'];?></label><br>
	  			<?php
	  		}
	  ?>

	  <input type="submit" value="Submit">
	</form>
</body>
</html>