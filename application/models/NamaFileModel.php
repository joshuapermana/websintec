<?php
    class NamaFileModel extends CI_Model{
        function get_all(){

            $artikel = $this->db->get_where();

            return ['status'=>'success', 'artikel'=>'Contoh'];
        }
    }