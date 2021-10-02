<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	public function index()
	{
		$this->load->view('view-input-cinema');
	}

    public function cetak() 
    { 
        $jumlah = $this->input->post('jumlah');
        $studio = $this->input->post('studio');
        if ($studio == "Reguler 2D") {
            $harga = 400000;
        } elseif ($studio == "3D") {
            $harga = 800000;
        } else {
            $harga = 100000;
        }

        $total = $jumlah * $harga;

        $data = [
            'nama' => $this->input->post('nama'),
            'judul' => $this->input->post('judul'),
            'pukul' => $this->input->post('pukul'),
            'studio' => $this->input->post('studio'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $harga,
            'total' => $total
        ]; 
        
        $this->load->view('view-output-cinema', $data); 
    }
}
