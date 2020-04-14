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
 			// redirect('notfound/error');
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
		if ( $this->detect->isMobile() && !$this->detect->isTablet()  ) {
 			
		}else{
			redirect('notfound');
		}
		$params= $this->ApiWhatsapp->get_data();
		$data['hari'] = $this->data_api_hari();
		$params = $this->get_data_api();
		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];
		// print_r($data['hari']);
		$this->template->display('asset/doctor',$data);
	}

	public function info_data(){
		if ( $this->detect->isMobile() && !$this->detect->isTablet()  ) {
 			
		}else{
			redirect('notfound');
		}
		$params = $this->get_data_api();
		$data['indo'] = $this->get_data('https://api.kawalcorona.com/indonesia');

		$data['api'] = $params['data'];
		$data['rows'] = $params['rows'];
		$data['positif'] = $this->get_data('https://api.kawalcorona.com/positif');
		$data['meninggal'] = $this->get_data('https://api.kawalcorona.com/meninggal');
		$data['sembuh'] = $this->get_data('https://api.kawalcorona.com/sembuh');
		
		$data['data_prov'] = $this->get_data('https://api.kawalcorona.com/indonesia/provinsi');

		$this->template->display('asset/info',$data);
	}
	public function info_negara(){
		if ( $this->detect->isMobile() && !$this->detect->isTablet()  ) {
 			
		}else{
			redirect('notfound');
		}
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
		date_default_timezone_set('Asia/Jakarta');
		$day = date('l');
		$time = date('Hi');
		$true_time = NULL;
		$true_day = NULL;
		$true_time2 = NULL;
		switch ($time) {
			case $time >= 800 && $time <=1100:
				$true_time = 1;
				break;
			case $time >=1100  && $time <=1700:
				$true_time = 2;
				break;
			case $time >= 1700 && $time <=2000:
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
				if ($time >=1400  && $time <=1800) {
					$true_time2 = 4;
				}
				$true_day = 6;
				break;
			case 'Sunday':
				$true_day = 7;
				break;
			default:break;
		}
		if ($true_time != NULL) {
			if ($true_day == 2) {
				if ($true_time2 == 4) {
					$data = $this->ApiWhatsapp->index_sabtu($true_day,$true_time,$true_time2);
					return $data;
				}else{
					$data = $this->ApiWhatsapp->index($true_day,$true_time);
					return $data;
				}
				
			}else{
				$data = $this->ApiWhatsapp->index($true_day,$true_time);
				return $data;
			}
		}else{
			return array(
				'data' => 0,
				'rows' => 0
			);
		}
		// return $data;
	}
	public function data_api_hari(){
		$data = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
		return $data;
	}

	public function data_api_hari_click(){
		$hari = $this->input->post('hari');
		$field = $this->ApiWhatsapp->hari($hari);
		echo json_encode($field);
	}

}
