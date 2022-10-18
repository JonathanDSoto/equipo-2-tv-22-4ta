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

        // 
        public function consultar($id){

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

        }

    }