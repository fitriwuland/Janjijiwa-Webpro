<div style=" width:850px; margin:0 auto;">
<center><h2 style=" ; color:black; width:60%; padding:20px 0; text-align:center;"></h2>
<p>Mother Of Peurl</center>

<div>
    <a href="indeks.php">
    <button type="button" style="background-color:yellow;"> Menu </button></a>
</div>

<br>
<table cellpadding="0" cellspacing="1" border="1" style="width:100%">
<tr>
    <thead>
        <th>No.</th>
        <th>ID TRANSAKSI</th>
        <th>ID KERANJANG</th>
        <th>TANGGAL TRANSAKSI</th>
        <th>NAMA BARANG</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NOMOR HP</th>
        <th>HARGA BELI</th>
        <th>TOTAL BAYAR</th>
        <th>AKSI</th>
</tr>
</thead>

<?php
include "koneksi.php";
$sqln = mysqli_query($kon, "select * from transaksi inner join keranjang on 
transaksi.idkjg = keranjang.idkjg inner join barang on keranjang.idbrg = barang.idbrg");
$row = mysqli_num_rows($sqln);
$no=1;

while ($rn = mysqli_fetch_array($sqln)) { ?>
<tbody>
    <tr>
        <td><?php echo $no++ ;?></td>
        <td><?php echo $rn["idtrans"]?></td>
        <td><?php echo $rn["idkjg"]?></td>
        <td><?php echo $rn["tgltrans"]?></td>
        <td><?php echo $rn["nmbrg"]?></td>
        <td><?php echo $rn["nama"]?></td>
        <td><?php echo $rn["alamat"]?></td>
        <td><?php echo $rn["nohp"]?></td>
        <td><?php echo $rn["hrgbrg"]?></td>
        <td><?php echo $rn["total"]?></td>
        <td style="text-align:center;"><a href="cetak.php?idt=<?php echo $rn['idtrans']?>">Cetak</a></td>
        

<?php }?>
</tr></tbody>
</table>
</div>
