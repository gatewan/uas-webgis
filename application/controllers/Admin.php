<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/src/Google_Client.php';
require_once 'vendor/src/contrib/Google_FusiontablesService.php';
require_once 'vendor/autoload.php';

class Admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('M_Article','MA'); 
   if (!$this->ion_auth->logged_in())
    {
      //redirect them to the login page
      redirect('auth', 'refresh');
    } 
 }
	public function index()
	{		
		$data["title"] = "<h1>Panel Admin</h1>";
		$data["array_emp"] = $this->MA->get_article();
		$this->load->view('admin/index',$data);
	}
	
	 public function form(){
        //ambil variabel URL
        $mau_ke                = $this->uri->segment(3);
        $id                    = $this->uri->segment(4);
         
        //ambil variabel dari form
		$description			= $this->input->post('deskripsi');
		$name					= $this->input->post('name');
		$geometry				= $this->input->post('geometry');
		$ide					= $this->input->post('ide');
		$penduduk				= $this->input->post('penduduk');
		$kuda					= $this->input->post('kuda');
		$sapi					= $this->input->post('sapi');
		$sapi_perah				= $this->input->post('sapi_perah');
		$kerbau					= $this->input->post('kerbau');
		$kambing				= $this->input->post('kambing');
		$domba					= $this->input->post('domba');

//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah Article';
            $data['aksi'] = 'aksi_add';
            $this->load->view('admin/index',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['isi']  = $this->MA->get_article_byid($id);
			$data["array_emp"] = $this->MA->get_article();
            $data['title'] = 'Edit Populasi';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('admin/edit',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'title'  		=> $judul,
                'categories'  	=> $kategori,
                'content' 		=> $konten
            );
            $this->MA->get_insert($data); //model insert data article
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('Admin');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(				
                'description'  	=> $description,
                'name'  		=> $name,
                'geometry' 		=> $geometry,
				'id' 			=> $ide,
				'penduduk' 		=> $penduduk,
				'kuda' 			=> $kuda,
				'sapi' 			=> $sapi,
				'sapi_perah' 	=> $sapi_perah,
				'kerbau' 		=> $kerbau,
				'kambing' 		=> $kambing,
				'domba' 		=> $domba
            );
            $this->MA->get_update($ide,$data); //modal update data article
			/*Update Juga ke Google Fushion
			 *Mainkan Ilmu Web Service*/
			/* SUKSES GENERATE TOKEN GOOGLE API yeeaaah*/
function getToken()
{
	global $client;
    $client = new Google_Client();
    $client->setApplicationName('YOUR_APP_NAME');
    $client->setClientId('YOUR_CLIENT_ID');
    $key = file_get_contents('YOUR_SECRET_KEY_PATH');
    $cred = new Google_AssertionCredentials(
        'YOUR_APP_ACCOUNT_SERVICE_ID',
        array('https://www.googleapis.com/auth/fusiontables'),
        $key
    );
    $client->setAssertionCredentials($cred);
    if($client->getAuth()->isAccessTokenExpired()) {
        $client->getAuth()->refreshTokenWithAssertion($cred);
    }
    $service_token = json_decode($client->getAccessToken());
    return $service_token->access_token;
}

$token=getToken();
//var_dump($token);
global $client;
$service = new Google_FusiontablesService($client);
$updateQuery = "update YOUR_FUSHION_TABLE_ID set description = '".$description."', penduduk='".$penduduk."', kuda='".$kuda."', sapi='".$sapi."', sapi_perah='".$sapi_perah."', kerbau='".$kerbau."', kambing='".$kambing."', domba='".$domba."' where id= '".$ide."'";
print_r($service->query->sql($updateQuery));		
//fushionEnd
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update			
			redirect('Admin');
        }
 
    }
	
}

?>
