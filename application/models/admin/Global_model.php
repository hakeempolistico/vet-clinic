<?php

class Global_model extends CI_Model{

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function getRecords($table, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null)
        {
           $this->db->order_by($set, $order_by);
        }
        $query = $this->db->get($table)->result();
        return $query;
    }

}

?>