<?php

class Pets_model extends CI_Model{

    public function getPet($id = null)
    {   
        $this->db->select('*');
        $this->db->from('pets');
        $this->db->join('gender', 'gender.gender_id = pets.gender_id');
        $this->db->join('pet_types', 'pet_types.pet_type_id = pets.pet_type_id');
        $this->db->where('pet_id', $id);
        $this->db->where('pets.is_deleted', 0);
        $res = $this->db->get()->result();
        return $res;
    }

}

?>