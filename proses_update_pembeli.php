<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_beli = $_POST['id_beli'];
  $tgl_transaksi = $_POST['tgl_transaksi'];
  $total_barang = $_POST['total_barang'];
  $tgl_beli = $_POST['tgl_beli'];
  $total_pembayaran = $_POST['total_pembayaran'];


 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  pembeli  SET  TGL_TRANSAKSI ='".$tgl_transaksi."', TOTAL_BARANG  = '".$total_barang."', TGL_BELI  = '".$tgl_beli."', TOTAL_PEMBAYARAN  = '".$total_pembayaran."' WHERE ID_BELI ='".$id_beli."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='pembeli.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='pembeli.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembeli.php'); 
}