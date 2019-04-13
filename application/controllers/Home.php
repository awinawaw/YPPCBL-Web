<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}

	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}
	
	public function signup()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('signup');
		$this->load->view('layout/footer');
	}

	public function signup_pasien()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('signup_pasien<');
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$first_name =$_POST ['first_name'];
		$last_name =$_POST ['last_name'];
		$father_name =$_POST ['father_name'];
		$mother_name =$_POST ['mother_name'];
		$phone=$_POST ['phone'];
		$data_insert = array(
			'nama_depan' => $first_name, 'nama_belakang' => $last_name, 'nama_ayah' => $father_name, 'nama_ibu' => $mother_name, 'no_hp' => $phone
		);
		$res = $this->db_yppcbl->InsertData('pasien', $data_insert);
		if($res=1){
			echo "data sukses disimpan";
		}else{
			echo "data gagal disimpan";
		}
	}
	
}
