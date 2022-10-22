<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	// ======================================================BEGIN QUIS DOSEN======================================================
	public function index()
	{
		$data['title']="Quisioner Dosen Pengampuh";
		$data['quisdosen']=$this->m_quisioner->getQuisionerDosen();
		$data['option']=$this->m_quisioner->getAnswer();
		$data['dosen']=$this->m_quisioner->getDosenDetail();
		$data['mk']=$this->m_quisioner->getMk();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		
		$this->load->view('frontend/mahasiswa/kuis_dosen',$data);
		$this->load->view('template/footer');
	}
	

	public function InputQuisDosen(){

		$kd_quis=$this->input->post('kd_quisioner');
		$nim=$this->session->userdata('nama');
		$mk=$this->input->post('kd_mk');
		$dosen=$this->session->userdata('kd_dosen_pegampu');;
		$kd_answer=$this->input->post('id_answer');
		$comments=$this->input->post('comments');
		$waktu=$this->input->post('waktu');

		$arr=[
			'kd_quisioner'=>[
				
			],
			'nim'=>20501049,
			'kd_mk'=>1,
			'kd_dosen_pengampu'=>121211,
			'id_answer'=>$kd_answer,
			'comments'=>$comments,
			'waktu'=>date('Y-m-d H:i:s')
		];
		$this->db->set('kd_answer_quisioner','UUID()',false);
		$this->m_quisioner->inputQuisionerDosen($arr);
		
		 redirect(base_url('Quisioner/'));
	}

// ==============================================END QUISIONER DOSEN======================================================

	// =========================================BEGIN QUIS MATA KULIAH=========================================

	public function getQuisMK(){
		$data['title']="Quisioner Mata Kuliah";
		$data['quismk']=$this->m_quisioner->getQuisionerMk();
		$data['option']=$this->m_quisioner->getAnswer();
		$data['dosen']=$this->m_quisioner->getDosenArr();
		$data['mk']=$this->m_quisioner->getMk();
		$this->load->view('template/header',$data);
		
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('frontend/mahasiswa/kuis_mk',$data);
		$this->load->view('template/footer');
	}

	public function InputQuisMk(){

		$kd_quis=$this->input->post('kd_quisioner');
		$nim=$this->session->userdata(array('nama'))->row_array();
		$mk=$this->input->post('kd_mk');
		$dosen=$this->session->userdata('kd_dosen_pegampu');;
		$kd_answer=$this->input->post('id_answer');
		$comments=$this->input->post('comments');
		$waktu=$this->input->post('waktu');

		$data=[
			'kd_quisioner'=>$kd_quis,
			'nim'=>20501049,
			'kd_mk'=>$mk,
			'kd_dosen_pengampu'=>$dosen,
			'id_answer'=>$kd_answer,
			'comments'=>$comments,
			'waktu'=>date('Y-m-d H:i:s')
		];
		$this->db->set('kd_answer_quisioner','UUID()',false);
		$this->m_quisioner->inputQuisionerMk($data);
		
		 redirect(base_url('Quisioner/'));
	}


	// ==========================================END QUIS MATA KULIA=======================================================


	// ==========================================BEGIN MATA KULIAH===================================================

	public function getMk(){
		$data['title']="Quisioner Mata Kuliah";
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar',$data);
		$this->load->view('kuis_mk',$data);
		$this->load->view('template/footer');
	}

	// =========================================END MATA KULIAH =======================================================



}
