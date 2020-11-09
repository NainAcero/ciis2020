<?php

    class dashboardController extends Controller{
        public function __construct(){
        
        }

        /**
         * Vista Principal
         * @return vista
         */
        public function index(){


            @View::render('index');
        }

        public function asistencia(){
            @View::render('asistencia');
        }

        public function academico(){
            @View::render('academico');
        }

        public function talleres(){
            @View::render('talleres');
        }

        public function calendario(){
            @View::render('calendario');
        }
    }