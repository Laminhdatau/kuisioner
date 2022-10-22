<?php 

class Auth extends CI_Controller{


 public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('backend');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('template/header', $data);
            $this->load->view('auth');
        } else {
            // validasinya success
            $this->_login();
        }
    }


    private function _login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('t_user', ['username' => $user])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($pass, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 4) {
                        redirect('backend');
                    } else {
                        redirect('quisioner');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

function logout(){
    $this->session->sess_destroy();
    redirect(base_url('auth'));
}

  public function blocked()
    {
        $this->load->view('blocked');
    }

}