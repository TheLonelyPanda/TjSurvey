<?php
class Datamodel extends CI_Model
{
  function __construct()
  {
    $this->load->database();
    parent::__construct();
  }
  function insert($obj)
  {
    $obj->Create_DTM=date('Y-m-d H:i:s');
    $this->db->insert($this->table_name, $obj);
  }
  function update($obj)
  {
    $obj->Update_DTM=date('Y-m-d H:i:s');
    $this->db->where($this->pk_name, $this->pk_value);
    $this->db->update($this->table_name, $obj);
  }
  function delete()
  {
    $this->db->delete($this->table_name, array($this->pk_name => $this->pk_value));
  }
  function load()
  {
    $query = $this->db->query("select * from " . $this->table_name . " where " . $this->pk_name . "=" . $this->pk_value);
    if ($query->num_rows() > 0) {
      $row = $query->row();
      return $row;
    }
  }
  function list_data()
  {
    $query = $this->db->query("select * from " . $this->table_name . " " . $this->condition);
    return $query->result();
  }
  function list_data_sql()
  {
    $query = $this->db->query($this->sql);
    //echo $this->sql."::::::::::::";
    return $query->result();
  }
  function list_data_sql_export()
  {
    $query = $this->db->query($this->sql);
    //echo $this->sql."::::::::::::";
    return $query;
  }

  function first_row_data_sql()
  {
    $query = $this->db->query($this->sql);
    //echo $this->sql."::::::::::::";
    if ($query->num_rows() > 0) {
      $row = $query->row();
      return $row;
    }
  }

  function list_data_count()
  {
    $query = $this->db->query("select * from " . $this->table_name . " " . $this->condition);
    return $query->num_rows();
  }

  function list_data_join()
  {
    $query = $this->db->query("select " . $this->field_name . " from " . $this->table_name . " " . $this->condition);
    return $query->result();
  }
  function update_clear()
  {
    $qq = "update " . $this->table_name . " set " . $this->field_clear . "=''";
    $qq .= " where " . $this->pk_name . "='" . $this->pk_value . "'";
    //$this->db->where($this->pk_name, $this->pk_value);
    $result = $this->db->query($qq);
  }
}
