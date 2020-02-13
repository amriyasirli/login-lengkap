<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    is_logged_in();
  }

  public function index()
  {
    $data['title']    = 'My Profil';

    $data['user'] = $this->db->get_where(
      'user',
      ['email' => $this->session->userdata('email')]
    )->row_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');
  }

  public function edit()
  {
    $data['title']    = 'Edit Profil';

    $data['user'] = $this->db->get_where(
      'user',
      ['email' => $this->session->userdata('email')]
    )->row_array();

    $this->form_validation->set_rules('name', 'Full name', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');

      $upload_image = $_FILES['image'];

      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/profil/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];

          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profil/' . $old_image);
          }

          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('name', $name);
      $this->db->where('email', $email);
      $this->db->update('user');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been added !</div>');
      redirect('user');
    }
  }


  public function changepassword()
  {
    $data['title']    = 'Change Password';

    $data['user'] = $this->db->get_where(
      'user',
      ['email' => $this->session->userdata('email')]
    )->row_array();

    $this->form_validation->set_rules(
      'currentpassword',
      'Current Password',
      'required|trim'
    );
    $this->form_validation->set_rules(
      'new_password1',
      'New Password',
      'required|trim|min_length[5]|matches[new_password2]',
      [
        'min_length' => 'Password too short',
        'matches' => 'Password dont match !',
      ]
    );
    $this->form_validation->set_rules(
      'new_password2',
      'New Password',
      'required|trim|min_length[5]|matches[new_password1]',
      [
        'min_length' => 'Password too short',
        'matches' => 'Password dont match !',
      ]
    );

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/changepassword', $data);
      $this->load->view('templates/footer');
    } else {
      $current_password = $this->input->post('currentpassword');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password !</div>');
        redirect('user/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password cannot be as the same !</div>');
          redirect('user/changepassword');
        } else {
          // password sudah OK
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed</div>');
          redirect('user');
        }
      }
    }
  }

  public function count_user(){
		$query = $this->db->get("user");
		return $query->num_rows();
	}
}
