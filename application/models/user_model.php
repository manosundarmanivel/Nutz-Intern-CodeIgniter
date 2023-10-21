<?php
class user_model extends CI_Model {


    public function saverecords($data)
    {
        $this->db->insert('users',$data);
        return true;
    }
    
    public function get_users() {
        $query = $this->db->where('IsActive', 1)->get('Users');
        return $query->result();
    }

    public function get_user_by_id($userID) {
        $query = $this->db->get_where('Users', array('UserID' => $userID));
        return $query->row();
    }

    public function deactivate_user($userID) {
        $this->db->where('UserID', $userID)->update('Users', array('IsActive' => 0));
    }

    public function update_user_name($userID, $newName)
{
    $data = array(
        'Name' => $newName
    );
    $this->db->where('UserID', $userID);
    $this->db->update('users', $data);
}
}