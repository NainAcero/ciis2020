<?php







    class asistenciaModel extends Model{







        public $id;



        public $fecha;



        public $hora;



        public $id_usuario;



        public $id_ponencia;



        public $ip_addres;







        /**



         *



         * Model Asistencia



         * @return @id



         */







        public function __construct(){



        }







        public function add()



        {



            $sql = 'INSERT INTO asistencia (fecha, hora, id_usuario, id_ponencia, ip_addres) 



                VALUES (:fecha, :hora , :id_usuario, :id_ponencia, :ip_addres)';



            $data = [



                'fecha'          =>  now(),



                'hora'           =>  horaActual(),



                'id_usuario'     =>  $this->id_usuario,



                'id_ponencia'    =>  $this->id_ponencia,



                'ip_addres'     =>  $this->ip_addres,



            ];



    



            try {



                return ($this->id = parent::query($sql, $data)) ? $this->id : false;



            } catch(Exception $e) {



                throw $e;



            }



        }

        public function oneId(){



            $sql = 'SELECT * FROM asistencia WHERE id_usuario = :id_usuario AND  id_ponencia = :id_ponencia LIMIT 1';


            
            $data = [

                'id_usuario'     =>  $this->id_usuario,
                'id_ponencia'    =>  $this->id_ponencia,

            ];

            try{

                return ($rows = parent::query($sql , $data)) ? $rows[0] : false;

            } catch(Exception $e) {

                throw $e;

            }



        }



    }



