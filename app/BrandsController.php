//Code para controladores de marcas
<?php
	include_once "config.php";

	if (isset($_POST["action"])) {

		if (isset($_POST['super_token'])
			&& $_POST['super_token'] == $_SESSION['super_token']) {

			switch($_POST['action'])
			{
				case 'create':

					$name = strip_tags($_POST['name']);
					$descripcion = strip_tags($_POST['descripcion']);
					$slug = strip_tags($_POST['slug']);

					$brandsController = new BrandsController();
					$brandsController->createBrand($name,$descripcion,$slug);
				break;
				case 'update':

					$name = strip_tags($_POST['name']);
					$descripcion = strip_tags($_POST['descripcion']);
					$slug = strip_tags($_POST['slug']);
					$id = strip_tags($_POST['id']);
					
					$brandsController = new BrandsController();
					$brandsController->update($name,$descripcion,$slug,$id);
				break;
				case 'delete':

					$id = strip_tags($_POST['id']);

					$brandsController = new BrandsController();
					$brandsController->delete($id);
				break;
			}
		}
	}


	Class BrandsController{

		//Funcion GET todas las marcas.
		public function getBrands(){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer '.$_SESSION['token']
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			echo $response;
			$response = json_decode($response);

			if (isset($response->code) && $response->code>0) {
				
				return $response->data;
				
			}else{
				return array();
			}

		}

		//Funcion GET a una marca especifica
		public function getBrand($id){

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' .$_SESSION['token']
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response);

			if (isset($response->code) && $response->code>0) {
				
				return $response->data;
				
			}else{
				return array();
			}
		}

		//Funcion para crear una marca 
		public function createBrand($name,$descripcion,$slug)
		{
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
			'name' => $name,
			'description' => $descripcion,
			'slug' => $slug),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' .$_SESSION['token']
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response); 
			/*
			if (isset($response->code) && $response->code > 0) { 

				header("Location:".BASEPATH);

			}else{

				header("Location:".BASEPATH."?error");
			}
			pendiente*/
		}
		
		//update Brand
		public function update($name,$descripcion,$slug,$id){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => '
			name='.$name.'
			&description='.$name.'
			&slug='.$name.'
			&id='.$name,
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' .$_SESSION['token'],
				'Content-Type: application/x-www-form-urlencoded'
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			//pendiente
		}

		//delete Brand
		public function delete($id){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'DELETE',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' .$_SESSION['token']
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			//pendiente

		}

	}

?>