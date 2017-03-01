<?php
	class Seed extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			$this->faker = Faker\Factory::create();
		}

		function posting(){

			for ($i=0; $i < 50 ; $i++) { 
				$data = [
					'id_kategori'=>rand(1,2),
					'judul_posting'=>$this->faker->sentence(8, true),
					'slug_posting' => $this->faker->slug,
					'jenis_posting'=> $this->faker->randomElement(['Tutorial','Artikel']),
					'isi_posting'=>$this->faker->paragraph(50, true),
					'tgl_posting'=>$this->faker->date('Y-m-d').' '.$this->faker->time('H:i:s'),
					'gambar'=>$this->faker->image('assets/images/posting/',800, 640, null, false),
					'post_by'=>'admin'
				];

				$this->db->insert('posting', $data);
			}
		}

		function portofolio(){
			for ($i=0; $i < 100 ; $i++) { 
				$data = [
					'judul_portofolio'=>$this->faker->sentence(8, true),
					'slug_portofolio' => $this->faker->slug,
					'nama_pembuat'=> $this->faker->name,
					'gambar'=>$this->faker->image('assets/images/portofolio/',800, 640, null, false),
					'deskripsi'=>$this->faker->paragraph(50, true),
					'view'=>rand(0, 9999),
					'post_date'=>$this->faker->date('Y-m-d').' '.$this->faker->time('H:i:s'),
				];

				$this->db->insert('portofolio', $data);
			}
		}
	}