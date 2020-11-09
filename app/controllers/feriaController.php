<?php



    class feriaController extends Controller{

        public function __construct(){

        }



        public function index(){

            $data = 

            [

                'title' => 'Software Ciis',

                'bg'    =>  'dark'

            ];

            @View::render('Feria', $data); /*el @suprime el error view::render, si no se descuadra el css*/

           

        }



        public function isometrica(){

            @View::render('Isometrica'); /*el @suprime el error view::render, si no se descuadra el css*/

        }



        public function stand(){

            @View::render('stand'); /*el @suprime el error view::render, si no se descuadra el css*/

        }

        public function stand1(){

            @View::render('stand1'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand2(){

            @View::render('stand2'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand3(){

            @View::render('stand3'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand4(){

            @View::render('stand4'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand5(){

            @View::render('stand5'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand6(){

            @View::render('stand6'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand7(){

            @View::render('stand7'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand8(){

            @View::render('stand8'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function stand9(){

            @View::render('stand9'); /*el @suprime el error view::render, si no se descuadra el css*/

        }

    }