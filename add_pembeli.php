<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_beli = $_POST['id_beli'];
  $tgl_transaksi= $_POST['tgl_transaksi'];
  $total_barang= $_POST['total_barang'];
  $tgl_beli= $_POST['tgl_beli'];
  $total_pembayaran= $_POST['total_pembayaran'];

$query = "INSERT INTO PEMBELI (ID_BELI,TGL_TRANSAKSI,TOTAL_BARANG,TGL_BELI,TOTAL_PEMBAYARAN) VALUES ('".$id_beli."','".$tgl_transaksi."','".$total_barang."','".$tgl_beli."','".$total_pembayaran."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='pembeli.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='pembeli.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembeli.php'); 
}