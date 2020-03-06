<h2>Master Barang</h2>

<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>aksi</th>
</tr>
</thead>
<tbody>
<?php $nomor=1; ?>
<?php $ambil=$koneksi->query("SELECT * FROM barangs"); ?>
<?php while ($pecah = $ambil->fetch_assoc()){ ?>
<tr>
<td><?php echo $nomor; ?></td>
<td><?php echo $pecah ['kode_barang']; ?></td>
<td><?php echo $pecah ['nama_barang']; ?></td>
<td>
      <a href="" class="btn btn-success">detail </a>    
          </td>
</tr>
<?php $nomor++; ?>
    <?php  } ?>
</tbody>
</table>