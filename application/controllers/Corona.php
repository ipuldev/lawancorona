<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
require 'Mobile-Detect/Mobile_Detect.php';

class Corona extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library("template");
		$this->load->model('ApiWhatsapp');
		$this->detect = new Mobile_Detect;
	} 


	public function index()
	{
		if ( $this->detect->isMobile() && !$this->detect->isTablet()  ) {
 			
		}else{
			redirect('notfound');
		}

		$data['indo'] = $this->get_data('https://api.kawalcorona.com/indonesia');
		$params = $this->get_data_api();

		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];

		// print_r($data['api']);
		$this->template->display('home',$data);
	}
	public function doctor(){
		// $data['doctor'] = $this->ApiWhatsapp->get_data();
		$data['hari'] = $this->data_api_hari();
		$params = $this->get_data_api();

		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];
		// print_r($data['hari']);
		$this->template->display('asset/doctor',$data);
	}

	public function info_data(){
		$params = $this->get_data_api();

		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];
		$data['positif'] = $this->get_data('https://api.kawalcorona.com/positif');
		$data['meninggal'] = $this->get_data('https://api.kawalcorona.com/meninggal');
		$data['sembuh'] = $this->get_data('https://api.kawalcorona.com/sembuh');
		
		$data['data_prov'] = $this->get_data('https://api.kawalcorona.com/indonesia/provinsi');

		$this->template->display('asset/info',$data);
	}
	public function info_negara(){
		$params = $this->get_data_api();

		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];
		$data['negara'] = $this->get_data('https://api.kawalcorona.com/');

		$this->template->display('asset/data-negara',$data);
	}
	public function tips(){
		$this->template->display('asset/tips');
	}
	public function healty(){
		$this->load->view('asset/heal');
	}
	public function get_data($data){
		$guzzleclient = new \GuzzleHttp\Client(['verify' => false]);
		$response = $guzzleclient->request('GET',$data);
		$result = json_decode($response->getBody()->getContents(),true);
		return $result;
	}
	public function get_data_api(){
		$day = date('l');
		$time = date('H');
		$true_time = NULL;
		$true_day = NULL;
		switch ($time) {
			case $time >= 7 && $time <=11:
				$true_time = 1;
				break;
			case $time >=11  && $time <=17:
				$true_time = 2;
				break;
			case $time > 17 && $time <=20:
				$true_time = 3;
				break;
			default:break;
		}

		switch ($day) {
			case 'Monday':
				$true_day = 1;
				break;
			case 'Tuesday':
				$true_day = 2;
				break;
			case 'Wednesday':
				$true_day = 3;
				break;
			case 'Thursday':
				$true_day = 4;
				break;
			case 'Friday':
				$true_day = 5;
				break;
			case 'Saturday':
				$true_day = 6;
				break;
			case 'Sunday':
				$true_day = 7;
				break;
			default:break;
		}

		if ($true_time != NULL) {
			$data = $this->ApiWhatsapp->index($true_day,$true_time);
			return $data;
		}else{
			return array(
				'data' => 0,
				'rows' => 0
			);
		}
		// return $data;
	}
	public function data_api_hari(){
		$data = array("Senin","Selasa","Rabu","Kamis","Jum,at","Sabtu","Minggu");
		return $data;
	}

	public function data_api_hari_click(){
		$hari = $this->input->post('hari');
		$field = $this->ApiWhatsapp->hari($hari);
		echo json_encode($field);
	}

}
