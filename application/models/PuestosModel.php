<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class PuestosModel extends CI_Model{

    //get by relationship
    public function get_dia_by_id($id){
        $this->db->select('dias');
        $this->db->from('dias');
        $this->db->where('iddia',$id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_comida_by_id($id){
        $this->db->select('comida');
        $this->db->from('comidas');
        $this->db->where('idcomida',$id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_periodo_by_id($id){
        $this->db->select('periodo');
        $this->db->from('periodos');
        $this->db->where('idperiodo',$id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_calificacion_by_puesto($id){
        $this->db->select('calificacion');
        $this->db->from('reviews');
        $this->db->where('puesto',$id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    //

    public function get_periodos(){
        $this->db->select('*');
        $this->db->from('periodos');

        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_dias(){
      $this->db->select('*');
      $this->db->from('dias');
      $query = $this->db->get()->result_array();
      return $query;
    }


    

    public function get_comidas(){
        $this->db->select('*');
        $this->db->from('comidas');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_puestos(){
        $this->db->select('*');
        $this->db->from('puestos');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function crear_puesto($data){
      $this->db->insert('puestos',$data);
      return $this->db->insert_id();
    }

    public function get_reviews($id){
      $this->db->select('*');
      $this->db->from('puestos');
      $this->db->where('puesto', $id);
      $query = $this->db->get()->result_array();
      return $query;
    }

    public function crear_review($data){
      $this->db->insert('reviews',$data);
      return $this->db->insert_id();
    }

    public function updateCalificacion($data){
      $datax = array('calificacion' => $data['calificacion']  );
      $this->db->where('idpuesto', $data['id']);
      $this->db->update('puestos', $datax);
    }



  }

?>
