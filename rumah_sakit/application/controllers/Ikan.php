<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ikan extends MY_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ikan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ikan/index.php?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ikan/index.php?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ikan/index.php';
            $config['first_url'] = base_url() . 'ikan/index.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ikan_model->total_rows($q);
        $ikan = $this->Ikan_model->get_all();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ikan_data' => $ikan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       $this->load->view('headers');
        $this->load->view('ikan_list', $data);
         $this->load->view('footers');
    }

    public function read($id) 
    {
        $row = $this->Ikan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_ikan' => $row->nama_ikan,
		'berat_awal' => $row->berat_awal,
		'berat_akhir' => $row->berat_akhir,
		'tanggal_masuk' => $row->tanggal_masuk,
		'tanggal_keluar' => $row->tanggal_keluar,
	    );
           $this->load->view('headers');
            $this->load->view('ikan_read', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ikan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ikan/create_action'),
	    'id' => set_value('id'),
	    'nama_ikan' => set_value('nama_ikan'),
	    'berat_awal' => set_value('berat_awal'),
	    'berat_akhir' => set_value('berat_akhir'),
	    'tanggal_masuk' => set_value('tanggal_masuk'),
	    'tanggal_keluar' => set_value('tanggal_keluar'),
	);

       $this->load->view('headers');
        $this->load->view('ikan_form', $data);
         $this->load->view('footers');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_ikan' => $this->input->post('nama_ikan',TRUE),
		'berat_awal' => $this->input->post('berat_awal',TRUE),
		'berat_akhir' => $this->input->post('berat_akhir',TRUE),
		'tanggal_masuk' => $this->input->post('tanggal_masuk',TRUE),
		'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
	    );

            $this->Ikan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ikan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ikan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ikan/update_action'),
		'id' => set_value('id', $row->id),
		'nama_ikan' => set_value('nama_ikan', $row->nama_ikan),
		'berat_awal' => set_value('berat_awal', $row->berat_awal),
		'berat_akhir' => set_value('berat_akhir', $row->berat_akhir),
		'tanggal_masuk' => set_value('tanggal_masuk', $row->tanggal_masuk),
		'tanggal_keluar' => set_value('tanggal_keluar', $row->tanggal_keluar),
	    );
           $this->load->view('headers');
            $this->load->view('ikan_form', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ikan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_ikan' => $this->input->post('nama_ikan',TRUE),
		'berat_awal' => $this->input->post('berat_awal',TRUE),
		'berat_akhir' => $this->input->post('berat_akhir',TRUE),
		'tanggal_masuk' => $this->input->post('tanggal_masuk',TRUE),
		'tanggal_keluar' => $this->input->post('tanggal_keluar',TRUE),
	    );

            $this->Ikan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ikan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ikan_model->get_by_id($id);

        if ($row) {
            $this->Ikan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ikan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ikan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_ikan', 'nama ikan', 'trim|required');
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ikan.php */
/* Location: ./application/controllers/Ikan.php */