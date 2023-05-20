<?php

class Data_Model extends CI_Model
{
    protected $table,$arrayData,$where;

    public function dataget($table)
    {
        return $this->db->get($table);
    }

    public function datainsert($table,$arrayData)
    {
        return $this->db->insert($table,$arrayData);
    }

    public function dataupdate($table,$arrayData,$where)
    {
        $this->db->set($arrayData);
        $this->db->where($where);
        return $this->db->update($table,$arrayData);
    }

    public function datadelete($table,$where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function data_count_all($table)
    {
        return $this->db->count_all($table);
    }

    //Model tambahan untuk sistem lainnya

    public function data_login_row($username,$password)
    {
        $this->db->where('id_profil.username',$username);
        $this->db->where('id_profil.password',$password);
        $this->db->from('id_profil');
        $this->db->join('loginuser', 'loginuser.uid = id_profil.uid');
        return $this->db->get();
        // return $this->db->query("SELECT *from id_profil INNER JOIN loginuser ON id_profil.uid = loginuser.uid where id_profil.username = '$username' and id_profil.password = '$password'");

    }

    public function autoDeletion()
    {
        $lama = 6; 
		$auto_deletion =$this->db->query( "DELETE FROM notifikasi WHERE DATEDIFF(DATE(NOW()), notifikasi_tanggal) > $lama");

        return $auto_deletion;
    }

    public function buatAbsens()
    {
        $tanggal = date('Y-m-d');
        $jam = date('H:i:s');
        $this->db->query("DROP TABLE IF EXISTS buatabsen");

        $this->db->query("CREATE TABLE buatabsen( tanggal VARCHAR(50) NOT NULL, jam VARCHAR(50) NOT NULL)");

        $arrayData = array(
            'tanggal' => $tanggal,
            'jam' => $jam
        );
        $this->datainsert('buatabsen',$arrayData);
    }

    public function buatChangelog($arrayData)
    {
        $this->db->query("DROP TABLE IF EXISTS changelog");
        $this->db->query("CREATE TABLE changelog(versi VARCHAR(10) NOT NULL,tanggal DATE NOT NULL, new TEXT NOT NULL)");
        
        $arrayUpdate = array(
            'changelog_view' => 0,
        );

        $where = array('changelog_view'=> 1);
        $this->dataupdate('loginuser',$arrayUpdate,$where);

        $this->datainsert('changelog',$arrayData);
    }
}

?>