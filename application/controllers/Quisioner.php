<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller {


	// ======================================================BEGIN QUIS DOSEN======================================================
	public function index()
	{

		
		$data['title']="Quisioner Dosen Pengampuh";
		$data['quisdosen']=$this->m_quisioner->getQuisionerDosen();
		
		$data['option']=$this->m_quisioner->getAnswer();
		$data['dosen']=$this->m_quisioner->getDosen();
		$this->load->view('template/header',$data);
		$this->load->view('template/nav-mhs');
		$this->load->view('kuis_dosen',$data);
		$this->load->view('template/footer-mhs');
	}
	

	public function InputQuisDosen(){

		$kd_quis=$this->input->post('kd_quisioner');
		$nim=$this->input->post('nim');
		$dosen=$this->input->post('kd_dosen_pengampu');
		$kd_answer=$this->input->post('id_answer');
		$comments=$this->input->post('comments');
		$waktu=$this->input->post('waktu');

		$arr=[
			'kd_quisioner'=>$kd_quis,
			'nim'=>20501049,
			'kd_dosen_pengampu'=>00101,
			'id_answer'=>$kd_answer,
			'comments'=>$comments,
			'waktu'=>$waktu
		];
		$this->db->set('kd_answer_quisioner','UUID()',false);
		$this->m_quisioner->inputQuisionerDosen($arr);
		
		var_dump($arr);
		die;
		// redirect(base_url());
	}

// ==============================================END QUISIONER DOSEN======================================================

	// =========================================BEGIN QUIS MATA KULIAH=========================================

	public function getQuisMK(){
		$data['title']="Quisioner Mata Kuliah";
		$data['quismk']=$this->m_quisioner->getQuisionerMk();
		$data['option']=$this->m_quisioner->getAnswer();
		$this->load->view('template/header',$data);
		$this->load->view('template/nav-mhs');
		$this->load->view('kuis_mk',$data);
		$this->load->view('template/footer-mhs');
	}


	// ==========================================END QUIS MATA KULIA=======================================================


	// ==========================================BEGIN MATA KULIAH===================================================

	public function getMk(){
		$data['title']="Quisioner Mata Kuliah";
		$this->load->view('template/header',$data);
		$this->load->view('template/nav-mhs');
		$this->load->view('kuis_mk',$data);
		$this->load->view('template/footer-mhs');
	}

	// =========================================END MATA KULIAH =======================================================


}
