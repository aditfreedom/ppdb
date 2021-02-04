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
}
?>