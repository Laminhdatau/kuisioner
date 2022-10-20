<?php
class M_quisioner extends CI_Model{


    // =======================================BEGIN QUIS DOSEN=====================================================
    function getQuisionerDosen()
    {
        $query = $this->db->query("SELECT q.kd_quisioner,q.quisioner,q.status,q.created_up,jq.id_jenis_quisioner,jq.jenis_quisioner FROM t_quisioner q JOIN t_jenis_quisioner jq ON (q.id_jenis_quisioner=jq.id_jenis_quisioner) WHERE jq.id_jenis_quisioner='1' AND q.status='1' ORDER BY id_jenis_quisioner LIMIT 10");
        return $query->result_array();
    }

    function inputQuisionerDosen($data){
    
        $this->db->select('*');
        $this->db->from('t_answer_quisioner');
        $this->db->set($data);
        $this->db->insert('t_answer_quisioner');
    }


    // ====================================END QUIS DOSEN===========================================================

    // ========================================BEGIN QUIS MK========================================================
   function getQuisionerMk()
    {
        $query = $this->db->query("SELECT q.kd_quisioner,q.quisioner,q.status,q.created_up,jq.id_jenis_quisioner,jq.jenis_quisioner FROM t_quisioner q JOIN t_jenis_quisioner jq ON (q.id_jenis_quisioner=jq.id_jenis_quisioner) WHERE jq.id_jenis_quisioner='2'AND q.status='1' ORDER BY id_jenis_quisioner LIMIT 10");
        return $query->result_array();
    }
    function inputQuisionerMk($data){
    
        $this->db->query("SELECT aq.*,m.nim,m.nama,mk.kd_mk,mk.mk,ds.kd_dosen_pengampu,ds.nama_dosen,q.kd_quisioner,q.quisioner,a.id_answer,a.answer from t_answer_quisioner aq join t_mahasiswa m on aq.nim=m.nim join t_mk mk on aq.kd_mk=mk.kd_mk join t_dosen_pengampu ds on aq.kd_dosen_pengampu=ds.kd_dosen_pengampu join t_quisioner q on aq.kd_quisioner=q.kd_quisioner join t_answer a on aq.id_answer=a.id_answer order by kd_answer_quisioner asc ");
        $this->db->from('t_answer_quisioner');
        $this->db->set($data);
        $this->db->insert($this->db->dbprefix . 't_answer_quisioner');
    }
      // ====================================END QUIS DOSEN===========================================================

    //   =======================================BEGIN ANSWER=========================================
    function getIdAnswerQuis($kd_ansquis)
    {
        $this->db->query("SELECT aq.*,m.nim,m.nama,mk.kd_mk,mk.mk,ds.kd_dosen_pengampu,ds.nama_dosen,q.kd_quisioner,q.quisioner,a.id_answer,a.answer from t_answer_quisioner aq join t_mahasiswa m on aq.nim=m.nim join t_mk mk on aq.kd_mk=mk.kd_mk join t_dosen_pengampu ds on aq.kd_dosen_pengampu=ds.kd_dosen_pengampu join t_quisioner q on aq.kd_quisioner=q.kd_quisioner join t_answer a on aq.id_answer=a.id_answer order by kd_answer_quisioner asc ");
        $query = $this->db->get('t_answer_quisioner');
        return $query->result_array();
    }
    function insertAnswerQuis($data)
    {
        $this->db->query("SELECT aq.*,m.nim,m.nama,mk.kd_mk,mk.mk,ds.kd_dosen_pengampu,ds.nama_dosen,q.kd_quisioner,q.quisioner,a.id_answer,a.answer from t_answer_quisioner aq join t_mahasiswa m on aq.nim=m.nim join t_mk mk on aq.kd_mk=mk.kd_mk join t_dosen_pengampu ds on aq.kd_dosen_pengampu=ds.kd_dosen_pengampu join t_quisioner q on aq.kd_quisioner=q.kd_quisioner join t_answer a on aq.id_answer=a.id_answer order by kd_answer_quisioner asc ");
        $query =  $this->db->set($data);
        $this->db->insert('t_answer_quisioner',$query);
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