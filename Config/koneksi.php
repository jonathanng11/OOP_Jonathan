<?php 
/**
 * 
 */
class Database

{
		private $host = "localhost";
		private $username = "root";
		private $password = "";
		private $db = "data_mhs";
		protected $koneksi;
		public function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
		if (mysqli_connect_errno()) {
					echo "koneksi database gagal : ". mysqli_connect_error();
				}		
	}
}

 ?>