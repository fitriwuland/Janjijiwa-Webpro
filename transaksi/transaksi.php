<html>
    <head>
        <title>CHECKOUT</title>
        <style>
            body{
				background-color:beige;
				
			}

			.navbar {
                height: 75px;
                background-color: black;
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

			a:visited {
                color:white;
            }

            a:hover {
                color: rgb(255, 188, 139);
            }

            .checkout {
                padding-top:20px;
            }

            .checkout img {
                width:300px;
                float:left;
                margin-left:150px;
                padding-bottom:20px;
                border-radius: 8px;
                height:auto;
            }

            .checkout p{
                padding-left:100px;
                text-align:center;
                margin-top:28px;

            }

            .isi {
                margin-left:300px;
                padding-top:15px;
                
                
            }

            .isi input{
                width:70%;
                
                
            }

            input{
                width:60%;
                height:35px;
                color:black;
                
            }

            footer {
                background-color: black;
                padding: 70px 0;
                position: relative;
                bottom: 0;
                width: 100%;
				margin-top:30px;
				
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                max-width: 1170px;
                margin: auto;
				margin-left:150px;

            }

            .footer-konten {
                width: 25%;
                padding: 0 15px ;
            }

        
            .footer-konten h4 {
                font-size: 18px;
                color: white;
                text-transform: capitalize;
                margin-bottom: 35px;
                font-weight: 500;
                position: relative;
                text-align: left;
            }

        
            .footer-konten h4::before {
                content: "";
                position: absolute;
                left: 0;
                bottom: -10;
                background-color: #e91e63;
                height: 2px;
                box-sizing: border-box;
                width: 50px;
            }

            
            .footer-ul {
                list-style-type: none;
                margin-left: -50px;
            }

            .footer-konten ul li a {
                font-size: 16px;
                text-transform: capitalize;
                text-decoration: none;
                font-weight: 300;
                display: block;
                padding: 5px;

            }

            .footer-konten .sosmed a {
                display: inline-block;
                height: 40px;
                width: 40px;
                background-color: rgba(255, 255, 255, 0.2);
                margin: 0 10px 10px 0;
                text-align: center;
                line-height: 40px;
                border-radius: 50%;
                color: #ffffff;
                transition: all 0.5s ease;
            }
    		
        </style>
    </head>
</html>

<body>
<header>
		<img src="janjiw.png" alt="" style="height: 100px; width:250px; margin-left:540px;">
		<div class="navbar">
			<ul style="margin: 10px; height:0;">
			<h1><li style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; color:white; padding:20px; margin:5px; ">Janji Jiwa</li></h1>
		</ul>
		<ul class="navbar-ul">
		<ul class="navbar-ul">
            <li class="li-navbar"><a href="indeks.php">Home</a></li>
            <li class="li-navbar"><a href="">About</a></li>
            <li class="li-navbar"><a href="data_keranjang.php">Cart</a></li>
		</ul>
		</div>
	</header>

    <?php
include "koneksi.php";

$sqln = mysqli_query($kon, "select * from keranjang inner join barang on keranjang.idbrg = barang.idbrg where idkjg='$_GET[idk]'");
$rn = mysqli_fetch_array($sqln);
?>
    <div class="checkout">
        
            <h2 style="text-align:center; text-decoration:underline;">Checkout</h2>
        <img src="/webpro/barang/gambar/<?php echo $rn['gambar']?>">
        <h3 style="text-align:center;">Personal Information</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">

        <p><input type="date" name="tgltrans" id="tgltrans" placeholder="TANGGAL TRANSAKSI"></p>
        <p><input type="text" name="nama" id="nama" placeholder="NAMA"></p>
        <p><input type="text" name="alamat" id="alamat" placeholder="ALAMAT"></p>
        <p><input type="text" name="nohp" id="nohp" placeholder="No hp"></p>
        </div>

        <div class="isi">
            <h3>Detail Shopping</h3>
        <p><input type="text" name="idkjg" id="idkjg" placeholder="ID Keranjang" value="<?php echo "$rn[idkjg]"; ?>"></p>
        <p><input type="text" name="nmbrg" id="nmbrg" placeholder="NAMA Barang" value="<?php echo "$rn[nmbrg]"; ?>"></p>
        <p><input type="text" name="hrgbrg" id="hrgbrg" placeholder="Harga Barang" value="<?php echo "$rn[hrgbrg]"; ?>"></p>
        <p><input type="text" name="stokbrg" id="stokbrg" placeholder="Stok Barang" value="<?php echo "$rn[stokbrg]"; ?>"></p>

        <p><input onclick="proses()" type="number" name="jmlbeli" placeholder="JUMLAH BELI" id="jmlbeli" value="1">

        <p><input type="text" name="total" placeholder="TOTAL BAYAR" id="total" class="form-control"></p>
        </p>
        <input type="submit" name="button" id="button" value="CHECKOUT">       
 </div>
    </form>
        
       
        <script type="text/javascript">
    function proses(){
        var hrgbrg = document.getElementById("hrgbrg");
        var jmlbeli = document.getElementById("jmlbeli");
        var totalbayar = document.getElementById("total");
            totalbayar.value = Number(hrgbrg.value) * Number(jmlbeli.value) ;
    }
    </script>

<?php 
session_start();
if(isset($_POST["button"])) {

    include "koneksi.php";
$sqln = mysqli_query($kon, "INSERT into transaksi values ('','$_POST[idkjg]',
'$_POST[tgltrans]','$_POST[nama]','$_POST[alamat]','$_POST[nohp]','$_POST[jmlbeli]',
'$_POST[total]')");

if($sqln){
    echo "Data Berhasil Disimpan";
    }else{
    echo "Gagal Menyimpan";
    }
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=hasil.transaksi.php'>";
}
?>

</div>


















