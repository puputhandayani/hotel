<div class="card">
              <div class="card-header">
                <font size="6">Data Reservasi</font>
              </div>
    
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th style="width: 10px">No</th>
                    <th>Nama Pemesan</th>
                    <th>No. Handphone</th>
                    <th>Email</th>
                    <th>Nama Tamu</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Jumlah Kamar</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php  
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM pemesanan ORDER BY pemesanan.id_pemesanan DESC");
                    while($row = mysqli_fetch_array($query)){ 
                    ?>
                    <?php $status = 1; ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_pemesan'] ?></td>
                    <td><?php echo $row ['nomor_hp'] ?></td>
                    <td><?php echo $row ['email'] ?></td>
                    <td><?php echo $row ['nama_tamu'] ?></td>
                    <td><?php echo $row ['tipe_kamar'] ?></td>
                    <td><?php echo $row ['cekin'] ?></td>
                    <td><?php echo $row ['cekout'] ?></td>
                    <td><?php echo $row ['jumlah'] ?></td>
        
                    <td>
                        
                          <?php
                          if ($row['status'] == 1) { ?>
                            <span class="badge bg-danger">Belum dibayar</span>
                          <?php } else { ?>
                            <span class="badge bg-primary">Sudah dibayar</span>
                          <?php } ?>
                        </td>
                        <td>
                          <form action="aksi_konfirmasi.php" method="POST">
                            <input type="hidden" name="id_pemesanan" value="<?php echo $row['id_pemesanan']; ?>">
                            <input type="hidden" name="status" value="2">
                            <button class="btn btn-sm btn-success">Konfirmasi</button>
                          </form>
                        </td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>