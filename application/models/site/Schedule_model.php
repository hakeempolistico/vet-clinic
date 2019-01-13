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
        		`user_id` = '".$id."'

        	")->result(); 
        return $query;
    }
}

?>