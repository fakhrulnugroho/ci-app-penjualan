<?php

class Toko extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_toko', 'm_toko');
		$this->data['aktif'] = 'toko';
	}

	public function index(){
		$this->data['title'] = 'Profil Toko';
		$this->data['toko'] = $this->m_toko->lihat();
		$this->load->view('toko', $this->data);
	}

	public function proses_ubah(){
		$data = [
			'nama_toko' => $this->input->post('nama_toko'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat'),
		];

		if($this->m_toko->ubah($data)){
			$this->session->set_flashdata('success', 'Profil Toko <strong>Berhasil</strong> Diubah!');
			redirect('toko');
		} else {
			$this->session->set_flashdata('error', 'Profil Toko <strong>Gagal</strong> Diubah!');
			redirect('toko');
		}
	}
}