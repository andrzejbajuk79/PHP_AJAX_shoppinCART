<?php 

if(isset($_POST['get_selected_Category']) || isset($_POST['selectedBrand']) || isset($_POST['search']) ) {

	if(isset($_POST['get_selected_Category'])) {

		$id = $_POST['cat_id'];
		$query = "SELECT * FROM products WHERE product_cat = $id";
	}else if(isset($_POST['selectedBrand'])){


		$id = $_POST['brand_id'];
		$query = "SELECT * FROM products WHERE product_brand = $id";

	}else {
		$keyword= $_POST['keyword'];
		$query = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}

	

	$sql= mysqli_query($con, $query);
	while($row =mysqli_fetch_array($sql)) {
		$product1 = $row['product_id'] ;
			$product2 = $row['product_cat'] ;
			$product3 = $row['product_brand'] ;
			$product4 = $row['product_title'] ;
			$product5 = $row['product_price'] ;
			$product6 = $row['product_image'] ;
			echo " 
			<div class='col-md-4' style='overflow:auto'>
				<div class='panel panel-info ' style='height:250px;'>
					<div class='panel-heading'>$product4</div>
						<div class='panel-body' style='height:80%'>
							<img src='$product6' style='width:150px; height:80%'>
							$product4
						</div>
					<div class='panel-footer ' >$ $product5
						<button  pid='$product1' style='float:right' class='btn btn-danger btn-xs $product2'>Add</button>
					</div>
				</div>
			</div>


			";

	}


}

 ?>