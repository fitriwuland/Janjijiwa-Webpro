<html>
	<head>
		<title> </title>
		<style>
			body{
				background-color:beige;
			}

			.navbar {
                height: 75px;
                background-color: black;
				margin-top:-25px;
            }
            .navbar-ul {
                display: flex;
                justify-content: right;
                align-items: right;
            }
            .li-navbar{
                list-style-type: none;
                padding: 8px;
                margin: 7px;
			}

			.a-navbar:visited {
                color:white;
            }

            .a-navbar:hover {
                color: rgb(255, 188, 139);
            }
			</style>
			</head>
				</html>

<body>
<header>
		<div class="navbar">
			<ul style="margin: 10px; height:0;">
			<h1><li style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; color:white; padding:20px; margin:5px; ">Janji Jiwa</li></h1>
		</ul>
		<ul class="navbar-ul">
		<ul class="navbar-ul">
			<li  style="list-style-type:none; padding: 8px; margin:7px; color:black; "><a href="/webpro/barang/data_barang.php" style="color:black;">Product</a></li>
            <li class="li-navbar"><a class="a-navbar" href="/webpro/barang/index.php">Home</a></li>
            <li class="li-navbar"><a class="a-navbar" href="">About</a></li>
            <li class="li-navbar"><a class="a-navbar" href="data_keranjang.php">Cart</a></li>
            
		</ul>
	</div>		
	</header>
	
		








<html>
	<head>
		<title>Riwayat transaksi</title>
		<style>
			body {
				padding-top:20px;
				background-color:beige;

			}
			.riwayat {
				padding:10px;
			}
			th {
				text-align:center;
				width:500px;
				background-color: rgba(254, 185, 107, 0.876);
			}
			td {
				text-align:center;
			}

			td, th {
				border-bottom: 1px solid #ddd;
				cursor:pointer;
			}

			tr:hover {
				
			}
			
			table {
				margin-left:-150px;
			}
		</style>
	</head>
	 </html>


<div class="riwayat" style="width:850px; margin:0 auto;">
<center><h2 style=" ; color:black; width:60%; padding:20px 0;text-align:center; "> Hasil Transaksi </h2></center>
<br>
	<table cellpadding="0" cellspacing="2" border="1" style="width:1200px; border-collapse: collapse;">
	<tr>
	<thead>
	<th> No. </th>
    <th> Id Transaksi </th>
    <th> Id Cart </th>
	<th style="width:15%;"> Transaction Date   </th>
	<th style="width:20%;"> Product </th>
	<th style="width:13%"> Name </th>
	<th style="width:10%"> Addres </th>
	<th> Number Phone </th>
	<th> Price </th>
	<th> Quantity </th>
	<th> Total </th>
	<th> aksi </th>		
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
    <tr style="height:30px;">
        <td><?php echo $no++ ;?></td>
        <td><?php echo $rn["idtrans"]?></td>
        <td><?php echo $rn["idkjg"]?></td>
        <td><?php echo $rn["tgltrans"]?></td>
        <td><?php echo $rn["nmbrg"]?></td>
        <td><?php echo $rn["nama"]?></td>
        <td><?php echo $rn["alamat"]?></td>
        <td><?php echo $rn["nohp"]?></td>
        <td><?php echo $rn["hrgbrg"]?></td>
        <td><?php echo $rn["jmlbeli"]?></td>
        <td>Rp.<?php echo $rn["total"]?></td>

<td style="text-align:center;"><a href="cetak.php?idt=<?php echo $rn['idtrans']?>" >Cetak</a></td>

<?php }?>

</tr></tbody>
</table>
	</div>
        
	




