<?php















    class tallerModel extends Model{















        public $id;







        public $id_usuario;







        public $nombre;















        /**







         *







         * Model Asistencia







         * @return @id







         */















        public function __construct(){







        }















        public function add()







        {







            $sql = 'INSERT INTO talleres (id_usuario,  nombre) 







                VALUES (:id_usuario, :nombre)';







            $data = [







                'id_usuario'    =>  $this->id_usuario,







                'nombre'        =>  $this->nombre,







            ];











            try {







                return ($this->id = parent::query($sql, $data)) ? $this->id : false;







            } catch(Exception $e) {







                throw $e;







            }







        }







        public function one(){







            $sql = 'SELECT * FROM talleres WHERE nombre = :nombre AND id_usuario = :id_usuario LIMIT 1';







            try{







                return ($rows = parent::query(







                    $sql , ['nombre' => $this->nombre , 'id_usuario' => $this->id_usuario])) ? $rows[0] : false;







            } catch(Exception $e) {







                throw $e;







            }







        }



        public function oneToId(){







            $sql = 'SELECT * FROM talleres WHERE id_usuario = :id_usuario LIMIT 1';







            try{







                return ($rows = parent::query(







                    $sql , ['id_usuario' => $this->id_usuario])) ? $rows[0] : false;







            } catch(Exception $e) {







                throw $e;







            }







        }



        public function delete(){
            $sql = 'DELETE FROM talleres WHERE id_usuario=:id_usuario LIMIT 1';
            try{
                return (parent::query($sql, ['id_usuario' => $this->id_usuario])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }





    }






