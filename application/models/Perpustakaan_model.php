<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan_model extends CI_Model {
    private $_table = "buku";

    private $kodebuku;
    private $judulbuku;
    private $pengarang;
    private $penerbit;

    public function rules()
    {
        return [
            ['field' => 'kodebuku'
            ,'label' => 'Kode Buku'
            ,'rules' => 'required'],
            
            ['field' => 'judulbuku'
            ,'label' => 'Judul Buku'
            ,'rules' => 'required'],
            
            ['field' => 'pengarang'
            ,'label' => 'Pengarang'
            ,'rules' => 'required'],

            ['field' => 'penerbit'
            ,'label' => 'Penerbit'
            ,'rules' => 'required'],
        ];
    }

    public function getList()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function getBook($kodebuku)
    {
        return $this->db->get_where($this->_table, ["kodebuku" => $kodebuku])->row();
    }
    
    public function editBook($kodebuku)
    {
        $post = $this->input->post();
        $data = array(
            'kodebuku' => $post['kodebuku'],
            'judulbuku' => $post['judulbuku'],
            'pengarang' => $post['pengarang'],
            'penerbit' => $post['penerbit']
        );
        $this->db->where('kodebuku', $kodebuku);
        $this->db->update($this->_table, $data);
    }

    public function insertBook()
    {
        $query = $this->getBook($this->input->post('kodebuku'));
        if ($query->kodebuku != $this->input->post('kodebuku')){
            $post = $this->input->post();
            $data = array(
                'kodebuku' => $post['kodebuku'],
                'judulbuku' => $post['judulbuku'],
                'pengarang' => $post['pengarang'],
                'penerbit' => $post['penerbit']
            );
            return $this->db->insert($this->_table, $data);
        }
        
    }

    public function deleteBook($kodebuku)
    {
        $this->db->where('kodebuku', $kodebuku);
		$this->db->delete($this->_table);
    }
}
?>