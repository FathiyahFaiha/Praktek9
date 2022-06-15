<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
 public function index()
 {
     
 $this->load->model('matakuliah_model', 'matakuliah');
 $this->matakuliah->nama='JK, PPKN, BD, BING, KE, PW, UIUX, ST';
 $this->matakuliah->sks='21';
 $this->matakuliah->kode='21';
 $list_matakuliah = [$this->matakuliah];
 $data['list_matakuliah']=$list_matakuliah;

 //$this->load->view('header');
        $this->load->view('matakuliah/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('matakuliah/footer');
 //$this->load->view('footer');
 }

 public function create(){
       $data["Judul"] = "Form Kelola Matakuliah";
       $this->load->view('layout/header');
       $this->load->view('mahasiswa/create', $data);
       $this->load->view('layout/footer');
       $this->load->view('layout/sidebar');
   }

   public function save(){
       $this->load->model('matakuliah_model', 'matakuliah');

       $this->dsn->nama = $this->input->post('nama');
       $this->dsn->sks = $this->input->post('sks');
       $this->dsn->kode = $this->input->post('kode');

       $data['matakuliah'] = $this->matakuliah;
       $this->load->view('layout/header');
       $this->load->view('mahasiswa/view', $data);
       $this->load->view('layout/footer');
       $this->load->view('layout/sidebar');
   }
}
