<?php

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->model('portofolio_model');
        $data['judul'] = 'Portofolio';
        $data['portofolio'] = $this->portofolio_model->getAllData();
        $this->load->view('design/header');
        $this->load->view('home/index', $data);
        $this->load->view('design/footer', $data);
    }
}