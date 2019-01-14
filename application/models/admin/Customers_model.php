<?php

class Customers_model extends CI_Model{

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function getCustRecords()
    {        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profiles', 'users.user_id = profiles.user_id');
        $this->db->join('gender', 'gender.gender_id = profiles.gender_id');
        $this->db->join('user_types', 'user_types.user_type_id = users.user_type_id');
        $this->db->where('user_type_name', 'Customer');
        $this->db->where('users.is_deleted', 0);
        $res = $this->db->get()->result();
        return $res;
    }

    public function getCustRecord($id=null)
    {   
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profiles', 'users.user_id = profiles.user_id');
        $this->db->join('gender', 'gender.gender_id = profiles.gender_id');
        $this->db->join('user_types', 'user_types.user_type_id = users.user_type_id');
        $this->db->where('user_type_name', 'Customer');
        $this->db->where('profiles.user_id', $id);
        $this->db->where('users.is_deleted', 0);
        $res = $this->db->get()->row();
        return $res;
    }

    public function getPetsInfo($id=null)
    {   
        $this->db->select('*');
        $this->db->from('pets');
        $this->db->join('pet_types', 'pet_types.pet_type_id = pets.pet_type_id');
        $this->db->join('gender', 'gender.gender_id = pets.gender_id');
        $this->db->join('pet_status', 'pet_status.pet_status_id = pets.pet_status_id');
        $this->db->where('user_id', $id);
        $this->db->where('is_deleted', 0);
        $res = $this->db->get()->result();
        return $res;
    }

}

?>