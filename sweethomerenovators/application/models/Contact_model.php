<?php


class Contact_model extends CI_Model{
	
	public function saveContact($details){

    $query=$this->db->insert('contact',$details);		
	$insertId = $this->db->insert_id();
	if($insertId){
	  return $insertId;
    }
}
	
	/* model for displaying query/complain mails */
	
    public function get_contact(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
        }
        $query = $this->db->get("contact");
        return $query->result();
    }

	/* model for displaying party mails */
	
    public function get_partyorders(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
        }
        $query = $this->db->get("sales");
        return $query->result();
    }

	/* model for displaying party mails */
	
    public function get_franchise(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
        }
        $query = $this->db->get("franchise");
        return $query->result();
    }
}
?>