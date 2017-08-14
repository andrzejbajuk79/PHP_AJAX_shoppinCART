<?php 

include "database.php";



if(isset($_POST['addToProduct'])) {
	$p_id = $_POST['prodId'];
	$user_id = $_SESSION['uid'];
	$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id='$user_id'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count>0) {
		echo "dodano produkt do karty";
	}else{
		$sql="SELECT * FROM products WHERE product_id='$p_id'";
		$run_query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($run_query);
			$id =$row['product_id'];
			$pro_name = $row['product_title'];
			$pro_image = $row['product_image'];
			$pro_price = $row['product_price'];

		$sql =" INSERT INTO `cart` (`id`, `p_id`, `id_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amounts`) VALUES (NULL, '$p_id', '0', '$id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
		if(mysqli_query($con,$sql)){
			echo "dodano product";
		}
	}

 }
