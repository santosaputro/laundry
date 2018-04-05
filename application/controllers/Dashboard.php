<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * Author 	: Santo Saputro
	 * URI 		: https://psycodev.com
	 * copyright 2017 psycodev
	 *
	 */

  	function __construct() {
    	parent::__construct();
      if($this->session->userdata('status') != "login"){
  			redirect('user/protect');
  		}
    }

    public function index() {
        $data['content']  = 'content/dashboard/dashboard';
        $data['menu1']    = 'active';   //dashboard
        $data['menu2']    = '';         //price range
        $data['menu3']    = '';         //visi-misi
        $data['menu4']    = '';         //contact
        $data['menu5']    = '';         //users

        $this->load->view('theme/dashboard', $data);
    }

    // Users
    // show
    public function users() {
      $data['content']  = 'content/dashboard/users';
      $data['menu1']    = '';
      $data['menu2']    = '';
      $data['menu3']    = '';
      $data['menu4']    = '';
      $data['menu5']    = 'active';
      $data['user']     = $this->mymodel->getUser()->result();

      $this->load->view('theme/dashboard', $data);
    }

    // add - update
    public function addUpdateUser() {
      $data['content']  = 'content/dashboard/form-user';
      $data['menu1']    = '';
      $data['menu2']    = '';
      $data['menu3']    = '';
      $data['menu4']    = '';
      $data['menu5']    = 'active';

      $key	= $this->uri->segment(3);
  		$query	= $this->mymodel->getWhereUser($key);

  		if($query->num_rows()>0) {
  			foreach ($query->result() as $row) {
  				$data['id_user']   = $row->id_user;
  				$data['name']      = $row->name;
  				$data['username']  = $row->username;
  				$data['password']  = $row->password;
  			}

  		} else {
        $data['id_user']   = '';
        $data['name']      = '';
        $data['username']  = '';
        $data['password']  = '';
  		}

      $this->load->view('theme/dashboard', $data);
    }

    // Save
    public function saveUsers()
  	{
      $data = array(
        'name'      => $this->input->post('name'),
        'username'  => $this->input->post('username'),
        'password'  => md5($this->input->post('password'))
      );

      $key    = $this->input->post('id_user');
  		$query  = $this->mymodel->getWhereUser($key);

      if ($query->num_rows()>0) {
        $this->mymodel->updateUser($key,$data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      } else {
        $this->mymodel->addUser($data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
      }
      redirect('dashboard/users');
    }

    // Delete
  	public function deleteUser() {

  		$key    = $this->uri->segment(3);
  		$query  = $this->mymodel->getWhereUser($key);
  		if($query->num_rows()>0)
  		{
  			$this->mymodel->deleteUser($key);
        $this->session->set_flashdata('info','<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>');
  		}
  		redirect('dashboard/users');
  	}

    // Visi-Misi
    // show
    public function visi_misi() {
      $data['content']    = 'content/dashboard/visi-misi';
      $data['menu1']      = '';
      $data['menu2']      = '';
      $data['menu3']      = 'active';
      $data['menu4']      = '';
      $data['menu5']      = '';
      $data['visi_misi']  = $this->mymodel->getVisi_misi()->result();

      $this->load->view('theme/dashboard', $data);
    }

    // add - update
    public function addUpdateVisi_misi() {
      $data['content']  = 'content/dashboard/form-visi-misi';
      $data['menu1']    = '';
      $data['menu2']    = '';
      $data['menu3']    = 'active';
      $data['menu4']    = '';
      $data['menu5']    = '';

      $key	= $this->uri->segment(3);
  		$query	= $this->mymodel->getWhereVisi_misi($key);

  		if($query->num_rows()>0) {
  			foreach ($query->result() as $row) {
  				$data['id_visi_misi']   = $row->id_visi_misi;
  				$data['visi_misi']      = $row->visi_misi;
  				$data['author']         = $row->author;
  				$data['last_update']    = $row->last_update;
  			}

  		} else {
        $data['id_visi_misi']   = '';
        $data['visi_misi']      = '';
        $data['author']         = '';
        $data['last_update']    = '';
  		}

      $this->load->view('theme/dashboard', $data);
    }

    // Save
    public function saveVisi_misi()
  	{
      $data = array(
        'visi_misi'   => $this->input->post('visi_misi'),
        'author'      => $this->input->post('author')
      );

      $key    = $this->input->post('id_visi_misi');
  		$query  = $this->mymodel->getWhereVisi_misi($key);

      if ($query->num_rows()>0) {
        $this->mymodel->updateVisi_misi($key,$data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      }
      redirect('dashboard/visi_misi');
    }

    // Contact
    // show
    public function contact() {
      $data['content']    = 'content/dashboard/contact';
      $data['menu1']      = '';
      $data['menu2']      = '';
      $data['menu3']      = '';
      $data['menu4']      = 'active';
      $data['menu5']      = '';
      $data['contact']  = $this->mymodel->getContact()->result();

      $this->load->view('theme/dashboard', $data);
    }

    // add - update
    public function addUpdateContact() {
      $data['content']  = 'content/dashboard/form-contact';
      $data['menu1']    = '';
      $data['menu2']    = '';
      $data['menu3']    = '';
      $data['menu4']    = 'active';
      $data['menu5']    = '';

      $key	= $this->uri->segment(3);
  		$query	= $this->mymodel->getWhereContact($key);

  		if($query->num_rows()>0) {
  			foreach ($query->result() as $row) {
  				$data['id_contact']     = $row->id_contact;
  				$data['contact']        = $row->contact;
  				$data['author']         = $row->author;
  				$data['last_update']    = $row->last_update;
  			}

  		} else {
        $data['id_contact']   = '';
        $data['contact']      = '';
        $data['author']         = '';
        $data['last_update']    = '';
  		}

      $this->load->view('theme/dashboard', $data);
    }

    // Save
    public function saveContact()
  	{
      $data = array(
        'contact'     => $this->input->post('contact'),
        'author'      => $this->input->post('author')
      );

      $key    = $this->input->post('id_contact');
  		$query  = $this->mymodel->getWhereContact($key);

      if ($query->num_rows()>0) {
        $this->mymodel->updateContact($key,$data);
        $this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      }
      redirect('dashboard/contact');
    }
}
