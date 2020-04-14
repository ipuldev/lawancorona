<?php


class ApiWhatsapp extends CI_Class{
	public $tb = "doctor";

	public function index(){
		return $this->db->get($this->$tb)->result_array();
	}
}class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62<?= $api[0]['number'] ?>&text=Hallo%20Dokter%20<?= $api[0]['name']?>%20saya%20ingin%20bertanya%20tentang%20COVID-19.
"