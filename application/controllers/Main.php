<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('NamaFileModel', 'nama_file_model');
            $this->load->model('PortofolioModel', 'portofolio_model');
            $this->load->model('BlogModel', 'blog_model');
            $this->load->model('SliderModel', 'slider_model');
            $this->load->library('Template_Website', 'template_website');

            $this->data['page'] = '';
            $this->data['title'] = 'Sintec - Smanip Information Technology';
            $this->data['blog_kategori'] = 'A';
            
        }

        function index(){
            $data = $this->data;
            $data['page']  = 'index';
            $data['blog_terbaru'] = $this->blog_model->get_terbaru();
            $data['slider'] = $this->slider_model->get_all();
            $data['portofolio'] = $this->portofolio_model->get_terbaru();
            $contoh = $this->nama_file_model->get_all();
            $this->template_website->display('web/content/index', $data);
            
        }

        function portofolio($aksi='index', $id=null){
            $data = $this->data;
            switch ($aksi) {
                case 'index':
                    $data['title'] = 'Portofolio';
                    $data['portofolio'] = $this->portofolio_model->get_all();
                    $this->template_website->displaY('web/content/indexportofolio', $data);
                    break;
                case 'detail':
                    $data['portofolio'] = $this->portofolio_model->get_portofolio_by_slug($id);
                    $data['title'] = 'Detail Portofolio - '.$data['portofolio']->judul_portofolio.'';
                    $this->template_website->displaY('web/content/detailportofolio', $data);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function strukturorganisasi($aksi='index', $id=null){
            $data = $this->data;
            switch ($aksi) {
                case 'index':
                    $this->template_website->display('web/content/indexkepengurusan');
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog($kategori=null){
            if($kategori == null){

            }else{

            }

            $this->template_website->display('web/content/blog');
        }

        function detailblog($slug){
            $data = $this->data;
            $data['blog'] = $this->blog_model->get_by_slug($slug);
            $this->template_website->display('web/content/detailblog', $data);
        }

        function sejarah(){


            $this->template_website->display('web/content/sejarah');
        }

        function pembina(){

            
            $this->template_website->display('web/content/pembina');
        }

        function alumni(){

            $this->template_website->display('web/content/alumni');
        }
    }