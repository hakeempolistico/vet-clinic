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

    public function getPetDiagnose($whereArr, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null)
           $this->db->order_by($set, $order_by);
        
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->join('diagnose', 'diagnose.diagnose_id = transactions.diagnose_id');
        $this->db->join('schedules', 'schedules.schedule_id = diagnose.schedule_id');
        $this->db->where('user_id', $this->session->user_id);
        $this->db->where($whereArr);

        $res = $this->db->get()->result();
        return $res;
    }

}

?>