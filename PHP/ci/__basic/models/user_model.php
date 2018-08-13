<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/12/2018
 * Time: 1:43 PM
 */

Class User_model extends CI_Model{


	public function getUsers($id,$username){
		/*
		 $query = $this->db->get('users');
        return $query->result();
        */
		//or

/*		$query = $this->db->query("select * from users");
		return ($query->num_rows() ." - " . $query->num_fields());
*/
/*
$usrId = $id;
$this->db->where('id',$usrId);
$query = $this->db->get('users');
return $query->result();
*/
// Multiple params

		$this->db->where(['id' => $id, 'username' => $username]);
		$query= $this->db->get('users');
	return $query->result();
	}
	public function createUsers($data){
		var_dump($data);
		die;
		$this->db->insert('users', $data);
	}


public function upd($data,$id){
		$this->db->where(array(
			'id' => $id
		));
		$this->db->update('users',$data);

}
public function del_data($id){
		$this->db->where(array(
			'id' => $id
		));
		$this->db->delete('users');
}
}
