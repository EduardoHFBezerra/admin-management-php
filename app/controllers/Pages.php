<?php


    class Pages extends Controller
    {

       public function index()
       {
          if( isLoggedIn() ) {
             redirect('client');
          }
          $data = [
              'title' => 'Painel administrativo',
              'description' => 'Painel administrativo de controle interno.'
          ];
          $this->view('pages/index', $data);
       }
    }