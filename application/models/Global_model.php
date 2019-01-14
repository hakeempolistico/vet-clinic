<?php

class Global_model extends CI_Model{

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $col, $val, $data)
    {
        $this->db->where($col, $val);
        return $this->db->update($table, $data);
    } 

    public function getRecords($table, $where=null, $isDeleted=null, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null) $this->db->order_by($set, $order_by);
        if($where) $this->db->where($where['col'], $where['val']);
        if($isDeleted) $this->db->where('is_deleted', $isDeleted);

        $query = $this->db->get($table)->result();
        return $query;
    }

    public function getRow($table, $col, $val, $isDeleted=null, $order_by=null, $set=null)
    {
        if($order_by != null && $set != null){
           $this->db->order_by($set, $order_by);
        }
        if($isDeleted){
            $this->db->where('is_deleted', $isDeleted);
        }
        $this->db->where($col, $val);
        $query = $this->db->get($table)->row();
        return $query;
    }

    public function getUserType($usertype = null)
    {
        if($usertype){
            $this->db->where('user_type_name', $usertype);
            $res = $this->db->get('user_types')->row();
            return $res->user_type_id;
        }
        return FALSE;
    }

    public function getUserId($userEmail = null)
    {
        if($userEmail){
            $this->db->where('user_email', $userEmail);
            $res = $this->db->get('users')->row();
            return $res->user_id;
        }
        return FALSE;
    }

    public function getUserTypeName($userEmail = null)
    {
        if($userEmail){
            //Get usertype ID
            $this->db->where('user_email', $userEmail);
            $res = $this->db->get('users')->row();
            $user_type_id = $res->user_type_id;

            //Get usertype name
            $this->db->where('user_type_id', $user_type_id);
            $res = $this->db->get('user_types')->row();
            return $res->user_type_name;
        }
        return FALSE;
    }

    public function softDelete($table, $array = [])
    {
        if (!$table || empty($array)) {
            return FALSE;
        }
        $this->db->where($array);
        $this->db->set('is_deleted', 1);
        return $this->db->update($table);
    }

}

?>