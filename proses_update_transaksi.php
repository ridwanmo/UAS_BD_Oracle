<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
$tgl_transaksi= $_POST['tgl_transaksi'];
$id_transaksi= $_POST['id_transaksi'];
$nama_barang= $_POST['nama_barang'];
$nama_pembeli= $_POST['nama_pembeli'];
  

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  transaksi  SET  TGL_TRANSAKSI = '".$tgl_transaksi."', NAMA_BARANG  = '".$nama_barang."', NAMA_PEMBELI  = '".$nama_pembeli."' WHERE ID_TRANSAKSI ='".$id_transaksi."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='transaksi.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}