<?php
class M_Article extends CI_Model{
 
 var $tabel = 'bangkalan'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
	
    public function get_article(){
	return $this->db->get($this->tabel); //cara 1
  
	}
 
    function get_article_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('id', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_update($ide,$data) {
        $this->db->where('id', $ide);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_article($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
 
}

?>