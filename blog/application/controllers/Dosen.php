<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    // Fungsi : menampilkan seluruh data
    public function index()
    {
        $this->load->model('dosen_model', 'dsn');
        $this->dsn->id = 23;
        $this->dsn->nidn = '0325594';
        $this->dsn->nama = 'Sirojul Munir';
        $this->dsn->gender = 'L';
        $this->dsn->pendidikan = 'S2 Pemrograman Web';
        $list_dsn = [$this->dsn];
        $data['list_dsn'] = $list_dsn;

        //  $this->load->view('header');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        //  $this->load->view('footer');
    }

    public function create(){
        $data["Judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
    }

    public function save(){
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->id = $this->input->post('id');
        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/sidebar');
    }
}
