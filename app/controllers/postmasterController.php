<?php 

	class postmasterController extends Controller{

        public function __construct(){

        }

        public function index(){

            @View::render('Postmaster'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
        public function ponentes(){
            @View::render('Ponentes'); /*el @suprime el error view::render, si no se descuadra el css*/
        }
    }