<?php
class Phamacy_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->database();
	} 

		//return $query->row();
 
	

	  function create_phamacy($mydata){
	   
		$data['phamacy_title'] =  $mydata['title'];
		$data['image_title'] =  file_get_contents($mydata['image_title']);
			$data['inmedia'] =  file_get_contents($mydata['inmedia']);
			$data['image_detail'] =  file_get_contents($mydata['image_detail']);
			 
		 
	
	$this->db->insert('phamacy', $data);
 

	}
 
 
 public function phamacyshow($base="")
	{
		$query="";
		 
     	//$this->db->order_by('date_create', 'DESC');
	 	//$this->db->join('tb_admin', 'tb_admin.login_id = blog.user_create_id');
 
		if($base){
		
				$this->db->where('phamacy_title', $base); 
				$query = $this->db->get('phamacy');
			 	
		 return $query->row();

		}else{
			$query = $this->db->get('phamacy');
			 return $query->result();
		}
	

		//return $query->row();
 
	
	}
}