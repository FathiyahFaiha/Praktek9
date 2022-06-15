<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model
        $this->load->model('mahasiswa_model', 'mhs1');

        // Class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = "0110121179";
        $this->mhs1->nama = "Fathiyah Faiha Adwa";
        $this->mhs1->gender = "P";
        $this->mhs1->ipk = 3.65;

        $this->load->model('mahasiswa_model', 'mhs2');

        $this->mhs2->id = 1;
        $this->mhs2->nim = "0110121177";
        $this->mhs2->nama = "Lestari";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk = 3.55;

        //Simpan Objek ke dalam Array
        $list_mhs = [$this->mhs1, $this->mhs2];

        //Siap data untuk dikirim
        $data["list_mhs"] = $list_mhs;

        //Untuk mengirim data
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/footer');
    }

    public function create(){
        $data["Judul"] = "Form Kelola Mahasiswa";
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/create', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
    }

    public function save(){
        $this->load->model('mahasiswa_model', 'mhs1');

        $this->dsn->id = $this->input->post('id');
        $this->dsn->nim = $this->input->post('nim');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->gender = $this->input->post('tmp_lahir');
        $this->dsn->gender = $this->input->post('tgl_lahir');
        $this->dsn->ipk = $this->input->post('ipk');

        $data['mhs1'] = $this->mhs1;
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
    }
}
