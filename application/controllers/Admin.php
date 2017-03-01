<?php
    class Admin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('Template_Admin', 'template_admin');
        }
        function index(){
            $data = [];
            $this->template_admin->display('admin/content/index', $data);
        }

        function kategori($aksi='index', $id=null){
            $data = ['Makanan', 'Minuman'];

            switch ($aksi) {
                case 'index':
                   $this->template_admin->display('admin/content/indexkategori', $data);
                    break;
                case 'tambah':
                   $this->template_admin->display('admin/content/tambahkategori', $data);
                    break;
                case 'edit':
                   $this->template_admin->display('admin/content/indexkategori', $data);
                    break;
                case 'update':
                    break;
                case 'delete':

                    break;
                default:
                    # code...
                    break;
            }   
        }

    
        function portofolio($aksi='index', $id=null){
            $this->load->model('PortofolioModel','portofolio_model');
            switch ($aksi) {
                case 'index':

                    $data['portofolio'] = $this->portofolio_model->get_all();
                    $this->template_admin->display('admin/content/portofolio/index', $data);
                    break;
                case 'tambah':
                    $this->template_admin->display('admin/content/portofolio/tambah', $data);
                    break;
                case 'edit':
                    $this->template_admin->display('admin/content/portofolio/edit', $data);
                    break;
                case 'insert':
                    # code...
                    break;
                case 'update':
                    # code...
                    break;
                case 'delete':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }

        function halamanstatis($aksi='index', $id=null){
            $this->load->model('HalamanstatisModel','halamanstatis_model');
            switch ($aksi) {
                case 'index':

                    $data['halaman'] = $this->halamanstatis_model->get_all();
                    $this->template_admin->display('admin/content/portofolio/index', $data);
                    break;
                case 'tambah':
                    $this->template_admin->display('admin/content/portofolio/tambah', $data);
                    break;
                case 'edit':
                    $this->template_admin->display('admin/content/portofolio/edit', $data);
                    break;
                case 'insert':
                    # code...
                    break;
                case 'update':
                    # code...
                    break;
                case 'delete':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }

        function blog($aksi='index', $id=null){
            $this->load->model('BlogModel', 'blog_model');
            switch ($aksi) {
                case 'index':

                    $data['halaman'] = $this->halamanstatis_model->get_all();
                    $this->template_admin->display('admin/content/portofolio/index', $data);
                    break;
                case 'tambah':
                    $this->template_admin->display('admin/content/portofolio/tambah', $data);
                    break;
                case 'edit':
                    $this->template_admin->display('admin/content/portofolio/edit', $data);
                    break;
                case 'insert':
                    # code...
                    break;
                case 'update':
                    # code...
                    break;
                case 'delete':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }

        function user($aksi='index', $id=null){
            switch ($aksi) {
                case 'index':

                    $data['halaman'] = $this->halamanstatis_model->get_all();
                    $this->template_admin->display('admin/content/portofolio/index', $data);
                    break;
                case 'tambah':
                    $this->template_admin->display('admin/content/portofolio/tambah', $data);
                    break;
                case 'edit':
                    $this->template_admin->display('admin/content/portofolio/edit', $data);
                    break;
                case 'insert':
                    # code...
                    break;
                case 'update':
                    # code...
                    break;
                case 'delete':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }
    }