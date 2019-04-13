<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_yppcbl extends CI_Model {

	public function GetPasien()
	{
		$data= $this->db->quary('select * from pasien');
		return $data->result_arry();
	}
}
