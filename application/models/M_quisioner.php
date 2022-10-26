<?php
class M_quisioner extends CI_Model{


    // =======================================BEGIN QUIS DOSEN=====================================================
    public function getJenis()
    {
        return $this->db->get('t_jenis_quisioner')->result_array();
    }
    public function getQuisionerDosen()
    {
        $this->db->select('q.*,j.*');
        $this->db->from('t_quisioner q');
        $this->db->join('t_jenis_quisioner j','q.id_jenis_quisioner=j.id_jenis_quisioner');
        $this->db->where('j.id_jenis_quisioner=1');
        $this->db->order_by('q.id_jenis_quisioner');
        return $this->db->get()->result_array();

    }
    public function inputQuisionerDosen()
    {
        $this->db->select('aq.*,q.*,a.*');
        $this->db->from('t_quisioner answer aq');
        $this->db->join('t_quisioner q','aq.kd_quisioner=q.kd_quisioner');
        $this->db->join('t_answer a','aq.id_answer_quisioner=a.id_answer_quisioner');
        return $this->db->insert();
    }
    public function inputComments()
    {
        $this->db->select('*');
        $this->db->from('t_comments');
        $this->db->where('jenis_comment=Dosen');
        return $this->db->insert();
    }

}