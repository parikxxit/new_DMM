<?php
	$title = "High Octane Cafe";
	$download = "shopping_complex.kmz";
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- Head Tag -->
	<?php
		require '../head.php';
	 ?>
	<body>

	<header id="fh5co-header" role="banner">
		<?php
			require '../../navigation.php';
		 ?>
	</header>
	<!-- END .header -->

	<?php
		require '../part_1.php';
	 ?>
	 <!-- name of building  -->
	 High Octane Cafe
	<?php
		require '../part_2.php';
	?>
	<!-- link of image and popup image -->
	<a href="../../images_all_buildings/canteens/hoc.jpg" class="image-popup"><img src="../../images_all_buildings/canteens/hoc.jpg" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a>
	<?php
		require '../part_3.php';
	 ?>
 	<?php
 		require '../footer.php';
 	 ?>

    <?php
    	require '../script.php';
     ?>
	</body>
</html>
