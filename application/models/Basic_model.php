<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($tablename,$where = array()){
        $result = $this->db->where($where)->get($tablename)->row();
        return $result;
    }

    function insert($tableName,$data){
        return $this->db->insert($tableName,$data);
    }

    public function update ($tablo,$veri,$alan,$id)
    {
        $this->db->where($alan, $id);
        return $this->db->update($tablo,$veri);
    }


    public function delete ($tablo,$alan,$id)
    {
        $this->db->where($alan, $id);
        return $this->db->delete($tablo);
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

    public function getTables($table, $where = array(), $jointable = "", $on = "", $jointype = ""){
        $this->db->from($table);
        $this->db->join($jointable, $on, $jointype);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getTableOrder($table,$where = array(), $order = "", $var = ""){
        $this->db->from($table);
        $this->db->where($where);
        if($order != "")
            $this->db->order_by($var, $order);
        $query = $this->db->get();
        return $query->result();
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

    //Son Eklenen İD Getirme
    public  function insertID(){
        return $this->db->insert_id();
    }

    //Coklu resim upload
    public function multiple_images($image = array()){
        return $this->db->insert_batch('gallery',$image);
    }

    //Tersten sıralama
    function descGetTable($table,$where = array(),$row = false){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'desc');
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        return ($row) ?  $query->row() :  $query->result();
    }

    public function increase($table, $col, $x, $where = array()){
        $this->db->where($where);
        $this->db->set($col, "$col+$x", FALSE);
        return $this->db->update($table);
    }
}