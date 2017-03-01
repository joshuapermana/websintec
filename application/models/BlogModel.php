<?php
	class BlogModel extends CI_Model{
		function get_terbaru(){
			return $this->db->select('*')
					->from('posting')
					->order_by('tgl_posting', 'DESC')
					->limit(9)->get()->result();
		}

		function get_by_slug($slug){
			$this->db->select('*')
					->from('posting')
					->where('slug_posting', $slug);

			return $this->db->get()->row();
		}
	}