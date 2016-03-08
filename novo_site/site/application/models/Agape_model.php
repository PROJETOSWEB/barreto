<?php

/**
 * Description of Agape_model
 *
 * @author karol Oliveira
 */
class Agape_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function save($table, $dados) {

        $this->db->insert($table, $dados);
    }

    public function getTable($table) {

        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function getJoin($table, $join, $order) {

        $this->db->select("*");
        $this->db->from($table);
        $this->db->join($join, $join . "." . $join . "_id =" . $table . "." . $table . "_id");
        $this->db->order_by($table . "." . $order, "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUpdate($table, $id) {

        $query = $this->db->get_where($table, array($table . "_id" => $id));
        return $query->result_array();
    }

    public function update($dados, $table, $id) {

        $this->db->where($table . "_id", $id);
        $this->db->update($table, $dados);
    }

    public function delete($table, $id) {

        $this->db->where($table. "_id", $id);
        $this->db->delete($table);
    }

}
