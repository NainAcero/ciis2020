<?php

    use Firebase\JWT\JWT;

    require_once BIBLIOTECA.'/php-jwt-master/src/JWT.php';



    class usuarioController extends Controller{



        public function __construct(){



        }



        public function index(){



            @View::render('usuario'); 



        }



        public function update(){



            if($_POST["id"] != null && $_POST["token"] != null) {



                autenticationValidate($_POST["token"], $_POST["id"]);



                try {



                    $usuario                =   new usuarioModel();

                    $usuario->id         =   $_POST['id'];



                    if(!$usuario->oneId()){



                        json_output(json_build(404, null, "El Usuario No existe"));

                    }



                    $usuario->numero_doc    =   $_POST['numero_doc'];

                    $usuario->email         =   $_POST['email'];

                    $usuario->nombre        =   $_POST['nombre'];

                    $usuario->apellido      =   $_POST['apellido'];

                    $usuario->institucion   =   $_POST['institucion'];

                    $usuario->cargo         =   $_POST['cargo'];

                    $usuario->celular       =   $_POST['celular'];

                    $usuario->profesion     =   $_POST['profesion'];

                    $usuario->pais          =   $_POST['pais'];

                    $usuario->ciudad        =   $_POST['ciudad'];



                    if($usuario->update()){



                        $key = SEMILLA;

                        $time = time();

                        $payload = array(

                            "usuario" => $usuario,

                            "iat" => $time,

                            "exp" => $time + (30 * 24 * 60 * 60)

                        );



                        $jwt = JWT::encode($payload, $key);

                        

                        $json = array(

                            "ok" => true,

                            "status" => 200,

                            "usuario" => $usuario,

                            "token" => $jwt

                        );



                        json_output(json_build(200, $json, "Ok!"));

                    }else{



                        json_output(json_build(201, "Datos inválidos!"));

                    }



                } catch(Exception $e) {

  

                  json_output(json_build(201, $e->getMessage()));

  

                }

            }else{

                json_output(json_build(400, "Error Datos incorrectos!"));

            }



           

        }



        public function bee_add_taller_admin(){



            if($_POST["usuario"] != null && $_POST["token"] != null) {



                autenticationValidate($_POST["token"], $_POST["usuario"]);



                try { 

                    $taller                     =   new tallerModel();

    

                    $taller->id_usuario     =   $_POST["usuario"];

                    $taller->nombre         =   $_POST['nombre'];

    

                    if($taller->oneToId()){

                        json_output(json_build(202, $usuario, "Ya se registro a otro taller"));

                    }

    

                    if(!$id = $taller->add()){

                        json_output(json_build(400, null, "Hubo error al guardar el registro"));

    

                    }

    

                    json_output(json_build(201, $taller->nombre ));

    

                }catch(Exeption $e){

    

                    json_output(json_build(400, null, $e->getMessage()));

    

                }



            }else{

                json_output(json_build(400, "Error Datos incorrectos!"));

            }

            

        }

        public function eliminarTaller(){

            if($_POST["usuario"] != null && $_POST["token"] != null) {

                autenticationValidate($_POST["token"], $_POST["usuario"]);

                try{
                    
                    $taller                     =   new tallerModel();
    
                    $taller->id_usuario     =   $_POST["usuario"];
    
                    if($taller->delete()){
    
                        json_output(json_build(200, null, "Taller Eliminado"));
    
                    } else { 
    
                        json_output(json_build(201, null, "No se pudo eliminar el Taller"));

                    }

                }catch(Exeption $e){
    
                    json_output(json_build(400, null, $e->getMessage()));
    
                }

            }else{

                json_output(json_build(400, "Error Datos incorrectos!"));

            }

        }
        


    }