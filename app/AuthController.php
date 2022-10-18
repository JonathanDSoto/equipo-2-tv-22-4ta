<?php 
	include_once "config.php";

	if (isset($_POST["action"])) {

		if (isset($_POST['super_token'])
			&& $_POST['super_token'] == $_SESSION['super_token']) {

			switch($_POST['action'])
			{
				case 'access':

					$email = strip_tags($_POST['email']);
					$password = strip_tags($_POST['password']);

					$authController = new AuthController();
					$authController->login($email,$password);
				break;

				case 'create':

					$name = strip_tags($_POST['name']);
					$lastname = strip_tags($_POST['lastname']);
					$email = strip_tags($_POST['email']);
					$phone = strip_tags($_POST['phone']);
					$password = strip_tags($_POST['password']);

					$authController = new AuthController();
					$authController-> register_user($name,$lastname,$email,$phone,$password);
				break;

				case 'recovery':

					$email = strip_tags($_POST['email']);

					$authController = new AuthController();
					$authController->recovery_pass($email);
				break;

				case 'out':

					$email = strip_tags($_POST['email']);
					

					$authController = new AuthController();
					$authController->logout($email);
				break;
			}

		}
	}
	

	Class AuthController
	{
        //Funcion para inicio de sesion con el uso de E-mail y la contraseña
		public function login($email,$pwd)
		{

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS => array(
			  	'email' => $email,
			  	'password' => $pwd
			  ), 
			));

			$response = curl_exec($curl); 
			curl_close($curl);
			$response = json_decode($response);

			if (isset($response->code) && $response->code > 0) {
				
				session_start();

				$_SESSION['id'] = $response->data->id;
				$_SESSION['name'] = $response->data->name;
				$_SESSION['lastname'] = $response->data->lastname;
				$_SESSION['avatar'] = $response->data->avatar;
				$_SESSION['role'] = $response->data->role;
				$_SESSION['token'] = $response->data->token; 

				header("Location:".BASE_PATH."views");

			}else{

				header("Location:".BASE_PATH."?error");	
			}

		}


        //Funcion para creacion de nuevo usuario
        public function register_user($name,$lastname,$email,$phone,$password)
        { 
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/register',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'phone_number' => $phone,
                'created_by' => 'jonathan soto',
                'role' => 'Administrador',
                'password' => $password,
                'profile_photo_file'=>  new CURLFILE(BASE_PATH.'public/images/users/user-dummy-img.jpg')),
                //new CURLFILE($_FILES['cover']['tmp_name'])
    			));

				$response = curl_exec($curl);
				curl_close($curl);
				$response = json_decode($response);

				if (isset($response->code) && $response->code > 0) {
					
					login($email,$password);

            }
        }

		 //Funcion para recuperar la contraseña
		public function recovery_pass($email)
		{

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/forgot-password',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('email' => $email),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($response);
			//- Pendiente-
			/*if (isset($response->code) && $response->code > 0) {
				
				session_destroy();

				header("Location:".BASE_PATH);
        	}*/
		}

        //Funcion para realizar el LogOut solo con el e-mail.
        public function logout($email)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/logout',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'email' => $email),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

			if (isset($response->code) && $response->code > 0) {
				
				session_destroy();

				header("Location:".BASE_PATH);
        }

	}

?>
