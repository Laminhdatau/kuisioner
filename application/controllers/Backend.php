<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Backend extends CI_Controller{
	public function __construct(){
		parent::__construct();
		is_logged_in();
		
	}
// ===========================================BEGIN QUISIONER Dosen================================================
    public function index()
	{
		$data['title']="Siakad Politeknik Gorontalo | Dashboard";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar',$data);
		$this->load->view('backend/Dashboard',$data);
        $this->load->view('template/footer');
	}

	public function quisDosen()
	{
		$data['title']="Siakad Politeknik Gorontalo | Kuis Dosen";
		$data['jtable']="Kuis Dosen";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data']=$this->m_backend->getQuisionerDosen();
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/QuisionerDosen',$data);
        $this->load->view('template/footer');
	}
	public function formInputQuisDosen(){
		$data['title']="Siakad Politeknik Gorontalo | Tambah Kuis";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Kuis Dosen";
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/FormInputQuisDosen');
        $this->load->view('template/footer');
	}

	public function fungsiInputQuisDosen(){
		date_default_timezone_set('ASIA/JAKARTA');
		$quis =$this->input->post('quisioner');
		$stts=$this->input->post('status');
		$created_at=$this->input->post('created_up');

		$data = [
			'quisioner'				=>$quis,
			'id_jenis_quisioner'	=>1,
			'status'				=>$stts,
			'created_up'			=>$created_at
		];
		$this->db->set('kd_quisioner','UUID()',FALSE);
		$this->m_backend->inputQuis($data);
		redirect(base_url('backend/quisdosen'));
	}
	

	public function formEditQuisDosen($kd_quis){
		$data['title']="Siakad Politeknik Gorontalo | Update Kuis Dosen";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Kuis Dosen";
		$data['editquis']=$this->m_backend->editQuisDetail($kd_quis);
		$data['jenisquis']=$this->m_backend->getJenis();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/FormEditQuisDosen',$data);
		$this->load->view('template/footer');
	}

	public function fungsiEditQuisDosen($kd_quis){
		$kd_quis=$this->input->post('kd_quisioner');
		$quis =$this->input->post('quisioner');
		$stts =$this->input->post('status');
		$created_at =$this->input->post('created_up');
		$arr=[
			'quisioner'=> $quis,
			'id_jenis_quisioner'=>1,
			'status'=>$stts,
			'created_up'=>$created_at
		];
		$this->db->where('kd_quisioner', $kd_quis);
		$this->db->update('t_quisioner',$arr);
		redirect(base_url('backend/quisdosen'));
	}
	

	
	public function deleteQuisDosen($kd_quis){
		$this->m_backend->deleteQuis($kd_quis);
		redirect(base_url('backend/quisdosen'));
	}

	// ===========================================END QUISIONER================================================

// =============================================BEGIN QUIS MK==================================================

	public function quisMataKuliah()
	{
		$data['title']="Siakad Politeknik Gorontalo | Mata Kuliah";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Kuis Mata Kuliah";
		$data['data']=$this->m_backend->getQuisionerMataKuliah();
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/QuisionerMataKuliah',$data);
        $this->load->view('template/footer');
	}

	public function formInputQuisMk(){
		$data['title']="Siakad Politeknik Gorontalo | Tambah Mata Kuliah";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Kuis Mata Kuliah";
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/FormInputQuisMk');
        $this->load->view('template/footer');
	}

	public function fungsiInputQuisMk(){
		date_default_timezone_set('ASIA/JAKARTA');
		$quis =$this->input->post('quisioner');
		$stts=$this->input->post('status');
		$created_at=$this->input->post('created_up');

		$data = [
			'quisioner'				=>$quis,
			'id_jenis_quisioner'	=>2,
			'status'				=>$stts,
			'created_up'			=>$created_at
		];
		$this->db->set('kd_quisioner','UUID()',FALSE);
		$this->m_backend->inputQuis($data);
		redirect(base_url('backend/quisMataKuliah'));
	}
	public function formEditQuisMk($kd_quis){
		$data['title']="Siakad Politeknik Gorontalo |Quis Update Mata Kuliah";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Update Quis Mata Kuliah";
		$data['editquis']=$this->m_backend->editQuisDetail($kd_quis);
		$data['jenisquis']=$this->m_backend->getJenis();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/FormEditQuisMk',$data);
		$this->load->view('template/footer');
	}
	public function fungsiEditQuisMk($kd_quis){
		$kd_quis=$this->input->post('kd_quisioner');
		$quis =$this->input->post('quisioner');
		$stts =$this->input->post('status');
		$created_at =$this->input->post('created_up');

		$arr=[
			'quisioner'=> $quis,
			'id_jenis_quisioner'=>2,
			'status'=>$stts,
			'created_up'=>$created_at
		];

		$this->db->where('kd_quisioner', $kd_quis);
		$this->db->update('t_quisioner',$arr);

		redirect(base_url('backend/quisMataKuliah'));
	}
	public function deleteQuisMk($kd_quis){
		$this->m_backend->deleteQuis($kd_quis);
		redirect(base_url('backend/quisMataKuliah'));
	}
// ===================================================END QUIS MK=================================================


// ===========================================BEGIN ANS QUISIONER================================================
	
	public function AnswerQuisioner(){
		$data['title']="Siakad Politeknik Gorontalo | Response Mahasiswa";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Response";
		$data['answer']=$this->m_backend->getAnswerQuisioner();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/AnswerQuisioner',$data);
		$this->load->view('template/footer');
	}

	public function deleteAnswerQuis($kd_answer_quis){
		$this->m_backend->deleteAnswerQuis($kd_answer_quis);
		redirect(base_url('backend/hasildosen'));
	}

// ==========================================END ANS QUISIONER=====================================================

// ===========================================BEGIN ANSWER================================================
    public function getAnswer()
	{
		$data['title']="Siakad Politeknik Gorontalo | Options";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Options";
		$data['answer']=$this->m_backend->getAnswer();
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/Answer',$data);
        $this->load->view('template/footer');
	}

	public function formInputAnswer(){
		$data['title']="Siakad Politeknik Gorontalo | Tambah Options";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Options";
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/FormInputAnswer');
        $this->load->view('template/footer');
	}

	public function fungsiInputAnswer(){
		$answer=$this->input->post('answer');
		$data = [
			'answer'=>$answer
		];
		$this->db->set('id_answer');
		$this->m_backend->inputAnswer($data);
		redirect(base_url('backend/getAnswer'));
	}

	public function formEditAnswer($id_answer){
		$data['title']="Siakad Politeknik Gorontalo | Update Options";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Options";
		$data['answer']=$this->m_backend->editAnswer($id_answer);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/FormEditAnswer',$data);
		$this->load->view('template/footer');
	}
	public function fungsiEditAnswer($id_answer){
		$id_answer=$this->input->post('id_answer');
		$answer =$this->input->post('answer');
		$arr=[
			'answer'=> $answer,
		];

		$this->db->where('id_answer', $id_answer);
		$this->db->update('t_answer',$arr);
		redirect(base_url('backend/getAnswer'));
	}

	public function deleteAnswer($kd_quis){
		$this->m_backend->deleteAnswer($kd_quis);
		redirect(base_url('backend/getAnswer'));
	}

// ===========================================END ANSWER==========================================================================


// ===========================================BEGIN MAHASISWA================================================
    public function getJenis()
	{
		$data['title']="Siakad Politeknik Gorontalo | Jenis Quisioner";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Jenis Kuisioner";
		$data['jenis']=$this->m_backend->getJenis();
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/Jenis',$data);
        $this->load->view('template/footer');
	}

	public function formInputjenis_quisioner(){
		$data['title']="Siakad Politeknik Gorontalo | Tambah Jenis Quisioner";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Jenis Kuisioner";
		$this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
		$this->load->view('backend/FormInputJenis');
        $this->load->view('template/footer');
	}

	public function fungsiInputjenis_quisioner(){
		$jenis_quisioner=$this->input->post('jenis_quisioner');
		$data = [
			'jenis_quisioner'=>$jenis_quisioner
		];
		$this->db->set('id_jenis_quisioner');
		$this->m_backend->inputjenis_quisioner($data);
		redirect(base_url('backend/getjenis_quisioner'));
	}

	public function formEditJenis($id_jenis){
		$data['title']="Siakad Politeknik Gorontalo | Update Jenis Quisioner";
		$data['user'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jtable']="Jenis Kuisioner";
		$data['jenis']=$this->m_backend->editJenis($id_jenis);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/FormEditJenis',$data);
		$this->load->view('template/footer');
	}
	public function fungsiEditjenis_quisioner($id_jenis){
		$id_jenis=$this->input->post('id_jenis_quisioner');
		$jenis_quisioner =$this->input->post('jenis_quisioner');
		$arr=[
			'jenis_quisioner'=> $jenis_quisioner,
		];

		$this->db->where('id_jenis_quisioner', $id_jenis);
		$this->db->update('t_jenis_quisioner',$arr);
		redirect(base_url('backend/getjenis_quisioner'));
	}

	public function deleteJenis($id_jenis){
		$this->m_backend->deleteJenis($id_jenis);
		redirect(base_url('backend/getJenis'));
	}

// ===========================================END MAHASISWA==========================================================================

// ========================================HASIL MK==============================================================================
	

// ========================================END HASIL MK========================================================================

// ========================================BEGIN HASIL DOSEN=====================================================================



	public function HasilMk(){
		$data['title']="Diagram Mata Kuliah";
		$data['data']=$this->m_backend->getGrafikQuisMk();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('backend/DiagramMk',$data);
		$this->load->view('template/footer',$data);
		
	}
	
// ========================================END HASIL DOSEN=========================================================================
}