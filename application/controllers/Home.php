<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Index Page for this controller.
 * @author : Santo Saputro
 */

class Home extends CI_Controller {

  // index page
  public function index()
	{
    $data['content']  = 'content/home/home';
		$this->load->view('theme/home', $data);
	}

  // contact
  public function contact()
	{
    $query = $this->mymodel->getContact();
    foreach ($query->result() as $row) {
      $data['contact'] = $row->contact;
    }
    $data['content']  = 'content/home/contact';
		$this->load->view('theme/home', $data);
	}

  // contact
  public function aboutUs()
	{
    $query = $this->mymodel->getVisi_misi();
    foreach ($query->result() as $row) {
      $data['visi'] = $row->visi_misi;
    }
    $data['content']  = 'content/home/aboutUs';
		$this->load->view('theme/home', $data);
	}
}
