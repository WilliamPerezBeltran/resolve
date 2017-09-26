<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_empleados extends CI_Model {
    
    public function crear($data) {
        $this->load->database();
        $this->db->insert('registrocuenta', $data);
    }
    public function listarEmpleados() {
        $this->load->database();
        $query=$this->db->get('registrocuenta');
        return $query->result_array();
    }
    public function eliminarEmpleados($id) {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('registrocuenta');
    }
    public function getInfoLogin($pPassword,$pEmail) {
        $this->load->database();
        $this->db->where('contraseña',$pPassword);
        $this->db->where('email',$pEmail);
        $query=$this->db->get('registrocuenta');
        return $query->result_array();
    }
    public function verdetalleempleado($id){
        $this->load->database();
        $this->db->where('id',$id);
        $query=$this->db->get('registrocuenta');
        return $query->row_array();
        
    }
    

}

?>