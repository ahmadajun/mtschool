<?php 
class M_ekskul extends CI_Model{

	function get_all_ekskul(){
		$hsl=$this->db->query("SELECT tbl_ekskul.* FROM tbl_ekskul");
		return $hsl;
	}

	function simpan_ekskul($nama,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_ekskul (ekskul_nama,ekskul_photo) VALUES ('$nama','$photo')");
		return $hsl;
	}
	function simpan_ekskul_tanpa_img($nama){
		$hsl=$this->db->query("INSERT INTO tbl_ekskul (ekskul_nama) VALUES ('$nama')");
		return $hsl;
	}

	function update_ekskul($kode,$nama,$photo){
		$hsl=$this->db->query("UPDATE tbl_ekskul SET ekskul_nama='$nama',ekskul_photo='$photo' WHERE ekskul_id='$kode'");
		return $hsl;
	}
	function update_ekskul_tanpa_img($kode,$nama){
		$hsl=$this->db->query("UPDATE tbl_ekskul SET ekskul_nama='$nama' WHERE ekskul_id='$kode'");
		return $hsl;
	}
	function hapus_ekskul($kode){
		$hsl=$this->db->query("DELETE FROM tbl_ekskul WHERE ekskul_id='$kode'");
		return $hsl;
	}

	function ekskul(){
		$hsl=$this->db->query("SELECT tbl_ekskul.* FROM tbl_ekskul ");
		return $hsl;
	}
	function ekskul_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_ekskul.* FROM tbl_ekskul  limit $offset,$limit");
		return $hsl;
	}

}