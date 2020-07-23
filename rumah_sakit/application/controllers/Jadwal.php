<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends MY_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jadwal/index.php?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jadwal/index.php?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jadwal/index.php';
            $config['first_url'] = base_url() . 'jadwal/index.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jadwal_model->total_rows($q);
        $jadwal = $this->Jadwal_model->get_all();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       $this->load->view('headers');
        $this->load->view('jadwal_list', $data);
         $this->load->view('footers');
    }

    public function read($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tanggal' => $row->tanggal,
		'jam' => $row->jam,
		'status' => $row->status,
	    );
           $this->load->view('headers');
            $this->load->view('jadwal_read', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jadwal/create_action'),
	    'id' => set_value('id'),
	    'tanggal' => set_value('tanggal'),
	    'jam' => set_value('jam'),
	    'status' => set_value('status'),
	);

       $this->load->view('headers');
        $this->load->view('jadwal_form', $data);
         $this->load->view('footers');
    }
    

    public function api_jadwal()
    {
        $data=$this->db->query("SELECT * FROM jadwal")->result();
        
        foreach($data as $dd)
        {
            $data =array(
                'tanggal'=> date('d/m/y', strtotime($dd->tanggal)),
                'jam'=>$dd->jam,
                'status'=>$dd->status
            );
            
           echo json_encode($data);
        }
    }

    public function auto_update()
    {
      date_default_timezone_set('Asia/Jakarta');
      $tanggal = date('Y-m-d');
      $jam=date('H:i');
      $cek=$this->db->query("select id,tanggal,left(jam,5) as jam,status from jadwal where tanggal='$tanggal' and left(jam,5)='$jam'")->result();
      print_r($cek);
      echo $jam;
        foreach($cek as $c){
            $id=$c->id;
                if($cek){
                    $update=$this->db->query("UPDATE jadwal set status=1,status_kirim ='close' where id ='$id'");
                    if($update){
                        $pesan=array(
                            'stat'=>'OK',
                            'message'=>'Successfully'
                        );
                        echo json_encode($pesan);
                    } else {
                        $pesan=array(
                            'stat'=>'Fail',
                            'message'=>'Failed'
                        );
                        echo json_encode($pesan);
                    }
            } else {
                $pesan=array(
                    'stat'=>'OK',
                    'message'=>'Nothing to update'
                );
                echo json_encode($pesan);
            }
        }

    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Jadwal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
		'id' => set_value('id', $row->id),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'jam' => set_value('jam', $row->jam),
		'status' => set_value('status', $row->status),
	    );
           $this->load->view('headers');
            $this->load->view('jadwal_form', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Jadwal_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $this->Jadwal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */