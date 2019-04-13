<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_yppcbl extends CI_Model {

	public function GetData()
	{
		$data= $this->db->quary('select * from pasien');
		return $data->result_arry();
	}


	public function InsertData($tabelName,$data)
	{
		$res= $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$data,$where)
	{
		$res= $this->db->update($tabelName,$data);
		return $res;
	}

	public function DeleteData($tabelName,$data,$where)
	{
		$res= $this->db->delete($tabelName,$data);
		return $res;
	}
}
