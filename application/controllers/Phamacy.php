<?php
class Phamacy  extends CI_Controller {
	public function __construct(){
		parent::__construct();
	 $this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Phamacy_model');
		$this->load->helper('array');
	}
	public function index( ){

 
	$data['result']  = $this->Phamacy_model->phamacyshow();
 
	$this->load->view('show',$data);
	} 
 
 

	public function create(){
		
		if($this->input->post('create')){
			$mydata['title']=$this->input->post('title');
			$mydata['image_title']= $_FILES['image_title']['tmp_name'];
			 $mydata['inmedia']=$_FILES['inmedia']['tmp_name'];
		 $mydata['image_detail']=$_FILES['image_detail']['tmp_name'];
	   $this->Phamacy_model->create_phamacy($mydata);
	  
  redirect('phamacy/read/'.$this->input->post('title'));
	 
		}else{
		 
	 	  $this->load->view('create_phamacy');}
		  
	}
 public function read($get,$qr=""){
 if($qr=="qr"){
 echo '<img src="'.base_url('php/qr/'.$get.'?w=http://49.231.187.204/phamacy/read/'.$get).'" width="300" height="300"/>';
}
	$data['result']  = $this->Phamacy_model->phamacyshow( rawurldecode($get));
	 
	//$data= array( 'result' => $this->Phamacy_model->phamacyshow($get));
	// print_r($data->phamacy_title);
	$this->load->view('phamacy',$data);
	 
 //$this->load->view('includes/template',$data);
 }
	public function group(){
		$data['main_content']= "group";
		 $this->load->view('includes/template',$data);
   }
}