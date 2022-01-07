<?php
class models extends CI_model
{
public function pen($key)
{
	$this->db->insert("regr",$key);
}
public function disp()
{
	$var=$this->db->get("regr");
      return $var->result_array();
}
public function sos($id)
{
	$con=$this->db->get_where("regr",array('id'=>$id));
	return $con->result_array();
}
public function updat($data,$id)
{
	$this->db->update("regr",$data,array('id'=>$id));
	
}
public function delete($id)
{
$this->db->delete("regr",array('id'=>$id));
}
public function login($data)
{
$jibin=$this->db->get_where("regr",array('username'=>$data['username'],'password'=>$data['password']));
$jibin1=$jibin->num_rows();
if($jibin1>0)
{
 $org=$jibin->row();
$org1=array('org2'=>$org->id);
$this->session->set_userdata($org1);

}
}
public function sad($id)
{
	$coma=$this->db->get_where("regr",array('id'=>$id));
	return $coma->result_array();
}
}
?>
