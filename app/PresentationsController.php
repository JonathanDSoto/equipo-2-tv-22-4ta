<?php 
	include_once "config.php";

    if (isset($_POST["action"])) {
			switch($_POST['action'])
			{
				case 'create':
					$descripcion = strip_tags($_POST['description']);
					$code = strip_tags($_POST['code']);
					$peso = strip_tags($_POST['weight_in_grams']);
					$status = strip_tags($_POST['status']);
                    $stock = strip_tags($_POST['stock']);
					$stock_min = strip_tags($_POST['stock_min']);
                    $stock_max = strip_tags($_POST['stock_max']);
					$product_id = strip_tags($_POST['product_id']);
					
					$presentantionsController = new PresentantionsController();
					echo json_encode($presentantionsController->Create($descripcion,$code,$peso,$status,$stock,$stock_min,$stock_max,$product_id));
				break;
				case 'updatePresentation':
					$descripcion = strip_tags($_POST['description']);
					$code = strip_tags($_POST['code']);
					$peso = strip_tags($_POST['weight_in_grams']);
					$status = strip_tags($_POST['status']);
                    $stock = strip_tags($_POST['stock']);
					$stock_min = strip_tags($_POST['stock_min']);
                    $stock_max = strip_tags($_POST['stock_max']);
					$product_id = strip_tags($_POST['product_id']);
                    $id = strip_tags($_POST['id']);

					$presentantionsController = new PresentantionsController();
					echo json_encode($presentantionsController->UpdatePresentation($descripcion,$code,$peso,$status,$stock,$stock_min,$stock_max,$product_id,$id));
				break;
                /*case 'updatePrice':
					$id = strip_tags($_POST['id']);
					
					$presentantionsController = new PresentantionsController();
					echo json_encode($presentantionsController->UpdateAvatar($id));
				break;

				case 'delete':
					$id = strip_tags($_POST['id']);
					
					$presentantionsController = new PresentantionsController();
					echo json_encode($presentantionsController->Delete($id));
				break;
*/
                
			}

		}
    class PresentantionsController{

        //Get presentacion de productos
        public function GetPresentations()
        {
            $curl = curl_init();
            //pendiente la url del proyecto.
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            //pendiente

        }

        //Get presentacion de un producto especifico
        public function GetPresentation($id)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            //pendiente

        }

        //Create Presentacion
        public function Create($descripcion,$code,$peso,$status,$stock,$stock_min,$stock_max,$product_id)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('description' => $descripcion,'code' => $code,'weight_in_grams' => $peso,'status' => $status,'cover'=> new CURLFILE($_FILES['cover']['tmp_name']),'stock' => $stock,'stock_min' => $stock_min,'stock_max' => $stock_max,'product_id' => $product_id),
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
				return true;
        	}else{
				return false;
			}
        }

        //Update presentacion
        public function UpdatePresentation($descripcion,$code,$peso,$status,$stock,$stock_min,$stock_max,$product_id,$id)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'description='.$descripcion.'&code='.$code.'&weight_in_grams='.$peso.'&status='.$status.'&stock='.$stock.'&stock_min='.$stock_min.'&stock_max='.$stock_max.'&product_id='.$product_id.'&id='.$id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
				return true;
        	}else{
				return false;
			}
        }

        //Update precio de presentacion
        public function UpdatePrice($id,$amount)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/set_new_price',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id='.$id.'&amount='.$id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
				return true;
        	}else{
				return false;
			}
        }

        //Delete presentacion
        public function Delete()
        {

        }

    }