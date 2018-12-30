<?php

class Customers_model extends CI_Model{

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function getRecords($order_by=null, $set=null)
    {
        if($order_by != null && $set != null)
        {
           $this->db->order_by($set, $order_by);
        }
        
        $this->db->select('*');
        $this->db->from('profiles');
        $this->db->join('users', 'users.user_id = profiles.user_id');
        $this->db->join('gender', 'gender.gender_id = profiles.gender_id');
        $this->db->join('user_types', 'user_types.user_type_id = users.user_type_id');
        $this->db->where('user_type_name', 'Customer');
        $res = $this->db->get()->result();
        return $res;
    }

}

?>