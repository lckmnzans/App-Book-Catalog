<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perpustakaan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {//DONE
        $this->load->view("welcome_perpustakaan");
    }

    public function list()
    {//DONE
        $data["daftarbuku"] = $this->perpustakaan_model->getList();
        $this->load->view("list", $data);
    }
    
    public function find()
    {//DONE
        $this->load->view("find");
    }

    public function search()
    {//DONE
        $kodebuku = $this->input->get("kodebuku");
        if (!empty($kodebuku)) {
            $data["buku"] = $this->perpustakaan_model->getBook($kodebuku);
            $this->load->view("_result", $data);
        } else {
            $this->list();
        }
    }

    public function add()
    {//DONE
        $buku = $this->perpustakaan_model;

        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        if ($validation->run() == FALSE) {
            $this->load->view('insert');
        } else {
            $buku->insertBook();
            redirect('perpustakaan/list');
        }
    }
	
	public function edit($kodebuku)
    {//DONE
        if (!isset($kodebuku)) redirect('perpustakaan/list');

        $buku = $this->perpustakaan_model;

        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        $data['buku'] = $buku->getBook($kodebuku);

        if ($validation->run() === FALSE) {
            $this->load->view('edit', $data);
        } else {
            $buku->editBook($kodebuku);
            redirect('perpustakaan/list');
        }
    }

    public function delete($kodebuku)
    {//DONE
		$buku = $this->perpustakaan_model;
		$buku->deleteBook($kodebuku);
        $this->session->set_flashdata('status', 'Berhasil dihapus');
        redirect('perpustakaan/list');
    }
}
?>