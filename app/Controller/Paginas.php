<?php

class Paginas extends Controller{

    public function index(){
        $dados = [
            'IdUser' => 'id_user'
        ];

        $this->view('Paginas/home', $dados);
    }

    public function sobre(){
        $this->view('Paginas/about');
    }

}