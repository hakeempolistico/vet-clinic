<?php

class Pet_model extends CI_Model{

    public function getCustPet($user_id, $pet_id=null, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null)
           $this->db->order_by($set, $order_by);
        
        $this->db->select('*');
        $this->db->from('pets');
        $this->db->join('gender', 'gender.gender_id = pets.gender_id');
        $this->db->join('pet_types', 'pet_types.pet_type_id = pets.pet_type_id');
        $this->db->join('pet_status', 'pet_status.pet_status_id = pets.pet_status_id');
        $this->db->where('user_id', $user_id);
        $this->db->where('is_deleted', 0);
        
        if($pet_id){
            $this->db->where('pet_id', $pet_id);
            $row = $this->db->get()->row();
            return $row;
        } 

        $res = $this->db->get()->result();
        return $res;
    }

}

?>