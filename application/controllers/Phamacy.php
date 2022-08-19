<?php
//ini_set("memory_limit", "32M" );
class Phamacy  extends CI_Controller {
	public function __construct(){
		parent::__construct();
	 $this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Phamacy_model');
		$this->load->helper('array');
	}
	public function index(){

		$this->input->post("search");
	$data['result']  = $this->Phamacy_model->phamacyshow('','phamacy_title' );

	$this->load->view('show',$data);
	
	} 
 
 

	public function del($get){
 
		$data['result']  = $this->Phamacy_model->phamacyshow($get);
	 print_r($data['result']->phamacy_title);
	 
		 echo '<form action="" method="post">
		 <input type="hidden" name="del" id="del" value="'.$get.'">
		  
		 <input type="submit" value="ต้องการจะลบหรือไม่">
		 </form>';
	 	 if( $this->input->post('del') ){
			$del=$this->input->post('del');
		 }else{
			$del="";
		 } 
 if($del==$get){
 	  $this->Phamacy_model->delstatus($get);
		 redirect('phamacy/');
		}  
	}
	public function create(){
		
		if($this->input->post('create')){
			$mydata['title']=$this->input->post('title');
			$mydata['image_title']= $_FILES['image_title']['tmp_name'];
			 $mydata['inmedia']=$_FILES['inmedia']['tmp_name'];
		 $mydata['image_detail']=$_FILES['image_detail']['tmp_name'];
	   $this->Phamacy_model->create_phamacy($mydata);
	  
  redirect('phamacy/read/'.$this->Phamacy_model->creling()[0]->phamacy_id);
	 
		}else{
			 
		   $this->load->view('create_phamacy');
		   $this->load->view('form');

		 
		}
		  
	}

	public function update($get){
		$data['result']  = $this->Phamacy_model->phamacyshow($get);
		if($this->input->post('update')){
			$mydata['title']=$this->input->post('title');
			$mydata['image_title']= $_FILES['image_title']['tmp_name'];
			 $mydata['inmedia']=$_FILES['inmedia']['tmp_name'];
		 $mydata['image_detail']=$_FILES['image_detail']['tmp_name'];
	   $this->Phamacy_model->update_phamacy($mydata,$get);
	  
   redirect('phamacy/read/'.$get);
	 
		}else{
		 
		   $this->load->view('update_phamacy');
		   $this->load->view('form',$data);
		}
		  
	}

 public function read($get,$qr=""){
	$this->Phamacy_model->newviws($get);
 if($qr=="qr"){
 echo '<img src="'.base_url('php/qr/'.$get.'?w=http://49.231.187.204/phamacy/read/'.$get).'" width="300" height="300"/>';
 echo '<br>http://49.231.187.204/phamacy/read/'.$get;
}

	$data['result']  = $this->Phamacy_model->phamacyshow($get);
	$data['muti']=$data['result']->inmedia;
	//$data= array( 'result' => $this->Phamacy_model->phamacyshow($get));
	// print_r($data->phamacy_title);

	echo '<div styte="left:100px"><img width="30" src="'.base_url('imagesweb/visible.png').'" alt=""></div>';

 echo '<span class="uk-margin-small-right" uk-icon="check"></span>';
	echo $data['result']->countpha ;
	$this->load->view('phamacy',$data);
	 
 //$this->load->view('includes/template',$data);
 }

}