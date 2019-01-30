<?php

class Schedules_model extends CI_Model{

    public function getSchedules($status = null)
    {   
        $this->db->select('*');
        $this->db->from('schedules');
        $this->db->join('profiles', 'profiles.user_id = schedules.user_id');
        $this->db->join('pets', 'pets.pet_id = schedules.pet_id');
        $this->db->join('schedule_status', 'schedules.status = schedule_status.id');
        $this->db->where('schedules.is_deleted', 0);

        if($status){
            $this->db->where('schedule_status.name', $status);
        }

        $res = $this->db->get()->result();
        return $res;
    }

    public function getSchedule($id)
    {   
        $this->db->select('*');
        $this->db->from('schedules');
        $this->db->join('profiles', 'profiles.user_id = schedules.user_id');
        $this->db->join('pets', 'pets.pet_id = schedules.pet_id');
        $this->db->join('pet_types', 'pet_types.pet_type_id = pets.pet_type_id');
        $this->db->join('schedule_status', 'schedules.status = schedule_status.id');
        $this->db->where('schedules.is_deleted', 0);
        $this->db->where('schedules.schedule_id', $id);
        $res = $this->db->get()->result();
        return $res;
    }

    public function getScheduleCalendar(){
        $query = $this->db->query("
            SELECT 
                *,
                (CASE
                    WHEN `status` = '1' THEN 'pending'
                    WHEN `status` = '2' THEN 'approved'
                    WHEN `status` = '3' THEN 'chill'
                    WHEN `status` = '4' THEN 'important'
                    ELSE 'default'
                END) AS `color`
            FROM 
                `schedules` 
            WHERE 
                `is_deleted` = '0'
            ")->result(); 
        return $query;
    }
}

?>