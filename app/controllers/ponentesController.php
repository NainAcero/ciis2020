<?php

    class ponentesController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data = 
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            @View::render('Ponentes', $data); /*el @suprime el error view::render, si no se descuadra el css*/
           
        }
    }