<?php

    class talleresController extends Controller{
        public function __construct(){
        }

        public function index(){
           
            @View::render('Talleres'); /*el @suprime el error view::render, si no se descuadra el css*/
           
        }
        public function instructores(){
            @View::render('Instructores'); /*el @suprime el error view::render, si no se descuadra el css*/
        }
    }

   