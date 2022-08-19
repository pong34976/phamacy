<?php
class Blog_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->database();
	}
	public function blognew($base="")
	{
		$query="";
     	$this->db->order_by('date_create', 'DESC');
	 	$this->db->join('tb_admin', 'tb_admin.login_id = blog.user_create_id');
		$query = $this->db->get('blog');
		if($base){
 
			   $this->db->where('blog_id', $base); 
		 return $query->row();
	
		}else{
	 
			return $query->result();
		}
	

		//return $query->row();
 
	
	}
	public function create_blog($blog_title,$blog_detail,$tmp_image=''){
	
	 
		$data = array(
			'blog_title' => $blog_title,
			'blog_detail' => $blog_detail,
			'blog_tag' => 'tag',
			 'image_title' => file_get_contents($tmp_image),
			'user_create_id' => $this->session->login_id);
	
	$this->db->insert('blog', $data);
 /**/
 
	}
 
}