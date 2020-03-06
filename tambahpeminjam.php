<h2 style="color:red;">Tambah Data</h2>
<form method="post" enctype="multipart/form-data">
<div class="form-group">
             <label>nama</label>
             <input type="text" class="form-control" name="nama">
</div>
<div class="form-group">
             <label>Unit Kerja</label>
             <input type="text" class="form-control" name="unitkerja">           
</div>
<div class="form-group">
             <label>Nomer Telepon</label>
             <input type="number" class="form-control" name="telepon">           
</div>
<div class="form-group">
             <label>Tanggal</label>
             <input type="d-m-y" class="form-control" name="tanggal">           
</div>
<div class="form-group">
             <label>Deskripsi</label>
             <textarea class="form-control" name="deskripsi" rows="10"></textarea>           
</div>

<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
 if (isset($_POST['save']))
{ 
    $koneksi->query("INSERT INTO datapeminjam (nama,unitkerja,telepon,tanggal,deskripsi)
    VALUES('$_POST[nama]','$_POST[unitkerja]','$_POST[telepon]','$_POST[tanggal]','$_POST[deskripsi]')");
   
   echo "<div class='alert alert-info'>data tersimpan</div>";
   echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=datapeminjam'>";
}
?>