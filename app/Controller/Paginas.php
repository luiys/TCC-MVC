<?php

class Paginas extends Controller{

    public function index(){
        $dados = [
            'IdUser' => 'id_user'
        ];

        $this->view('Paginas/home', $dados);
    }

    public function about(){
        $dados = [
            'IdUser' => 'id_user'
        ];
        $this->view('Paginas/about', $dados);
    }

}