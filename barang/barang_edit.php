<html>
	<head>
		<title>Daftar Barang</title>
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

            label {
                display:block;
            }
            input {
                height:25px;
                width:280px;
            }
			</style>
			</head>
				</html>

<body>
<header>
<img src="logo.png" alt="" style="height: 100px; width:250px; margin-left:540px;">

		<div class="navbar">
			<ul style="margin: 10px; height:0;">
			<h1><li style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; color:white; padding:20px; margin:5px; ">Janji Jiwa</li></h1>
		</ul>
		<ul class="navbar-ul">
		<ul class="navbar-ul">
			<li  style="list-style-type:none; padding: 8px; margin:7px; color:black; "><a href="/webpro/barang/data_barang.php" style="color:black;">Product</a></li>
            <li class="li-navbar"><a href="/webpro/barang/data_barang.php">Home</a></li>
            <li class="li-navbar"><a href="">About</a></li>
            <li class="li-navbar"><a href="">Cart</a></li>
            
		</ul>
	</div>		
	</header>
    <h2 style="text-align:center; margin">Edit Product </h2>

    <form name="form1" method="post" enctype="multipart/form-data" action="barang_aksi.php">
    <div class="kotak-add" style="margin-top:-15px; margin-left:25%;">
        
    <?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "select * from barang where idbrg='$_GET[idb]'");
$rn =mysqli_fetch_array($sqln);
?>
        <label>Kode Barang</label>
        <p><input type="text" name="kdbrg" id="kdbrg" value="<?php echo "$rn[kdbrg]"; ?>"></p>

        <label>Nama Barang</label>
        <p><input type="text" name="nmbrg" id="nmbrg" value="<?php echo "$rn[nmbrg]"; ?>"></p>

        <label>Price </label>
        <p><input type="text" name="hrgbrg" id="hrgbrg" value="<?php echo "$rn[hrgbrg]"; ?>"></p>
        </div>

        <div class="kotak" style="text-align:left; margin-left:60%; margin-top:-223px;">

        <label>Stock </label>
        <p><input type="text" name="stokbrg" id="stokbrg" value="<?php echo "$rn[stokbrg]"; ?>">></p>

        <label> Image </label>
        <p><input type="file" name="gambar" id="gambar"></p>

        <label>Deskripsi</label>
        <p><input type="text" name="deskripsi" id="deskripsi" value="<?php echo "$rn[deskripsi]"; ?>"></p>
        </div>
        <div>
            <p style="text-align:center; curso:pointer;"><input type="submit" name="button" id="button" value="Edit Data" ></p>
            <a href="data_barang.php" ><button type="button" style="margin-left:645px; curso:pointer;"> Back </button></a>
        </div>
    </form>
    
        </body>


































