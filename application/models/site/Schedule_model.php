<?php

class Schedule_model extends CI_Model{

 	public function getCalendarDetails($id){
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
        		`user_id` = '".$id."' AND 
                `is_deleted` = '0'

        	")->result(); 
        return $query;
    }

    public function getSheduleDetails(){
        $query = $this->db->query("
            SELECT 
                `sh`.*,
                (SELECT `name` FROM `schedule_status` WHERE `id` = `sh`.`status`) as `status_name`
            FROM 
                `schedules` `sh`
            WHERE 
                `sh`.`user_id` = '".$id."' AND 
                `is_deleted` = '0'

            ")->result(); 
        return $query;
    }

    public function getGetListView($aParam){
        $query = $this->db->query("
            SELECT `sc`.*, 
                 (DATE_FORMAT(`sc`.`date_time`, '%b %d,%r'))  as `full_date`, 
                 (SELECT `pet_name` FROM `pets` 
                   WHERE  `user_id`  = '".$aParam['id']."' AND 
                   `pet_id` = `sc`.`pet_id` LIMIT 1) as `pet_name`,
                (SELECT `name` FROM `schedule_status` 
                   WHERE 
                   `id` = `sc`.`status` LIMIT 1) as `status_name`
            FROM `schedules`  `sc`
            WHERE `sc`.`user_id`  = '".$aParam['id']."' AND 
                `sc`.`is_deleted` = '0'
            ORDER BY `sc`.`schedule_id`  DESC
            ")->result(); 
        return $query;
    }

    public function getTimeScheduleAvailable($aParam){
        $query = $this->db->query("
           SELECT * FROM `time_schedule` WHERE `active` = '1' AND
                 `value` NOT IN (SELECT `time` FROM `schedules` WHERE `date` = '".$aParam['date']."' AND `is_deleted` = '0' AND `status` = '2') 
            ")->result(); 
        return $query;
    }

    public function viewSchedulebyID($aParam){
        $query = $this->db->query("
                 SELECT `sc`.*, 
                 (DATE_FORMAT(`sc`.`date_time`,'%b %d, %H:%i'))  as `full_date`, 
                 (SELECT `pet_name` FROM `pets` 
                   WHERE  `user_id`  = '".$aParam['id']."' AND 
                   `pet_id` = `sc`.`pet_id` LIMIT 1) as `pet_name`,
                (SELECT `name` FROM `schedule_status` 
                   WHERE  
                   `id` = `sc`.`status` LIMIT 1) as `status_name`
                FROM `schedules`  `sc`
                WHERE `sc`.`user_id`  = '".$aParam['id']."' AND 
                    `sc`.`is_deleted` = '0' AND 
                    `sc`.`schedule_id` =  '".$aParam['schedule_id']."' 
                GROUP BY `sc`.`schedule_id`
            ")->result(); 
        return $query;
    }

    // public function cancelSchedule($aParam){
    //     $query = $this->db->query("
    //             UPDATE `schedules` SET `status` = '4'
    //             WHERE 
    //                 `schedule_id` =  '".$aParam['schedule_id']."' 
    //         ")->result(); 
    //     return $query;
    // }

    //  public function deleteSchedule($aParam){
    //     $query = $this->db->query("
    //             UPDATE `schedules` SET `is_deleted` = '1'
    //             WHERE 
    //                 `schedule_id` =  '".$aParam['schedule_id']."' 
    //         ")->_update(); 
    //     return $query;
    // }
}

?>