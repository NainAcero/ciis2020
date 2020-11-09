<?php 



	class concursosController extends Controller{



        public function __construct(){



        }

        public function index(){         

            $data =
            [
                'title' =>  'Pagina no encontrada',
                'bg'    =>  'dark'
            ];
            @View::render('404', $data); /*el @suprime el error view::render, si no se descuadra el css*/
        }

        public function robotica(){

            @View::render('Robotica'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function programacion(){

            @View::render('Programacion'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function conocimientos(){

            @View::render('Conocimientos'); /*el @suprime el error view::render, si no se descuadra el css*/

        }

    }