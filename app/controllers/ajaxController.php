<?php







    class ajaxController extends Controller {







        private $accepted_actions = ['add','get','load','update','delete'];







        private $required_params = ['hook','action'];







        function __construct()







        {







            foreach ($this->required_params as $param) {







                if(!isset($_POST[$param])) {







                    json_output(json_build(403));







                }







            }







            if(!in_array($_POST['action'] , $this->accepted_actions)) {







                json_output(json_build(403));







            }







        }







        function index()







        {







            json_output(json_build(403));







        }







        







        function bee_wrapper_ponencias(){







            try{







                $ponencia   = new ponenciaModel();







                $ponencias  = $ponencia->all();







    







                json_output(json_build(201, $ponencias));







            }catch(Exception $e){







                json_output(json_build(400, null, $e->getMessage()));







            }







        }







        function bee_wrapper_tipo_doc(){







            try{







                $tipo_doc   = new tipo_docModel();







                $tipo_docs  = $tipo_doc->all();







    







                json_output(json_build(201, $tipo_docs));







            }catch(Exception $e){







                json_output(json_build(400, null, $e->getMessage()));







            }







        }







        function bee_verificar(){







            try {







                $usuario          = new usuarioModel();







                $usuario->numero_doc  = $_POST['numero'];







                $usuario->email  = $_POST['numero'];







                if($usuario->numero_doc == null){







                    json_output(json_build(400, "Datos inválidos!"));







                }







                $data  = $usuario->one();







    







                json_output(json_build(200, $data));







              } catch(Exception $e) {







                json_output(json_build(400, $e->getMessage()));







              }







        }







        function bee_add_usuario(){







            try{







                $usuario                = new usuarioModel();







                $usuario->numero_doc    = $_POST['numero_doc'];







                $usuario->email         = $_POST['email'];







                if(!$usuario->one()){







                    $usuario->nombre        =   $_POST['nombre'];







                    $usuario->apellido      =   $_POST['apellido'];







                    $usuario->institucion   =   $_POST['institucion'];







                    $usuario->cargo         =   $_POST['cargo'];









                    $usuario->celular       =   $_POST['celular'];







                    $usuario->profesion     =   $_POST['profesion'];







                    $usuario->pais          =   $_POST['pais'];







                    $usuario->ciudad        =   $_POST['ciudad'];







    







                    if(!$id = $usuario->add()){







                        json_output(json_build(400, null, "Hubo error al guardar el registro"));







                    }







                    $from = "ciistacna@unjbg.edu.pe";







                    $to = $usuario->email;







                    // $to = "a_nacerom@unjbg.edu.pe";







                    $subject = "REGISTRO CIIS XXI";







                    // Para enviar un correo HTML, debe establecerse la cabecera Content-type







                    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";







                    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";







                    // Cabeceras adicionales







                    $cabeceras .= 'From: ' . $from;







                    $mensaje = '







                     <html>







                        <head>







                          <title>REGISTRO AL XXI CIIS </title>







                        </head>







                        <body>







                        <div style="margin: auto;text-align: center;">







                            <img src="https://ciistacna.com/2020/assets/images/portadas/portada_correo3.png" style="width: 100%">







                        </div>







                          <br>                          







                       







                        <p><b>Ponentes: <br></b>Conoce a los ponentes en <a href="https://ciistacna.com/2020/ponentes"><b>www.ciistacna.com/2020/ponentes</b></a> 



                        







                        <br><br><b>Cronograma: </b><br>







                            Conoce el horario de las ponencias y actividades que se presentarán. 







                            <br><a href="https://ciistacna.com/2020/cronograma"><b>www.ciistacna.com/2020/cronograma</b></a>







                          



                        <br><br><b>Certificación: </b><br>



                            



                        Para  obtener la certificación deberá registrar su asistencia en un mínimo de 10 ponencias.<br>



                        Mediante los canales de transmisión se  hará llegar el link de asistencia correspondiente a la ponencia.







                        <br><br><b>Canales de transmisión ONLINE: </b><br> •  <b>Facebook Live: </b> <a href="https://www.facebook.com/ciistacna"><b>www.facebook.com/ciistacna</b></a><br>







                             •  <b>YouTube: </b><a href="https://www.youtube.com/ciistacna"><b>www.youtube.com/ciistacna</b></a>







                             



                        <br> <b><br>Feria tecnológica:<br></b>Participa de la III Feria Tecnológica en su primera edición virtual. 







                             <br><a href="https://ciistacna.com/2020/feria"><b>www.ciistacna.com/2020/feria</b></a>



                        



                        <br><br><b>Talleres y Concursos:</b><br>







                        También puedes inscribirte y participar en los talleres y concursos que te ofrece el XXI CIIS 2020. 







                            







                             <br>•  <b>Talleres: <b/><a href="https://ciistacna.com/2020/talleres">www.ciistacna.com/2020/talleres</a>  







                             <br>•  <b>Concurso de programación: <b/><a href="https://ciistacna.com/2020/concursos/programacion">www.ciistacna.com/2020/concursos/programacion</a>  







                             <br>•  <b>Concurso de robótica: <b/><a href="https://ciistacna.com/2020/concursos/robotica">www.ciistacna.com/2020/concursos/robotica</a>  







                             <br>•  <b>concurso de conocimientos: <b/><a href="https://ciistacna.com/2020/concursos/conocimientos">www.ciistacna.com/2020/concursos/conocimientos</a>                     







                            







                        </body>







                    </html>







                        ';







                    mail($to,$subject,$mensaje, $cabeceras);







                    $usuario->id = $id;







                    json_output(json_build(201, $usuario->one()));







                }else{







                    json_output(json_build(200, null, 'El Usuario Ya existe!'));







                }







            }catch(Exeption $e){







                json_output(json_build(400, null, $e->getMessage()));







            }







        }



        





        function bee_add_asistencia(){







            try{







                if($_POST["numero"] == null | $_POST["ponencia"] == null){







                    json_output(json_build(400, null, "Datos no válidos"));







                }







                $usuario                = new usuarioModel();







                $usuario->numero_doc    = $_POST['numero'];







                $usuario->email         = $_POST['numero'];







                if(!$usuario = $usuario->one()){







                    json_output(json_build(404, null, "El Usuario No existe"));







                }







                $asistencia                 =   new asistenciaModel();







                $asistencia->id_usuario     =   $usuario->id;







                $asistencia->id_ponencia    =   $_POST['ponencia'];


                if($asistencia->oneId()){

                    json_output(json_build(200, null, 'Ya marco asistencia'));

                }



                

                 $ipaddress = '';

                 

                if ($_SERVER['HTTP_CLIENT_IP'])

                    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];

                else if($_SERVER['HTTP_X_FORWARDED_FOR'])

                    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

                else if($_SERVER['HTTP_X_FORWARDED'])

                    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];

                else if($_SERVER['HTTP_FORWARDED_FOR'])

                    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];

                else if($_SERVER['HTTP_FORWARDED'])

                    $ipaddress = $_SERVER['HTTP_FORWARDED'];

                else if($_SERVER['REMOTE_ADDR'])

                    $ipaddress = $_SERVER['REMOTE_ADDR'];

                else

                    $ipaddress = 'UNKNOWN';









                $asistencia->ip_addres      =   $ipaddress;







                if(!$id = $asistencia->add()){







                    json_output(json_build(400, null, "Hubo error al guardar el registro"));







                }







    







                json_output(json_build(201, $usuario));







            }catch(Exeption $e){







                json_output(json_build(400, null, $e->getMessage()));







            }







        }







        function bee_add_taller(){







            try{







                if($_POST["numero"] == null | $_POST["nombre"] == null){







                    json_output(json_build(400, null, "Datos no válidos"));







                }







                $usuario                = new usuarioModel();







                $usuario->numero_doc    = $_POST['numero'];







                $usuario->email         = $_POST['numero'];







                if(!$usuario = $usuario->one()){







                    json_output(json_build(404, null, "El Usuario No existe"));







                }







                $taller                     =   new tallerModel();







                $taller->id_usuario     =   $usuario->id;







                $taller->nombre    =   $_POST['nombre'];







                if($taller->one()){







                    json_output(json_build(200, $usuario, "Ya se registro"));







                }







                if($taller->oneToId()){



                    json_output(json_build(202, $usuario, "Ya se registro a otro taller"));



                }







                if(!$id = $taller->add()){







                    json_output(json_build(400, null, "Hubo error al guardar el registro"));







                }







                json_output(json_build(201, $usuario));







            }catch(Exeption $e){







                json_output(json_build(400, null, $e->getMessage()));







            }







        }



        public function bee_add_asistencia_usuario(){

            if($_POST["usuario"] != null && $_POST["token"] != null && $_POST["ponencia"] != null) {



                autenticationValidate($_POST["token"], $_POST["usuario"]);



                try {



                    $asistencia                 =   new asistenciaModel();

                    $asistencia->id_usuario     =   $_POST["usuario"];

                    $asistencia->id_ponencia    =   $_POST["ponencia"];


                    if($asistencia->oneId()){

                        json_output(json_build(201, null, 'Ya marco asistencia'));

                    }



                    $usuario                    =   new usuarioModel();

                    $usuario->id                =   $_POST["usuario"];

                    $ipaddress = '';

                     

                    if ($_SERVER['HTTP_CLIENT_IP'])

                        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];

                    else if($_SERVER['HTTP_X_FORWARDED_FOR'])

                        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

                    else if($_SERVER['HTTP_X_FORWARDED'])

                        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];

                    else if($_SERVER['HTTP_FORWARDED_FOR'])

                        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];

                    else if($_SERVER['HTTP_FORWARDED'])

                        $ipaddress = $_SERVER['HTTP_FORWARDED'];

                    else if($_SERVER['REMOTE_ADDR'])

                        $ipaddress = $_SERVER['REMOTE_ADDR'];

                    else

                        $ipaddress = 'UNKNOWN';

    

                    $asistencia->ip_addres      =   $ipaddress;

    



                    if(!$id = $asistencia->add()){

    

                        json_output(json_build(400, null, "Hubo error al guardar el registro"));



                    }

    

                    json_output(json_build(200, null, 'ok'));





                } catch(Exception $e) {

  

                  json_output(json_build(201, $e->getMessage()));

  

                }

            }else{

                json_output(json_build(400, "Error Datos incorrectos!"));

            }

        }

        

        public function bee_cargar_tallere(){

            try{



                $taller                     =   new tallerModel();



                $taller->id_usuario     =   $_POST["usuario"];



                if($tallerData = $taller->oneToId()){



                    json_output(json_build(200, $tallerData, "taller"));



                } else { 

                    json_output(json_build(201, null, "No se isnccribio a Ningun Taller!"));

                }





            }catch(Exeption $e){



                json_output(json_build(400, null, $e->getMessage()));



            }

        }


        



    }