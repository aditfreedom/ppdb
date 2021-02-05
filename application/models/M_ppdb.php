<?php

class M_ppdb extends CI_Model{

    public function tampil_data_kuota(){
        return $this->db->get('kuota');
     }

    public function tambahkuota($data)
    {
        $this->db->insert('kuota',$data);
    }

    public function hapuskuota($id)
    {   
        $this->db->delete('kuota',$id);  
    }
    public function editkuota($id)
    {
        return $this->db->get_where('kuota',$id);  
    }

    public function updatekuota($where,$data)
    {   $this->db->where($where);
        $this->db->update('kuota',$data); 
    }

    public function tambahuser($data)
    {
        $this->db->insert('pengguna', $data);
    }

    public function tampil_approval(){
        $query = $this->db->query("SELECT * from pengguna where approve_formulir = 'Antrian' OR approve_formulir = 'Diterima' OR approve_formulir = 'Ditolak'");
        return $query;
    }

    public function tampil_lulus(){
        $query = $this->db->query("SELECT * from pengguna where (approve_lulus = 'Antrian' OR approve_lulus = 'Lulus' OR approve_lulus = 'Tidak Lulus') AND approve_formulir = 'Diterima' ");
        return $query;
    }

    public function tampilpengguna($id)
    {
        return $this->db->get_where('pengguna',$id);  
    }
   
    public function updateformulir($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }

    public function updatelulus($where,$data)
    {   $this->db->where($where);
        $this->db->update('pengguna',$data); 
    }
}
?>