<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('NamaFileModel', 'nama_file_model');

        }

        function index(){
            $contoh = $this->nama_file_model->get_all();
            echo $contoh['artikel'];
            
        }
    }