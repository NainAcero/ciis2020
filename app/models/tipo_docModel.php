<?php

    class tipo_docModel extends Model{

        public $id;
        public $nombre;

        /**
         *
         * Model Tipo Doc
         * @return @id
         */

        public function __construct(){
        }

        public function all(){
            $sql = 'SELECT * FROM tipo_doc';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }
    }
