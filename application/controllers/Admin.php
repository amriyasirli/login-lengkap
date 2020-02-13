<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent:: __construct();
   
    is_logged_in();
    $this->load->model('User_model');
		$this->load->model('Role_model');
		$this->load->model('Menu_model');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';

    $data['user'] = $this->db->get_where(
      'user',
      [
        'email' => $this->session->userdata('email')
      ]
    )->row_array();
    
    $data['user_count'] = $this->User_model->count_user();
		$data['user_menu'] = $this->Menu_model->count_user_menu();
		$data['user_role'] = $this->Role_model->count_user_role();
		$data['user_sub_menu'] = $this->Menu_model->count_user_sub_menu();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  

  public function role()
  {
    $data['title'] = 'Role';

    $data['user'] = $this->db->get_where(
      'user',
      [
        'email' => $this->session->userdata('email')
      ]
    )->row_array();

    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/role', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role has been Added !</div>');
      redirect('admin/role');
    }
  }


  public function roleaccess($role_id)
  {
    $data['title'] = 'Role Access';

    $data['user'] = $this->db->get_where(
      'user',
      ['email' => $this->session->userdata('email')]
    )->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1); //Pengecualian admin di role access
    $data['menu'] = $this->db->get('user_menu')->result_array();
    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/roleaccess', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role has been Added !</div>');
      redirect('admin/role');
    }
  }


  public function changeaccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Modified !</div>');
  }

  public function gallery(){
    $data['title'] = 'Gallery';

    $data['user'] = $this->db->get_where(
      'user',
      [
        'email' => $this->session->userdata('email')
      ]
    )->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/gallery', $data);
    $this->load->view('templates/footer');
  }
}
