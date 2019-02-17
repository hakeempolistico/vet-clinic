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


     public function getAllScheduleCalendar(){
        $query = $this->db->query("
            SELECT 
                `s`.`schedule_id` as `id`,
                CONCAT(`s`.`time`,'-',`p`.`lname`) as `title`, 
                `s`.`date_time` as `start`,  
                'false' as `allDay`,
                (CASE
                    WHEN `status` = '1' THEN 'pending'
                    WHEN `status` = '2' THEN 'approved'
                    WHEN `status` = '3' THEN 'rejected'
                    WHEN `status` = '4' THEN 'important'
                    ELSE 'default'
                END) AS `className`
            FROM 
                `schedules` `s`, 
                `profiles` `p`
            WHERE 
                `s`.`is_deleted` = '0' AND 
                `s`.`status` IN (1,2,3) AND 
                `p`.`user_id` = `s`.`user_id`
            ")->result(); 
        return $query;
    }



    public function getApprovedScheduleCalendar(){
        $query = $this->db->query("
            SELECT 
                `s`.`schedule_id` as `id`,
                CONCAT(`s`.`time`,'-',`p`.`lname`) as `title`, 
                `s`.`date_time` as `start`,  
                'false' as `allDay`,
                (CASE
                    WHEN `status` = '1' THEN 'pending'
                    WHEN `status` = '2' THEN 'approved'
                    WHEN `status` = '3' THEN 'rejected'
                    WHEN `status` = '4' THEN 'important'
                    ELSE 'default'
                END) AS `className`
            FROM 
                `schedules` `s`, 
                `profiles` `p`
            WHERE 
                `s`.`is_deleted` = '0' AND 
                `s`.`status` IN (2) AND 
                `p`.`user_id` = `s`.`user_id`
            ")->result(); 
        return $query;
    }


    public function getPendingScheduleCalendar(){
        $query = $this->db->query("
            SELECT 
                `s`.`schedule_id` as `id`,
                CONCAT(`s`.`time`,'-',`p`.`lname`) as `title`, 
                `s`.`date_time` as `start`,  
                'false' as `allDay`,
                (CASE
                    WHEN `status` = '1' THEN 'pending'
                    WHEN `status` = '2' THEN 'approved'
                    WHEN `status` = '3' THEN 'rejected'
                    WHEN `status` = '4' THEN 'important'
                    ELSE 'default'
                END) AS `className`
            FROM 
                `schedules` `s`, 
                `profiles` `p`
            WHERE 
                `s`.`is_deleted` = '0' AND 
                `s`.`status` IN (1) AND 
                `p`.`user_id` = `s`.`user_id`
            ")->result(); 
        return $query;
    }

    public function viewSchedulebyID($aParam){
        $query = $this->db->query("
                 SELECT `sc`.*, 
                 (DATE_FORMAT(`sc`.`date_time`,'%b %d, %H:%i'))  as `full_date`, 
                 (SELECT `pet_name` FROM `pets` 
                   WHERE  
                   `pet_id` = `sc`.`pet_id` LIMIT 1) as `pet_name`,
                (SELECT `name` FROM `schedule_status` 
                   WHERE  
                   `id` = `sc`.`status` LIMIT 1) as `status_name`
                FROM `schedules`  `sc`
                WHERE
                    `sc`.`is_deleted` = '0' AND 
                    `sc`.`schedule_id` =  '".$aParam['schedule_id']."' 
                GROUP BY `sc`.`schedule_id`
            ")->result(); 
        return $query;
    }

    public function updateSchedule($aParam){
        $query = $this->db->query("
                UPDATE 
                    `schedules` 
                SET 
                    `status` = '".$aParam['status']."'
                WHERE
                    `schedule_id` = '".$aParam['schedule_id']."'
            "); 
        return $query;
    }
    
    public function getMessageDetails($aParam){
        $query = $this->db->query("
        SELECT 
            `p`.`fname`, 
            `p`.`contact_num`, 
            `s`.`date`, 
            `s`.`time`
        FROM 
            `schedules` `s`, 
            `profiles` `p`
         WHERE
                `s`.`schedule_id` = '".$aParam['schedule_id']."' AND 
            `s`.`user_id` =  `p`.`user_id`
         ")->row(); 
        return $query;
    }
}
?>