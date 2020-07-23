<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pakan extends MY_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pakan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pakan/index.php?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pakan/index.php?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pakan/index.php';
            $config['first_url'] = base_url() . 'pakan/index.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pakan_model->total_rows($q);
        $pakan = $this->Pakan_model->get_all();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pakan_data' => $pakan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       $this->load->view('headers');
        $this->load->view('pakan_list', $data);
         $this->load->view('footers');
    }

    public function read($id) 
    {
        $row = $this->Pakan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'jumlah' => $row->jumlah,
		'nama_pakan' => $row->nama_pakan,
	    );
           $this->load->view('headers');
            $this->load->view('pakan_read', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pakan/create_action'),
	    'id' => set_value('id'),
	    'jumlah' => set_value('jumlah'),
	    'nama_pakan' => set_value('nama_pakan'),
	);

       $this->load->view('headers');
        $this->load->view('pakan_form', $data);
         $this->load->view('footers');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jumlah' => $this->input->post('jumlah',TRUE),
		'nama_pakan' => $this->input->post('nama_pakan',TRUE),
	    );

            $this->Pakan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pakan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pakan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pakan/update_action'),
		'id' => set_value('id', $row->id),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'nama_pakan' => set_value('nama_pakan', $row->nama_pakan),
	    );
           $this->load->view('headers');
            $this->load->view('pakan_form', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jumlah' => $this->input->post('jumlah',TRUE),
		'nama_pakan' => $this->input->post('nama_pakan',TRUE),
	    );

            $this->Pakan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pakan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pakan_model->get_by_id($id);

        if ($row) {
            $this->Pakan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pakan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required|numeric');
	$this->form_validation->set_rules('nama_pakan', 'nama pakan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pakan.php */
/* Location: ./application/controllers/Pakan.php */