<?php

    use Firebase\JWT\JWT;
    require_once BIBLIOTECA.'/php-jwt-master/src/JWT.php';
    class LoginController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal
         * @return vista
         */
        public function index(){
            @View::render('login');
        }

        /**
         * Validar credenciales
         * @return <script>
         */
        public function comparar(){

            if($_POST["email"] != null && $_POST["password"] != null) {
                if(!empty($_POST["email"])):
                    $user = new usuarioModel();
                    $user->email = $_POST["email"];
                    $data = $user->comparar();
                    
                    if($data != false){
                        if ($_POST["password"] == $data->numero_doc) {

                            $data->password = '';
                            $key = SEMILLA;
                            $time = time();
                            $payload = array(
                                "usuario" => $data,
                                "iat" => $time,
                                // "exp" => $time + (0.5 * 60 * 60)
                                "exp" => $time + (30 * 24 * 60 * 60)
                            );

                            $jwt = JWT::encode($payload, $key);
                            
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "usuario" => $data,
                                "token" => $jwt
                            );

                            json_output(json_build(200, $json, "Login Exitoso!"));

                        } else {
                            json_output(json_build(400, null, "Error de credenciales"));
                        }
                        
                    }else{
                        json_output(json_build(400, null, "Error de credenciales"));
                    }
                endif;
            }else{
                json_output(json_build(400, null, "Error de credenciales"));
            }
        }
    }