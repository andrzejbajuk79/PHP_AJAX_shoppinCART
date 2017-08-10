<?php 
if(isset($_POST['brand'])) {
	$brand_query = "SELECT * FROM brands";
	$query1 = mysqli_query($con,$brand_query);

	echo '
<div class="nav nav-pills nav-stacked">

	<li class="active">
		<a href="#"><h4>Brands</h4></a>
	</li>;
	';
	if(mysqli_num_rows($query1)>0){
		while($row = mysqli_fetch_array($query1)){
			$brand_id = $row['brand_id'];
			$brand_name = $row['brand_title'];
			echo "<li><a href='#' class='sel_brand' bid='$brand_id'>".$brand_name.'</a></li>';

		}
		echo "</div>";
	}
}

 ?>