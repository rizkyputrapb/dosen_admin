<?php

defined('BASEPATH') or exit('No direct script access allowed');

class dosen extends CI_Controller
{
    var $KODE = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != "admin") {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->model('dosen_model');
        $data['title'] = 'List Dosen JTI';
        $data['dosen'] = $this->dosen_model->getAllDosen();
        $this->load->view('template/header', $data);
        $this->load->view('dosen/index');
        $this->load->view('template/footer');
    }

    public function editdosen($KODE)
    {
        $data['title'] = 'Form Edit Data Dosen';
        $data['dosen'] = $this->dosen_model->getdosenByKODE($KODE);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('KODE', 'KODE', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/editdosen', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->editdosen();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dosen/index', 'refresh');
        }
    }

    public function detail($KODE)
    {
        $data['title'] = 'Detail Dosen';
        $data['dosen'] = $this->dosen_model->getdosenByKODE($KODE);
        $data['homebase'] = $this->dosen_model->gethomebaseByKODE($KODE);
        $data['teachingrules'] = $this->dosen_model->getteachingrulesbyKODE($KODE);
        $data['jadwal'] = $this->dosen_model->getjadwalkuliahbyKODE($KODE);
        $data['dpa'] = $this->dosen_model->getdpabyKODE($KODE);
        $this->load->view('template/header', $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('template/footer');
    }

    public function editdpa($id)
    {
        $data = array(
            'title' => 'Edit DPA',
            'dpa' => $this->dosen_model->getdpabyID($id),
            'class' => $this->dosen_model->getClass(),
        );
        $this->form_validation->set_rules('dpa_Year', 'Tahun', 'required');
        $this->form_validation->set_rules('dpa_Semester', 'Semester', 'required');
        $this->form_validation->set_rules('cl_ID', 'Kelas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/editdpa', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->editdpa();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dosen/index', 'refresh');
        }
    }

    public function editjadwal($id)
    {
        $data = array(
            'title' => 'Edit Jadwal',
            'jadwal' => $this->dosen_model->getjadwalbyID($id),
            'kurikulum' => $this->dosen_model->getallKurikulum(),
            'class' => $this->dosen_model->getClass(),
        );
        $this->form_validation->set_rules('mk_Code', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('Jam', 'Jam', 'required');
        $this->form_validation->set_rules('cl_ID', 'Kelas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/editjadwal', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->editjadwal();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dosen/index', 'refresh');
        }
    }

    public function DPA($KODE)
    {
        $data = array(
            'title' => 'DPA',
            'dosen' => $this->dosen_model->getdpabyKODE($KODE)
        );
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/DPA', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function jabatan()
    {
        $data = array(
            'title' => 'Data Table Jabatan',
            'jabatan' => $this->dosen_model->getAllJabatan()
        );
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/jabatan', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function research()
    {
        $data = array(
            'title' => 'Data Table Riset',
            'research' => $this->dosen_model->getAllResearchDosen()
        );
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/research', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('template/header', $data);
        $this->load->view('dosen/tambah');
        $this->load->view('template/footer');
    }

    public function hapusjadwal($id)
    {
        $this->dosen_model->hapusjadwal($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('dosen/index', 'refresh');
    }

    public function hapusdpa($id)
    {
        $this->dosen_model->hapusdpa($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('dosen/index', 'refresh');
    }

    public function hapuskontrak($id)
    {
        $this->dosen_model->hapuskontrak($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('dosen/index', 'refresh');
    }

    public function tambahdosen()
    {
        $data['title'] = 'Form Menambahkan Data Dosen';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('KODE', 'KODE', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambahdosen');
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->tambahdatadosen();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dosen/index', 'refresh');
        }
    }

    public function tambahdpa()
    {
        $data['title'] = 'Form Menambahkan Data DPA';
        $data['dosen'] = $this->dosen_model->getDosen();
        $data['kelas'] = $this->dosen_model->getClass();
        $this->form_validation->set_rules('KODE', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('dpa_Year', 'Tahun', 'required');
        $this->form_validation->set_rules('dpa_Semester', 'Semester', 'required');
        $this->form_validation->set_rules('class', 'Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambahdpa', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->tambahdatadpa();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dosen/index', 'refresh');
        }
    }

    public function tambahjabatan()
    {
        $data['title'] = 'Form Menambahkan Data Jabatan Dosen';
        $data['dosen'] = $this->dosen_model->getDosen();
        $data['position'] = $this->dosen_model->getJabatan();
        $this->form_validation->set_rules('KODE', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('pos_ID', 'Jabatan', 'required');
        $this->form_validation->set_rules('jab_Semester', 'Semester', 'required');
        $this->form_validation->set_rules('jab_Year', 'Tahun', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambahjabatan', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->tambahjabatan();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dosen/index', 'refresh');
        }
    }

    public function tambahresearch()
    {
        $data['title'] = 'Form Menambahkan Data Grup Riset';
        $data['dosen'] = $this->dosen_model->getDosen();
        $data['resgroup'] = $this->dosen_model->getResearchGroup();
        $this->form_validation->set_rules('KODE', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('rg_ID', 'Grup Riset', 'required');
        $this->form_validation->set_rules('rs_Priority', 'Prioritas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/tambahresearch', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->tambahresearch();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dosen/index', 'refresh');
        }
    }

    public function edithomebase($KODE)
    {
        $data['title'] = 'Form Edit Data Homebase Dosen';
        $data['dosen'] = $this->dosen_model->getdosenByKODE($KODE);
        $this->form_validation->set_rules('KODE', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('dosen_Homebase', 'Homebase', 'required');
        $this->form_validation->set_rules('dosen_HomebaseAkreD4', 'Homebase Akreditasi D4', 'required');
        $this->form_validation->set_rules('dosen_Akre', 'Dosen Akreditasi', 'required');
        $this->form_validation->set_rules('dosen_Jenjang', 'Dosen Jenjang', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dosen/edithomebase', $data);
            $this->load->view('template/footer');
        } else {
            $this->dosen_model->edithomebase();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dosen/index', 'refresh');
        };
    }

    public function kontrakkuliah()
    {
        $data['title'] = 'Kontrak Kuliah';
        $data['kontrak'] = $this->dosen_model->getkontrakkuliah();
        $data['matkul'] = $this->dosen_model->getallKurikulum();
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/kontrakkuliah', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function rpsfiles()
    {
        $data['title'] = 'File RPS';
        $data['rps'] = $this->dosen_model->getrpsfiles();
        $data['matkul'] = $this->dosen_model->getallKurikulum();
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/rpsfiles', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function sapfiles()
    {
        $data['title'] = 'File SAP';
        $data['sap'] = $this->dosen_model->getsapfiles();
        $data['matkul'] = $this->dosen_model->getallKurikulum();
        $this->load->view('template/header_datalabels_user', $data);
        $this->load->view('dosen/sapfiles', $data);
        $this->load->view('template/footer_datalabels_user');
    }

    public function uploadsap()
    {
        $config['upload_path']          = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\SAP';
        $config['allowed_types']        = 'zip|docx|doc|pdf';
        $config['overwrite'] = TRUE;
        $new_name = $this->input->post('mk_Code') . '-Admin';
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('dosen/sapfiles', $error);
        } else {
            $data['file'] = $this->upload->data("file_name");
            $data['mk_Code'] = $this->input->post('mk_Code');
            $this->db->insert('tb_sapfiles', $data);
            redirect('dosen/sapfiles', 'refresh');
        }
    }

    public function uploadrps()
    {
        $config['upload_path']          = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\RPS';
        $config['allowed_types']        = 'zip|docx|doc|pdf';
        $config['overwrite'] = TRUE;
        $new_name = $this->input->post('mk_Code') . '-Admin';
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('dosen/rpsfiles', $error);
        } else {
            $data['file'] = $this->upload->data("file_name");
            $data['mk_Code'] = $this->input->post('mk_Code');
            $this->db->insert('tb_rpsfiles', $data);
            redirect('dosen/rpsfiles', 'refresh');
        }
    }


    public function uploadkontrak()
    {
        $config['upload_path']          = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\Kontrak';
        $config['allowed_types']        = 'zip|docx|doc|pdf';
        $config['overwrite'] = TRUE;
        $new_name = $this->input->post('mk_Code') . '-Admin';
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('dosen/kontrakkuliah', $error);
        } else {
            $data['file'] = $this->upload->data("file_name");
            $data['mk_Code'] = $this->input->post('mk_Code');
            $data['updated_by'] = 'admin';
            $this->db->insert('tb_kontrakkuliah', $data);
            redirect('dosen/kontrakkuliah', 'refresh');
        }
    }

    function downloadkontrak($id)
    {
        $path = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\Kontrak';
        $data = $this->db->get_where('tb_kontrakkuliah', ['id' => $id])->row();
        force_download($path . '\\' . $data->file, NULL);
    }

    function downloadrps($id)
    {
        $path = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\RPS';
        $data = $this->db->get_where('tb_rpsfiles', ['id' => $id])->row();
        force_download($path . '\\' . $data->file, NULL);
    }

    function downloadsap($id)
    {
        $path = 'C:\xampp\htdocs\laravel-dosen\storage\app\public\docs\SAP';
        $data = $this->db->get_where('tb_sapfiles', ['id' => $id])->row();
        force_download($path . '\\' . $data->file, NULL);
    }
}

/* End of file dosen.php */
