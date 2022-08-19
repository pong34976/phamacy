<?php
class Register  extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		 $data['main_content']= "register";
		  $this->load->view('includes/template',$data);
	}
	

	public function create(){
		$this->load->helper('form');
$this->load->library('form_validation');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required|min_length[4]');
	    $this->form_validation->set_rules('username','Username','required|min_length[4]|is_unique[users.username]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		if($this->form_validation->run()==FALSE){
			$data['main_content'] = "register";
			$this->load->view('includes/template',$data);
		}else{
			$data = array(
			'name'=>$this->input->post('name'),
			'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			);
		}
	}
}