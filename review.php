<style type="text/css">
    body{
        font-family: sans-serif;
    }
    table{
        margin: 20px auto;
        border-collapse: collapse;
    }
    table th,
    table td{
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }
    a{
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Keranjang Belanja.xls");
?>

<?php
session_start();


$koneksi= new mysqli ("localhost","root","","trainittoko1");
?> 
<!DOCTYPE html>
<html>
   <head>
        <title>keranjang belanja</title>
        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
   </head>
   <body>
   
<!--navbar-->

<section class="konten">
       <div class="container">
          <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Subharga</th>
               </tr>
            </thead>
            <tbody> 
               <?php $nomor=1; ?>
               <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
               <!--menampilkan produk yang sedang diperulangkan berdasarakan id_produk-->
               <?php
               $ambil = $koneksi->query ("SELECT * FROM produk WHERE id_produk ='$id_produk'");
               $pecah = $ambil->fetch_assoc();
               $subharga = $pecah["harga_produk"]*$jumlah;
               ?>
               <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah ['nama_produk'];?></td>
                  <td>Rp.<?php echo number_format($pecah["harga_produk"]);?></td>
                  <td><?php echo $jumlah; ?></td>
                  <td>Rp.<?php echo number_format($subharga);?></td>
               </tr>
               <?php $nomor++; ?>
               <?php endforeach?>
            </tbody>
          </table>
       </div>       
</section>
   </body>
</html>