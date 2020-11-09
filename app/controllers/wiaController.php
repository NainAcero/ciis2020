<?php 

	class wiaController extends Controller{

        public function __construct(){

        }

        public function index(){

            @View::render('Wia'); /*el @suprime el error view::render, si no se descuadra el css*/

        }
    }