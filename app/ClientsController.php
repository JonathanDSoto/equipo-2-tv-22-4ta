<?php
	include "header_params.php";
	include "config.php";

	if (isset($_POST["action"])) {
		switch($_POST['action'])
		{
			case 'create':
				$name = strip_tags($_POST['name']);

				$productsController = new ProductsController();
				echo json_encode($productsController->create($name,$slug,$description,$features,$brand_id,$categories_id_0,$categories_id_1,$tags_id_0,$tags_id_1));
			break;
		}
	}

	Class Controller{

		//
		public function crete()
		{	

		}
    }
?>