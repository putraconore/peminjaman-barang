<h2>Barang Gudang</h2>

<table class="table table-bordered">
<thead>
<tr> 
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>NUP</th>
<th>Nilai Awal</th>
<th>Nilai Akhir</th>
<th>aksi</th>
</tr>
</thead>
<tbody>
<?php $nomor=1; ?>
<?php $ambil=$koneksi->query("SELECT * FROM history_inventories"); 
?>
<?php while ($pecah = $ambil->fetch_assoc()){ ?>
<tr>
<td><?php echo $nomor; ?></td>
<td><?php echo $pecah ['kode_barang'];?></td>
<td><?php echo $pecah ['nama_barang']; ?></td>
<td><?php echo $pecah ['nup']; ?></td>
<td><?php echo $pecah ['nilai_awal']; ?></td>
<td><?php echo $pecah ['nilai_akhir']; ?></td>
<td>
      <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian'];?>" 
      class="btn btn-info">detail </a>      
          </td> 
</tr>
<?php $nomor++; ?>
    <?php  } ?>
</tbody>
</table>