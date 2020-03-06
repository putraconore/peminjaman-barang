<h2>Ubah Produk</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM datapeminjam WHERE id_peminjam='$_GET[id]'");
$pecah = $ambil->fetch_assoc(); 

echo "<pre>";
print_r($pecah);
echo"</pre>";
?>

<form method="post" enctype="multipart/form-data">
<div class="form-group"> 
<label>Nama Peminjam</label>
<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama'];?>">
</div>
<div class="form-group">
<label>Unit Kerja</label>
<input type="text" class="form-control" name="unitkerja" value="<?php echo $pecah['unitkerja'];?>">
</div>
<div class="form-group">
<label>Nomer Telepon</label>
<input type="number" class="form-control" name="telepon" value="<?php echo $pecah['telepon'];?>">
</div>
<div class="form-group">
<label>Tanggal</label>
<input type="text" class="form-control" name="tanggal" value="<?php echo $pecah['tanggal'];?>">
</div>
<div class="group">
<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control" rows="10"> <?php echo $pecah['deskripsi'];?>
</textarea>
</div>
<button class ="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
//jika ada tombol ubah maka.. 
if (isset($_POST['ubah']))
{

{  $koneksi->query("UPDATE datapeminjam SET nama='$_POST[nama]',unitkerja='$_POST[unitkerja]',
    telepon='$_POST[telepon]',tanggal='$_POST[tanggal]',deskripsi='$_POST[deskripsi]' WHERE id_peminjam='$_GET[id]'"); } 

    echo"<script>alert('data produk telah diubah');</script>";
    echo "<script>location='index.php?halaman=datapeminjam';</script>";
}
?>  