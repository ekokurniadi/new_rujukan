<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  

    public function index()
    {
      $dat=$this->db->query("select jumlah AS jumlah from pakan")->row_array();
      $schedule=$this->db->query("select * from jadwal where status_kirim='close' and status=1 order by id DESC limit 1")->row_array();
      $data=array(
        'user'=>$this->db->query("SELECT * FROM user"),
        'jumlah'=>$dat,
        'schedule'=>$schedule
      );

      $this->load->view('headers');  
      $this->load->view('index',$data);  
      $this->load->view('footers');  
    }

    public function api_pakan()
    {
      $data=$this->db->query("select jumlah AS jumlah from pakan")->result();
      foreach($data as $dd)
      {
        $data =array(
          'jumlah'=>$dd->jumlah,  
          'jumlah'=>$dd->jumlah,  
          'jumlah'=>$dd->jumlah,  
        );
         echo json_encode($data);
      }
    }

    public function cek_pakan(){
      $cek=$this->db->query("select * from pakan order by id DESC limit 1")->result();
      foreach($cek as $dd)
      {
          $cek =array(
              'jumlah'=>$dd->jumlah,  
          );
            echo json_encode($cek);
         
      }
  }

}



/* End of file Dashboard.php */


?>