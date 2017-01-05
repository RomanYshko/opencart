<?php
class ModelSaleFraud extends Model {
    public function getFraud($order_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_fraud` WHERE order_id = '" . (int)$order_id . "'");

        return $query->row;
    }

    public function file_name(){
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "uploads ");

        return $query->rows;
    }
}
?>