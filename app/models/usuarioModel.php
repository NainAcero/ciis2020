<?php



    class usuarioModel extends Model{



        public $id;

        public $nombre;

        public $apellido;

        public $institucion;

        public $cargo;

        public $numero_doc;

        public $celular;

        public $profesion;

        public $email;

        public $pais;

        public $ciudad;



        /**

         *

         * Model Usuario

         * @return @id

         */



        public function __construct(){

        }



        /**

         * Busca un Usuario

         */

        public function one(){

            $sql = 'SELECT * FROM usuarios WHERE email = :email OR numero_doc = :numero_doc LIMIT 1';

            try{

                return ($rows = parent::query(

                    $sql , ['email' => $this->email , 'numero_doc' => $this->numero_doc])) ? $rows[0] : false;

            } catch(Exception $e) {

                throw $e;

            }

        }

        public function oneId(){

            $sql = 'SELECT * FROM usuarios WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }

        }

        /**
         * Validaciones
         * @return void
         */
        public function comparar(){
            $sql = 'SELECT * from usuarios where email=:email limit 1';
            try{
                return ($rows = parent::query($sql, ['email' =>  $this->email])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }



        public function add(){

            $sql = 'INSERT INTO usuarios(nombre,apellido,institucion,cargo,numero_doc,celular,profesion,email,pais,ciudad) 

            VALUES(:nombre,:apellido,:institucion,:cargo,:numero_doc,:celular,:profesion,:email,:pais,:ciudad)';



            $user =

            [

                'nombre'        =>  $this->nombre,

                'apellido'      =>  $this->apellido,

                'institucion'   =>  $this->institucion,

                'cargo'         =>  $this->cargo,

                'numero_doc'    =>  $this->numero_doc,

                'celular'       =>  $this->celular,

                'profesion'     =>  $this->profesion,

                'email'         =>  $this->email,

                'pais'          =>  $this->pais,

                'ciudad'        =>  $this->ciudad,

            ];



            try{

                return ($this->id = parent::query($sql, $user)) ? $this->id : false;

            }catch(Exception $e){

                throw $e;

            }

        }

        public function update(){

            $sql = 'UPDATE usuarios SET nombre=:nombre, apellido=:apellido, institucion=:institucion, cargo=:cargo,
                    numero_doc=:numero_doc, celular=:celular, profesion=:profesion, email=:email, pais=:pais, ciudad=:ciudad
                    WHERE id=:id';

            $data =

            [
                'id'            =>  $this->id,

                'nombre'        =>  $this->nombre,

                'apellido'      =>  $this->apellido,

                'institucion'   =>  $this->institucion,

                'cargo'         =>  $this->cargo,

                'numero_doc'    =>  $this->numero_doc,

                'celular'       =>  $this->celular,

                'profesion'     =>  $this->profesion,

                'email'         =>  $this->email,

                'pais'          =>  $this->pais,

                'ciudad'        =>  $this->ciudad,

            ];
    
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

    }

