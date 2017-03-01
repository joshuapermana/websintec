<?php
	class SliderModel extends CI_Model{
		function get_all(){
			return $this->db->get('slider')->result();
		}
	}