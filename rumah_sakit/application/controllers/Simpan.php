<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('view_belajar');
	}

	public function sensor(){
		$this->load->model('m_belajar');
		if (isset($_GET['data'])) {
			//echo "OK";
			$panjang = $this->input->get('data');
			//echo $panjang;
			date_default_timezone_set("Asia/Jakarta");
			$datasensor = array('data_sensor' => $panjang, 'waktu' => date('Y-m-d h:i:s'));

			if($this->m_belajar->save($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function tampilan(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('m_belajar');

		$data['sensor'] = $this->m_belajar->ambildata();

		$this->load->view('view_belajar', $data);
	}
}
