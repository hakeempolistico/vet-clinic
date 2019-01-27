<?php

class Schedules_model extends CI_Model{

    public function getSchedules()
    {   
        $this->db->select('*');
        $this->db->from('schedules');
        $this->db->join('profiles', 'profiles.user_id = schedules.user_id');
        $this->db->join('pets', 'pets.pet_id = schedules.pet_id');
        $this->db->join('schedule_status', 'schedules.status = schedule_status.id');
        $this->db->where('schedules.is_deleted', 0);
        $res = $this->db->get()->result();
        return $res;
    }

}

?>