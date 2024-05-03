<?php
defined('BASEPATH') or exit ('no direct script access allowed');
    class web extends CI_Controller
    {

        function __construct()
        {
        parent::__construct();
        }
        
        public function index()
        {
            $data['judul'] = "Halaman Depan";
            $this->load->view('v_header', $data);
            $this->load->view('v_index', $data);
            $this->load->view('v_footer', $data);
        }

        public function about()
        {
            $data['judul'] = "Halaman About";
            $this->load->view('v_header', $data);
            $this->load->view('v_about', $data);
            $this->load->view('v_footer', $data);
        }

        public function form()
        {
            $data[''] = "";
            $this->load->view('v_header', $data);
            $this->load->view('v_form_matakuliah', $data);
            $this->load->view('v_footer', $data);
        }

        public function cetak()
        {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
    
            $this->load->view('v_header', $data);
            $this->load->view('v_data_matakuliah', $data);
            $this->load->view('v_footer', $data);   
        }
    }
?>