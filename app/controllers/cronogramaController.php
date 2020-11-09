<?php

    class cronogramaController extends Controller{
        public function __construct(){
        }

        public function index(){
           
            @View::render('Cronograma'); /*el @suprime el error view::render, si no se descuadra el css*/
           
        }
    }