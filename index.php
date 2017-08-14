
<?php include "helpers/action.php";?>
<?php 

session_start(); 
if(isset($_SESSION['uid'])) {
  header("location:profile.php");
}

?>

<?php include "layout/header.php";?>
	<p><br></p><p><br></p><p><br></p>


	<div class="container">
		<div class="row">
			<?php include "layout/sidebar.php";?>
			<?php include "layout/main.php";?>
		</div> <!-- /row -->
	</div><!-- /.container -->
 <?php include "layout/footer.php";?>