<?php

class UserModel extends CI_Model
{
    function create($formArray)
    {
        $this->db->insert("users",$formArray);
    }

    function getAll()
    {
       return $this->db->get('users')->result_array();
     
    }

    function getuser($userid)
    {
        $this->db->where('user_id',$userid);
        return $this->db->get('users')->row_array();  
    }

    function updateUser($userID,$updateinfo)
    {
        $this->db->where('user_id',$userID);
        $this->db->update('users',$updateinfo);
    }

    function deleteuser($userid)
    {
        $this->db->where('user_id',$userid);
        $this->db->delete('users');
    }
}


?>