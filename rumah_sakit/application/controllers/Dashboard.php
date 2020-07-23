<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  

    public function index()
    {
     
      $data=array(
        
      );

      $this->load->view('headers');  
      // $this->load->view('index');  
      $this->load->view('footers');  
    }

    public function cek_umum()
    {
      $kode_rumah_sakit=$_SESSION['kode_rumah_sakit'];
      $data=$this->db->query("select count(*) AS total from surat_umum where status='Baru' and kode_rumah_sakit ='$kode_rumah_sakit'")->result();
      foreach($data as $dd)
      {
        $data =array(
          'total'=>$dd->total,  
        );
         echo json_encode($data);
      }
    }

    public function cek_bpjs()
    {
      $kode_rumah_sakit=$_SESSION['kode_rumah_sakit'];
      $data=$this->db->query("select count(*) AS total_bpjs from surat_bpjs where status='Baru' and kode_rumah_sakit ='$kode_rumah_sakit'")->result();
      foreach($data as $dd)
      {
        $data =array(
          'total_bpjs'=>$dd->total_bpjs,  
        );
         echo json_encode($data);
      }
    }

}



/* End of file Dashboard.php */


?>