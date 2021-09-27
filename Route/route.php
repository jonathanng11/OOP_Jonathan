<?php
require_once '../Config/koneksi.php';
require_once '../App/classSiswa.php';

$koneksi = new crud();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$koneksi->input($_POST['nama'],$_POST['nim'],$_POST['kode_kelas']);
 	header("Location: ../tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$koneksi->hapus($_GET['id']);
	header("Location: ../tampil.php");
 }elseif($aksi == "update"){
 	$koneksi->update($_POST['id'],$_POST['nama'],$_POST['nim'],$_POST['kode_kelas']);
 	// $edit = [
 	// 	$_POST['nama'],$_POST['nim'],$_POST['kode_kelas']
 	// ];

 	// var_dump($edit);
 	header("Location: ../tampil.php");
 }
 ?>