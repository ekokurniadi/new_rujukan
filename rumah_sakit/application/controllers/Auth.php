<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MY_Controller {	
	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("dashboard");
		}
	}
	public function index()
	{	
		$this->logged_in_check();
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == true) 
		{
			$this->load->model('auth_model', 'auth');	
			$status = $this->auth->validate();
			if ($status == ERR_INVALID_USERNAME) {
				$this->session->set_flashdata('message', ' <div class="alert bg-pink alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Username tidak valid
			</div>');
			}
			elseif ($status == ERR_INVALID_PASSWORD) {
				$this->session->set_flashdata('message', ' <div class="alert bg-pink alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Password tidak valid
			</div>');
			}
			else
			{
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_userdata("logged_in", true);
				redirect("dashboard");
			
			}
		}
		$this->load->view("auth");
	}
	public function logout()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect("auth");
	}

	public function key_token()
	{
		$this->load->view('app_token.py');
	}
}