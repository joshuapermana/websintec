<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('NamaFileModel', 'nama_file_model');
            $this->load->library('Template_Website', 'template_website');

        }

        function index(){
            $contoh = $this->nama_file_model->get_all();
            $this->template_website->display('web/content/index');
            
        }
    }