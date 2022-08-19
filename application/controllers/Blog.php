<?php
class Blog  extends CI_Controller {
	public function __construct(){
		parent::__construct();
	 $this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Blog_model');
		$this->load->helper('array');
	}
	public function index(){
	 	 $data['main_content']= "index";
	    $this->load->view('includes/template',$data);
	}
	public function categories(){
	 
		$data['main_content']= "categories";
	    $this->load->view('includes/template',$data);
   }
	public function blog(){
		$data['result'] = $this->Blog_model->blognew();
        
		 $data['main_content']= "blog";
		  $this->load->view('includes/template',$data);

		  
	}
 

	public function create_blog(){
		if(!$this->session->login_id){ redirect('blog/blog'); }
		if($this->input->post('createblog')){
		  $this->Blog_model->create_blog($this->input->post('title'),$this->input->post('detail'),$_FILES['image_title']['tmp_name']);
	 	 $data['main_content']= "blog/blog";
	 	  $this->load->view('includes/template',$data); 
		//print_r($_FILES['image_title']['tmp_name']);
		}else{
		 $data['main_content']= "create_blog";
	 	  $this->load->view('includes/template',$data);}
		  
	}
 public function read_blog($get){
 
	$data['result'] = $this->Blog_model->blognew($get);
	$data= array( 'result' => $this->Blog_model->blognew($get));
	$data['main_content']= "blog/read_blog";
	//print_r($data['result']);
	 
 $this->load->view('includes/template',$data);
 }
	public function group(){
		$data['main_content']= "group";
		 $this->load->view('includes/template',$data);
   }
}