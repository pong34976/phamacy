<?php
class Phamacy_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->database();
		  $this->load->helper('array');
		  $this->db->where("del_status","0" );
	} 

		//return $query->row();
 
	
		function newviws($use){
			$this->db->set('countpha', 'countpha+1', FALSE);
			$this->db->where('phamacy_id', $use);
			$this->db->update('phamacy');
		
		//$this->db->replace('phamacy', $data);
	
		}


		function delstatus($use){
			$this->db->set('del_status', '1');
			$this->db->where('phamacy_id', $use);
			$this->db->update('phamacy');
		
		//$this->db->replace('phamacy', $data);
	
		}
	  function create_phamacy($mydata){
	   
		$data['phamacy_title'] =  $mydata['title'];
		$data['image_title'] =  file_get_contents($mydata['image_title']);
			$data['inmedia'] =  file_get_contents($mydata['inmedia']);
			$data['image_detail'] =  file_get_contents($mydata['image_detail']);
			 
		 
	
	$this->db->insert('phamacy', $data);
 

	}
	function update_phamacy($mydata,$id){
		   
	//	    $data['image_title'] =  file_get_contents($mydata['image_title'])   ;
		$data['phamacy_title'] =  $mydata['title'];
 if($mydata['image_title']!=""){
		$data['image_title'] =  file_get_contents($mydata['image_title']);
	 }
 
	 if($mydata['inmedia']!=""){
	 	$data['inmedia'] =  file_get_contents($mydata['inmedia']);
	}
	if($mydata['image_detail']!=""){
		 	$data['image_detail'] =  file_get_contents($mydata['image_detail']);
		}
 
		 
		
	 	$this->db->where('phamacy_id', $id);
	 	$this->db->update('phamacy', $data);
	//$this->db->update('phamacy', $data);
 

	}
 
 public function phamacyshow($base="",$by="phamacy_id" ,$start="0")
	{

		$query="";
		$search=  $this->input->get("phamacy");
	 	print_r($search);
		$this->db->where("phamacy_title like","%".$search."%" );
	
		$this->db->limit(50, $start);
	  $this->db->order_by($by, 'ASC');
	
	 	//$this->db->join('tb_admin', 'tb_admin.login_id = blog.user_create_id');
 
		if($base){
		
				$this->db->where('phamacy_id', $base); 
				$query = $this->db->get('phamacy');
			 	
		 return $query->row();

		}else{
			$query = $this->db->select('phamacy_title,countpha,phamacy_id,SUBSTR(image_title,100,100) as subm_title, SUBSTR(inmedia,100,100) as sub_inmedia,SUBSTR(image_detail,100,100) as subm_detail' );
			$query = $this->db->get('phamacy'  );
		 
			 return $query->result();
		}
	

		//return $query->row();
 
	
	}

	public function creling($base="",$by="phamacy_id" ,$start="0")
	{

		$query="";
		$search=  $this->input->get("phamacy");
	 	print_r($search);
		$this->db->where("phamacy_title like","%".$search."%" );
	
		$this->db->limit(50, $start);
	  $this->db->order_by($by, 'DESC');
 
	 
			$query = $this->db->select('phamacy_id' );
			$query = $this->db->get('phamacy');
		 
			 return $query->result();
	 
	

		//return $query->row();
 
	
	}
}