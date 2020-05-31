<?php

defined('BASEPATH') or exit('No direct script access allowed');

class dosen_model extends CI_Model
{

    public function getAllDosen()
    {
        $query = $this->db->get('tb_dosen');
        return $query->result_array();
    }

    public function getDosen()
    {
        $query = $this->db->get('tb_dosen');
        return $query->result();
    }

    public function getClass()
    {
        $query = $this->db->get('tb_class');
        return $query->result();
    }

    public function getdpabyID($id)
    {
        return $this->db->get_where('tb_dpa', ['id' => $id])->row_array();
    }

    public function getjadwalbyID($id)
    {
        return $this->db->get_where('tb_jadwalkuliah', ['id' => $id])->row_array();
    }

    public function getallKurikulum()
    {
        return $this->db->get('tb_kurikulum')->result();
    }

    public function getdosenByKODE($KODE)
    {
        return $this->db->get_where('tb_dosen', ['KODE' => $KODE])->row_array();
    }

    public function getdpabyKODE($KODE)
    {
        return $this->db->get_where("tb_dpa", ['dosen_Code' => $KODE])->result();
    }

    public function gethomebaseByKODE($KODE)
    {
        return $this->db->get_where("tb_homebase", ['dosen_Code' => $KODE])->row_array();
    }

    public function getteachingrulesbyKODE($KODE)
    {
        return $this->db->get_where("tb_teachingrules", ['dosen_Code' => $KODE])->row_array();
    }

    public function getjadwalkuliahbyKODE($KODE)
    {
        $query = $this->db->query("SELECT jk.id, jk.dosen_Code, jk.cl_ID, kul.mk_Name, jk.Jam 
        FROM tb_jadwalkuliah jk 
        JOIN tb_kurikulum kul ON kul.mk_Code = jk.mk_Code WHERE jk.dosen_Code = '" . $KODE . "'");
        return $query->result();
    }

    public function getkontrakkuliah()
    {
        return $this->db->get('tb_kontrakkuliah')->result();
    }

    public function getAllJabatan()
    {
        $query = $this->db->query("SELECT dos.Nama, pos.pos_Name, jab.jab_Year, jab.jab_Semester 
        FROM tb_jabatan jab 
        JOIN tb_dosen dos ON dos.KODE = jab.dosen_Code 
        JOIN tb_position pos ON pos.pos_ID = jab.pos_ID");
        return $query->result();
    }

    public function getAllResearchDosen()
    {
        $query = $this->db->query("SELECT dos.Nama, rg.rg_Field, res.rs_Priority FROM tb_researcher res
        JOIN tb_dosen dos ON dos.KODE = res.dosen_Code 
        JOIN tb_resgroup rg ON rg.rg_ID = res.rg_ID");
        return $query->result();
    }

    public function getJabatan()
    {
        $query = $this->db->get('tb_position');
        return $query->result();
    }

    public function getResearchGroup()
    {
        $query = $this->db->get('tb_resgroup');
        return $query->result();
    }

    public function getrpsfiles()
    {
        return $this->db->get('tb_rpsfiles')->result();
    }

    public function getsapfiles()
    {
        return $this->db->get('tb_sapfiles')->result();
    }

    public function tambahdatadosen()
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "NIP" => $this->input->post('NIP', true),
            "NIDN" => $this->input->post('NIDN', true),
            "KODE" => $this->input->post('KODE', true),
            "Status" => $this->input->post('status', true),
            "Matkul" => $this->input->post('matkul', true),
            "noTelp" => $this->input->post('noTelp', true)
        ];
        $this->db->insert('tb_dosen', $data);
    }

    public function tambahdatadpa()
    {
        $data = [
            "dosen_Code" => $this->input->post('KODE', true),
            "dpa_Year" => $this->input->post('dpa_Year', true),
            "dpa_Semester" => $this->input->post('dpa_Semester', true),
            "cl_ID" => $this->input->post('class', true)
        ];
        $this->db->insert('tb_dpa', $data);
    }

    public function tambahjabatan()
    {
        $data = [
            "dosen_Code" => $this->input->post('KODE', true),
            "pos_ID" => $this->input->post('pos_ID', true),
            "jab_Semester" => $this->input->post('jab_Semester', true),
            "jab_Year" => $this->input->post('jab_Year', true)
        ];
        $this->db->insert('tb_jabatan', $data);
    }

    public function hapusdpa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_dpa');
    }

    public function hapusjadwal($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_jadwalkuliah');
    }

    public function hapuskontrak($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kontrakkuliah');
    }

    public function tambahresearch()
    {
        $data = [
            "dosen_Code" => $this->input->post('KODE', true),
            "rg_ID" => $this->input->post('rg_ID', true),
            "rs_Priority" => $this->input->post('rs_Priority', true)
        ];
        $this->db->insert('tb_researcher', $data);
    }

    public function edithomebase()
    {
        $data = [
            "dosen_Homebase" => $this->input->post('dosen_Homebase', true),
            "dosen_HomebaseAkreD4" => $this->input->post('dosen_HomebaseAkreD4', true),
            "dosen_Akre" => $this->input->post('dosen_Akre', true),
            "dosen_Jenjang" => $this->input->post('dosen_Jenjang', true)
        ];
        $this->db->where('dosen_Code', $this->input->post('KODE'));
        $this->db->update('tb_homebase', $data);
    }

    public function editdpa()
    {
        $data = [
            "cl_ID" => $this->input->post('cl_ID', true),
            "dpa_Year" => $this->input->post('dpa_Year', true),
            "dpa_Semester" => $this->input->post('dpa_Semester', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_dpa', $data);
    }

    public function editjadwal()
    {
        $data = [
            "cl_ID" => $this->input->post('cl_ID', true),
            "mk_Code" => $this->input->post('mk_Code', true),
            "Jam" => $this->input->post('Jam', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_jadwalkuliah', $data);
    }

    public function editdosen()
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "NIP" => $this->input->post('NIP', true),
            "NIDN" => $this->input->post('NIDN', true),
            "Status" => $this->input->post('status', true),
            "Matkul" => $this->input->post('matkul', true),
            "noTelp" => $this->input->post('noTelp', true)
        ];
        $this->db->where('KODE', $this->input->post('KODE'));
        $this->db->update('tb_dosen', $data);
    }
}

/* End of file dosen_model.php */
