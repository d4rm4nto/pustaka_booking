<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
//membuat validasi Form
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah','trim|required|min_length[5]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah','required|min_length[5]',[
            'required' => 'Nama Matakuliah Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('sks', 'SKS','required', [
            'required' => '%s wajib diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

            $this->load->view('view-data-matakuliah', $data);
        }
    }
}

