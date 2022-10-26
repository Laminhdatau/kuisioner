<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	// ======================================================BEGIN QUIS DOSEN======================================================
	public function index()
	{
		$data['title']="Kuisioner Dosen";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['quisdosen']=$this->m_quisioner->getQuisionerDosen();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('frontend/mahasiswa/kuis_dosen',$data);
		$this->load->view('template/footer');
	}
	

	public function InputQuisDosen(){

		$kd_answer=$this->input->post('kd_answer_quisioner');
		$nim= $this->input->post('nim');
		$dosen=$this->input->post('nipy');
		$kd_quis=$this->input->post('kd_quisioner');
		$kd_answer=$this->input->post('id_answer');
		$waktu=$this->input->post('waktu');
		$comments=$this->input->post('comments');

		$comment=array(

			'nim'=>$this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'kd_comments'=>$comments,
			'jenis_comments'=>'Dosen',
			'kd_comments'=>$comments

		);

		$data=array(
			'nim'=>$this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'nipy'=>$dosen,
			'id_answer'=>$kd_answer,
			'waktu'=>date('Y-m-d H:i:s')
		);
		$this->db->set('kd_answer_quisioner','UUID()',false);
		$this->m_quisioner->inputQuisionerDosen($data);
		$this->m_quisioner->inputComments($comment);
		
		// redirect(base_url('Quisioner/'));
		var_dump($data,$comment);
		die;
	}

// ==============================================END QUISIONER DOSEN======================================================

	// =========================================BEGIN QUIS MATA KULIAH=========================================

	public function getQuisMK(){
		$data['title']="Kuisioner Mata Kuliah";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
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
		$dosen=$this->session->userdata('nipy');;
		$kd_answer=$this->input->post('id_answer');
		$comments=$this->input->post('comments');
		$waktu=$this->input->post('waktu');

		$data=[
			'kd_quisioner'=>$kd_quis,
			'nim'=>20501049,
			'kd_mk'=>$mk,
			'nipy'=>121211,
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
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar',$data);
		$this->load->view('kuis_mk',$data);
		$this->load->view('template/footer');
	}

	// =========================================END MATA KULIAH =======================================================

}
