<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function getTable($table,$where = array(), $limit = array(), $row = false){
        $this->db->select('*');
        $this->db->from($table);

        if(!empty($limit))
            $this->db->limit($limit[0], $limit[1]);

        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        //$this->db->order_by('id', 'desc');
        return ($row) ?  $query->row() :  $query->result();
    }

    public function getRow($table,$where = array()){
        $this->db->select('*');
        $this->db->from($table);
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        return   $query->row();
    }


    //Veri Tabanına Sorgu
    public function query($query, $bool = true){
        if(!$bool) return $this->db->query($query);
        $result = $this->db->query($query)->result();
        return $result;
    }
}