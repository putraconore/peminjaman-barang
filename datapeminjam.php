<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>Unit Kerja</th>
            <th>Nomer Telepon</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <h1 style="color: red;">DATA PEMINJAM</h1>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM datapeminjam"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>    
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah ['unitkerja']; ?></td>
            <td><?php echo $pecah ['telepon']; ?></td>
            <td><?php echo $pecah ['tanggal']; ?></td>
            <td><?php echo $pecah ['deskripsi']; ?></td> 
            <td>
            <a href ="index.php?halaman=hapusdatapeminjam&id=<?php echo $pecah['id_peminjam'];?>
            "class="btn btn-danger">hapus</a>
            <a href ="index.php?halaman=ubahpeminjam&id=<?php echo $pecah['id_peminjam'];?>"class="btn btn-warning">ubah</a>
            <a href ="index.php?halaman=review&id=<?php echo $pecah['id_datapeminjam'];?>"class="btn btn-success">priview</a>
            </td>    
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    
</table>
<!--pagging-->
<a href="index.php?halaman=tambahpeminjam" class="btn btn-primary">Tambah Data</a>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="keranjang.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>