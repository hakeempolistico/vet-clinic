<?php

class Global_model extends CI_Model{

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function getRecords($table, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null)
        {
           $this->db->order_by($set, $order_by);
        }
        $query = $this->db->get($table)->result();
        return $query;
    }

    public function getUserType($usertype = null)
    {
        if($usertype){
            $this->db->where('user_type_name', $usertype);
            $res = $this->db->get('user_types')->row();
            return $res->user_type_id;
        }
        return false;
    }

    public function getUserId($userEmail = null)
    {
        if($userEmail){
            $this->db->where('user_email', $userEmail);
            $res = $this->db->get('users')->row();
            return $res->user_id;
        }
        return false;
    }

}

?>