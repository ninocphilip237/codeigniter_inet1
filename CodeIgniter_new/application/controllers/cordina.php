<?php
class cordina extends CI_controller
{
public function index()
{
$this->load->view('cordinator_vieww');
}
public function __construct()
{
	parent::__construct();
	$this->load->helper(array("form","url"));
	$this->load->model('models');
}
public function lol()
{
	$data['name']=$this->input->post('nam');
	$data['age']=$this->input->post('age');
	$data['gender']=$this->input->post('gen');
	$data['language']=$this->input->post('mala')."/".$this->input->post('engli')."/".$this->input->post('hind');
	$data['username']=$this->input->post('usrnme');
	$data['password']=$this->input->post('pass');
	$data['image']=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],"images/".$data['image']);
    $this->models->pen($data);	
}
public function disp() 
{
	
	$num['array']=$this->models->disp();
	$this->load->view('display',$num);
}
public function edit($id)
 {
  $mem['array']=$this->models->sos($id);
  	$this->load->view('edit',$mem);
 }
 public function update($id)
 {
	$data['name']=$this->input->post('nam');
	$data['age']=$this->input->post('age');
	$data['name']=$this->input->post('nam');
	$data['gender']=$this->input->post('gen');
	$data['language']=$this->input->post('mala')."/".$this->input->post('engli')."/".$this->input->post('hind');
	$data['username']=$this->input->post('usrnme');
	$data['password']=$this->input->post('pass');
	if(!empty($_FILES['img']['name']))
	{
	$data['image']=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],"images/".$data['image']);
	}
	 $this->models->updat($data,$id);	
	 redirect(base_url()."cordina/disp/");
 }
 public function delete($id)
 {
	$this->models->delete($id);
 }
 public function login()
 {
	$this->load->view('login'); 
 }
 public function log()
 {
	$data['username']=$this->input->post('usrnme');;
	$data['password']=$this->input->post('pass');
	$this->models->login($data);
	 $cat=$this->session->userdata('org2');
	if($cat)
	{
	 $lap['lap1']=$this->models->sad($cat);	
	 $this->load->view('view',$lap);	
	 
	}
	else
	{
		$this->load->view('view');
	}
	
 }
 public function logout()
 {
	  $per=$this->session->userdata('org2');
	  if($per)
	  {
		  $this->session->unset_userdata($this->session->all_userdata());
		  $this->session->sess_destroy();
		  $this->load->view('login');
	  }
 }
 
 
}
?>