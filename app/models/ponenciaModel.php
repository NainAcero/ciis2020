<?php







    class ponenciaModel extends Model{







        public $id;



        public $nombre;



        public $fecha;



        public $hora;



        public $id_ponente;







        /**



         *



         * Model Ponencia



         * @return @id



         */







        public function __construct(){



        }







        public function all(){



            $sql = 'SELECT p.id as id, pt.nombre as nom_pon, pt.apellido as apell_pon, pt.foto as foto_pon,



                    pt.pais as pais,p.nombre as p_nom, p.fecha as p_fecha, p.hora_ini p_ini, p.hora_fin as p_fin,



                    visualizar FROM ponencia AS p  INNER JOIN ponente AS pt ON p.id_ponente = pt.id';



    



            try{



                return ($rows = parent::query($sql)) ? $rows : false;



            } catch(Exception $e) {



                throw $e;



            }



        }



    }



