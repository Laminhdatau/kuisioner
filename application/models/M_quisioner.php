<?php
class M_quisioner extends CI_Model{


    // =======================================BEGIN QUIS DOSEN=====================================================
    function getQuisionerDosen()
    {
        $query = $this->db->query("SELECT q.kd_quisioner,q.quisioner,q.status,q.created_up,jq.id_jenis_quisioner,jq.jenis_quisioner FROM t_quisioner q JOIN t_jenis_quisioner jq ON (q.id_jenis_quisioner=jq.id_jenis_quisioner) WHERE jq.id_jenis_quisioner='1' AND q.status='1' ORDER BY id_jenis_quisioner LIMIT 10");
        return $query->result();
    }

    function inputQuisionerDosen($data){
    
        $this->db->select('*');
        $this->db->from('t_answer_quisioner');
        $this->db->set($data);
        $this->db->insert($this->db->dbprefix . 't_answer_quisioner');
    }


    // ====================================END QUIS DOSEN===========================================================

    // ========================================BEGIN QUIS MK========================================================
   function getQuisionerMk()
    {
        $query = $this->db->query("SELECT q.kd_quisioner,q.quisioner,q.status,q.created_up,jq.id_jenis_quisioner,jq.jenis_quisioner FROM t_quisioner q JOIN t_jenis_quisioner jq ON (q.id_jenis_quisioner=jq.id_jenis_quisioner) WHERE jq.id_jenis_quisioner='2'AND q.status='1' ORDER BY id_jenis_quisioner LIMIT 10");
        return $query->result();
    }
    function inputQuisionerMk($data){
    
        $this->db->select('*');
        $this->db->from('t_answer_quisioner');
        $this->db->set($data);
        $this->db->insert($this->db->dbprefix . 't_answer_quisioner');
    }
      // ====================================END QUIS DOSEN===========================================================


    //   =======================================BEGIN ANSWER=========================================
    function getIdAnswerQuis($kd_ansquis)
    {
        $this->db->select('*');
        $this->db->from('t_answer_quisioner');
        $this->db->where('kd_answer_quisioner',$kd_ansquis);
        $query = $this->db->get('t_answer_quisioner');
        return $query->row();
    }
    function insertAnswerQuis($data)
    {
        $this->db->select('* from t_answer_quisioner');
        $this->db->join('t_quisioner','t_answer_quisioner.kd_quisioner=t_quisioner.kd_quisioner ');
        $this->db->join('t_answer','t_answer_quisioner.id_answer=t_answer.id_answer');
        $this->db->set($data);
        $this->db->insert($this->db->dbprefix .'t_answer_quisioner');
    }
    // ======================================END ANSWER===================================================
 
// end quis

    function getAnswer()
    {
         $query=$this->db->query("SELECT * FROM t_answer")->result();
         return $query;
    }
        //   =======================================BEGIN DOSEN=========================================
    function getDosenDetail()
    {
       $query=$this->db->query("SELECT * from t_dosen_pengampu");
        return $query->row();
    }
    function getDosenArr()
    {
       return $this->db->get('t_dosen_pengampu')->result();
    }
    
    // ======================================END DOSEN===================================================

            //   =======================================BEGIN MAHASISWA=========================================
    function getMhsDetail()
    {
        $query=$this->db->query("SELECT * from t_mahasiswa");
        return $query->row();
    }
    // ======================================END MAHASISWA===================================================
    function getMk(){
       
return $query=$this->db->get('t_mk')->result();
    }

}