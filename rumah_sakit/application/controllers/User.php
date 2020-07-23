<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/index.php?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user/index.php?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/index.php';
            $config['first_url'] = base_url() . 'user/index.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_model->total_rows($q);
        $user = $this->User_model->get_all();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       $this->load->view('headers');
        $this->load->view('user_list', $data);
         $this->load->view('footers');
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'username' => $row->username,
		'password' => $row->password,
		'role' => $row->role,
		'foto' => $row->foto,
	    );
           $this->load->view('headers');
            $this->load->view('user_read', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           Data tidak ditemukan
        </div>');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'role' => set_value('role'),
	    'foto' => set_value('foto'),
	);

       $this->load->view('headers');
        $this->load->view('user_form', $data);
         $this->load->view('footers');
    }
    


    public function create_action() 
    {
        $this->load->library('upload');
            $nmfile = "user".time();
            $config['upload_path']   = './images/';
            $config['overwrite']     = true;
            $config['allowed_types'] = 'gif|jpeg|png|jpg|bmp|PNG|JPEG|JPG';
            $config['file_name'] = $nmfile;

            $this->upload->initialize($config);

            if($_FILES['foto']['name'])
            {
                if($this->upload->do_upload('foto'))
                {
                $gbr = $this->upload->data();
                $data = array(
                    'foto' =>  $gbr['file_name'],
                    'nama' => $this->input->post('nama',TRUE),
                    'username' => $this->input->post('username',TRUE),
                    'password' => $this->input->post('password',TRUE),
                    'role' => $this->input->post('role',TRUE),
                );

                $this->User_model->insert($data);
                $this->session->set_flashdata('message', '<div id="al" class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" onclick ="hide();" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           Data berhasil disimpan
                
                </div>
                <script>
                function hide() 
                {
                    $("#al").hide();
                }
                </script>
                
                ');
            redirect(site_url('user'));
            }
        }
    }

    
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'role' => set_value('role', $row->role),
		'foto' => set_value('foto', $row->foto),
	    );
           $this->load->view('headers');
            $this->load->view('user_form', $data);
             $this->load->view('footers');
        } else {
            $this->session->set_flashdata('message', '<div id="al" class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" onclick ="hide();" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           Data tidak ditemukan
         
        </div>
        <script>
        function hide() 
        {
            $("#al").hide();
        }
        </script>
        
        ');
            redirect(site_url('user'));
        }
    }
    
   
    public function update_action() 
    {
        $this->load->library('upload');
        $nmfile = "user".time();
        $config['upload_path']   = './images/';
        $config['overwrite']     = true;
        $config['allowed_types'] = 'gif|jpeg|png|jpg|bmp|PNG|JPEG|JPG';
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);
        
                if(!empty($_FILES['foto']['name']))
                {  
                        unlink("./image/".$this->input->post('foto'));

                    if($_FILES['foto']['name'])
                    {
                        if($this->upload->do_upload('foto'))
                        {
                            $gbr = $this->upload->data();
                            $data = array(
                                'nama' => $this->input->post('nama',TRUE),
                                'username' => $this->input->post('username',TRUE),
                                'password' => $this->input->post('password',TRUE),
                                'role' => $this->input->post('role',TRUE),
                                'foto' => $gbr['file_name'],
                            );
                        }
                    }
                  
                    $this->User_model->update($this->input->post('id', TRUE), $data);
                    $this->session->set_flashdata('message', '<div id="al" class="alert bg-pink alert-dismissible" role="alert">
                    <button type="button" onclick="hide();" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Data berhasil di ubah
                </div>
                <script>
                function hide() 
                {
                    $("#al").hide();
                }
                </script>
                
                
                ');
                    redirect(site_url('user'));
                }
                    else
                        {
                            $data = array(
                                'nama' => $this->input->post('nama',TRUE),
                                'username' => $this->input->post('username',TRUE),
                                'password' => $this->input->post('password',TRUE),
                                'role' => $this->input->post('role',TRUE),
                            );
                        }
                    
                        $this->User_model->update($this->input->post('id', TRUE), $data);
                        $this->session->set_flashdata('message', '<div id="al" class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" onclick="hide();" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       Data berhasil di ubah
                    </div>
                    <script>
                    function hide() 
                    {
                        $("#al").hide();
                    }
                    </script>
                    
                    
                    ');
                        redirect(site_url('user'));
    }


    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', '<div id="al" class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" onclick="hide();" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           Data berhasil di hapus
        </div>
        <script>
        function hide() 
        {
            $("#al").hide();
        }
        </script>
        
        
        ');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('role', 'role', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */