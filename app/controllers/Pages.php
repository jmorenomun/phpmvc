<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Home',
      ];
     
      $this->view('pages/index', $data);
    }

  }