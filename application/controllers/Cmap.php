<?php
class Cmap extends CI_Controller{
 
 public function __construct()
 {
  parent::__construct();
 }
 
public function index(){
  $this->load->view('v_penduduk');
}
public function kuda(){
  $this->load->view('v_kuda');
}
public function sapi(){		
  $this->load->view('v_sapi');
}
public function sapi_perah(){		
  $this->load->view('v_sapi_perah');
}	
public function kerbau(){		
  $this->load->view('v_kerbau');
}
public function kambing(){		
  $this->load->view('v_kambing');
}	
public function domba(){
  $this->load->view('v_domba');
}	  
}

?>