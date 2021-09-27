<?php 

class crud extends Database{

	public function tampil(){
		$data = mysqli_query($this->koneksi, "SELECT * from mahasiswa INNER JOIN kelas ON mahasiswa.kode_kelas = kelas.id_kelas");
	    
	    while ($d = mysqli_fetch_array($data)) {
	      $hasil[] = $d;
	    }
    	
    	return $hasil;
	}

	public function input($nama, $nim, $kode_kelas){
		 mysqli_query($this->koneksi, "INSERT INTO mahasiswa (nama, nim, kode_kelas) VALUE ('$nama', '$nim', '$kode_kelas')");
		}

	public function hapus($id){
		$query = mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
	}

	public function edit($id){
		$query = mysqli_query($this->koneksi,"select * from mahasiswa where id='$id'");
		return $query->fetch_array();
	}

	public function update($id, $nama, $nim, $kode_kelas){
		$query = mysqli_query($this->koneksi,"update mahasiswa set nama='$nama',nim='$nim',kode_kelas='$kode_kelas' where id='$id'");
	}

	public function tampil_kelas(){
		$data = mysqli_query($this->koneksi, "SELECT * from kelas");
	    
	    while ($d = mysqli_fetch_array($data)) {
	      $hasil[] = $d;
	    }
    	
    	return $hasil;
	}


}
