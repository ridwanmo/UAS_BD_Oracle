<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $tgl_transaksi= $_POST['tgl_transaksi'];
  $id_transaksi= $_POST['id_transaksi'];
  $nama_barang= $_POST['nama_barang'];
  $nama_pembeli= $_POST['nama_pembeli'];

$query = "INSERT INTO TRANSAKSI (TGL_TRANSAKSI,ID_TRANSAKSI,NAMA_BARANG,NAMA_PEMBELI) VALUES ('".$tgl_transaksi."','".$id_transaksi."','".$nama_barang."','".$nama_pembeli."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}