<!DOCTYPE html>
<?php
include 'koneksi.php';


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Pembelian.xls");
?>
<html>

<head>
	<title>Cetak Data</title>
</head>
<body>
<h3><center>Laporan Pembelian</h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laporan</h4>
                  <p class="card-category">===================</p>
                  <p class="card-category">Data Pembelian warkop</p>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          NO
                        </th>
                        <th>
                          ID PEMBELI
                        </th>
                        <th>
                          NAMA PEMBELI
                        </th>
                        <th>
                          NAMA BARANG
                        </th>
                        <th>
                          TGL_TRANSAKSI
                        </th>
                      </thead>
                      <tbody>
                        <?php 
    include 'koneksi.php';
    $stid = oci_parse($con, 'SELECT * from laporan');
    $no = 1;
    oci_execute($stid);

    while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
      ?>
                        <tr>
                          <td>
                          <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $d['ID_PEMBELI']; ?>
                          </td>
                          <td>
                            <?php echo $d['NAMA_PEMBELI']; ?>
                          </td>                          
                          <td>
                            <?php echo $d['NAMA_BARANG']; ?>
                          </td>
                          <td>
                            <?php echo $d['TGL_TRANSAKSI']; ?>
                          </td>                  
                      </tr>                                         
                    </tbody>
					 <?php
						$no++;
						}
						
					?>
                  </table>
                </div>
              </div>
            </div>
          </div>
 <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
               
                <div class="card-body">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                
                <div class="card-body">
                 <center>Bekasi, 25 Januari 2022 </center>
							<b><center>Manager Warung Kopi</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center> MO RIDWAN </b></center>
                </div>
              </div>
            </div>
	
 

 
</body>
</html>