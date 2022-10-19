<?php 
	include_once "config.php";
    if (isset($_POST["action"])) {

		if (isset($_POST['super_token'])
			&& $_POST['super_token'] == $_SESSION['super_token']) {

			switch($_POST['action'])
			{
				case 'create':

					$name = strip_tags($_POST['name']);
					$lastname = strip_tags($_POST['lastname']);
					$email = strip_tags($_POST['email']);
					$phone = strip_tags($_POST['phone']);
					$password = strip_tags($_POST['password']);

					$authController = new AuthController();
					$authController-> CreateUsers($name,$lastname,$email,$phone,$password);
				break;

				case 'updateUser':

					$name = strip_tags($_POST['name']);
                    $lastname = strip_tags($_POST['lastname']);
                    $email = strip_tags($_POST['email']);

					$userController = new UserController();
					$userController->UpdateUser($name,$lastname,$email);
				break;

				case 'delete':

					$id = strip_tags($_POST['id']);
					
					$userController = new UserController();
					$userController->DeleteUser($id);
				break;

                case 'updateAvatar':

					$id = strip_tags($_POST['id']);
					
					$userController = new UserController();
					$userController->UpdateAvatar($id);
				break;
			}

		}
	}

    class AdressController{


        // GET a una direccion
        public function getAddress($id)
		{

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://crud.jonathansoto.mx/api/addresses/'.$id,
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
            echo $response;
			//pendiente
        }

		//Get direccion de clientes de una misma direccion
		public function getAddresses($id)
		{
			
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://crud.jonathansoto.mx/api/addresses/clients/'.$id,
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
			echo $response;	
			//pendiente
		}

		/* 
		//Create a una dirrecion
		public function create($name,$lastname,$)
		{

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://crud.jonathansoto.mx/api/addresses',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
				'first_name' => 'juanito',
				'last_name' => 'leon',
				'street_and_use_number' => '16 de septiembre #123',
				'postal_code' => '23000',
				'city' => 'La Paz',
				'province' => 'Baja California Sur',
				'phone_number' => '6120000000',
				'is_billing_address' => '1',
				'client_id' => '1'),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer 1154|t1TKiLpr1FA2T2hXx69d1BRQ3XuaNKR4AIWxRl50'
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			echo $response;


		}*/

		//Update a una dirrecion
		public function update(){
			
		}

		//Delete a una dirrecion
		public function delete(){
			
		}
		
    }