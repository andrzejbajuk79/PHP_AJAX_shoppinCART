<?php 

if(isset($_POST['category'])) {
	$cat_query = "SELECT * FROM categories";
	$query = mysqli_query($con,$cat_query);

	echo '
	
<div class="nav nav-pills nav-stacked" style="height:400px;overflow-y:scroll" >

	<li class="active ">
		<a href="#"><h4>Categories</h4></a>
	</li>;
	';   
	if(mysqli_num_rows($query)>0){
		while($row = mysqli_fetch_array($query)){
			$cat_id = $row['cat_id'];
			$cat_name = $row['cat_title'];
			echo "<li><a class='category' cid='$cat_id' href='#'>$cat_name</a></li>";

		}
		echo "</div>";
	}
}

 ?>