<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();


    is_logged_in();
  }

  public function index()
  {
    $data['title']    = 'Menu Management';

    $data['user'] = $this->db->get_where(
      'user',
      [
        'email' => $this->session->userdata('email')
      ]
    )->row_array();

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been Added !</div>');
      redirect('menu');
    }
  }

  public function subMenu()
  {
    $data['title']    = 'Submenu Management';
    $data['user'] = $this->db->get_where(
      'user',
      [
        'email' => $this->session->userdata('email')
      ]
    )->row_array();

    $data['subMenu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu_id', 'menu', 'required');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('url', 'url', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');

    $this->load->model('Menu_model', 'menu');

    $data['subMenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'menu_id' => $this->input->post('menu_id'),
        'title' => $this->input->post('title'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New subMenu Added !</div>');
      redirect('menu/submenu');
    }
  }


  public function submenu_edit($id)
  {
    $data['subMenu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->result_array();
    $this->load->view('menu/submenu', $data);
  }


  public function active()
  { }
}
