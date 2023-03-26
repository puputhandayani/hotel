<div class="card">
              <div class="card-header">
              <font size="6">Data Kamar</font>
                <div class="col-sm-12">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="tambahkamar.php">Tambah Kamar</a></li>
                  </ol>
                </div>
              </div>
    
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Kamar</th>
                    <th>Fasilitas Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Gambar Kamar</th>
                    <th>Pilih</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM kamar");
                    while($row = mysqli_fetch_array($query)){ 
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_kamar'] ?></td>
                    <td><?php echo $row ['fasilitas_kamar'] ?></td>
                    <td><?php echo $row ['jumlah_kasur'] ?></td>
                    <td><img src="../img/<?php echo $row["gambar_kamar"]; ?>" width = 200 title="<?php echo $row['gambar_kamar']; ?>"></td>
                    <td>
                      <a href="edit_kamar.php?id=<?php echo $row['id_kamar'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="hapus_kamar.php?id=<?php echo $row['id_kamar'] ?>" class="btn btn-sm btn-danger">HAPUS</a></td>
                  </tr>
                  <?php } ?>
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>