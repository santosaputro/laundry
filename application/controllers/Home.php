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
    $data['paket']    = $this->mymodel->getPaket()->result();
    $data['content']  = 'content/home/home';
    // $data['paket1']   = $this->mymodel->getPaket1()->result();
    // $data['paket2']   = $this->mymodel->getPaket2()->result();
    // $data['paket3']   = $this->mymodel->getPaket3()->result();
    // $data['paket4']   = $this->mymodel->getPaket4()->result();

    foreach ($this->mymodel->getPaket1()->result() as $row) {
      $data['id1']    = $row->id_paket;
      $data['harga1'] = $row->harga;
      $data['nama1']  = $row->nama_paket;
    }
    foreach ($this->mymodel->getPaket2()->result() as $row) {
      $data['id2']    = $row->id_paket;
      $data['harga2'] = $row->harga;
      $data['nama2']  = $row->nama_paket;
    }
    foreach ($this->mymodel->getPaket3()->result() as $row) {
      $data['id3']    = $row->id_paket;
      $data['harga3'] = $row->harga;
      $data['nama3']  = $row->nama_paket;
    }
    foreach ($this->mymodel->getPaket4()->result() as $row) {
      $data['id4']    = $row->id_paket;
      $data['harga4'] = $row->harga;
      $data['nama4']  = $row->nama_paket;
    }


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
