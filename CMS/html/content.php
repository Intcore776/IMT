<?php 


	$id = $_GET['id'];
	switch($_GET['r']) {
		case 'product':
		include 'product.php';
		break;
		default:
		include 'products.php';
		break;
	}

?>