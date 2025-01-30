<html>
    <head>
        <title> Pilih barang</title>
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

            .produk {
                padding-top:20px
                
            }

           .produk img {
                width:28%;
                float:right;
                margin-right:150px;
                padding-bottom:20px;
                border-radius: 8px;
                height:auto;
            }


            .detail {
                margin-left:300px;
                padding-top:25px;
            }

            input {
                background-color: green;
                color: white;
                padding:8px;
                cursor:pointer;
                text-align:center;
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

$sqln =mysqli_query($kon, "select *from barang where idbrg='$_GET[idb]'");
$rn = mysqli_fetch_array($sqln);

?>
<div class="Produk">
<form action="" method="post">
    <input type="hidden" name="idbrg" id="idbrg" value="<?php echo "$rn[idbrg]"; ?>">
    <img src="/webpro/barang/gambar/<?php echo $rn['gambar']?>">
    <div class="detail">
    <h5 style="color:rgba(31, 23, 8, 0.84));">Coffee, Tumbler, Mug, etc.</h5>
    <p><h1> <?php echo $rn["nmbrg"]?></h1></p>
    <p><h3> Rp. <?php echo $rn["hrgbrg"];?></h3></th></p>
    <p>Stock : <?php echo $rn["stokbrg"]?></th></p>
    <p> <?php echo $rn["deskripsi"]?></th></p>
    <input type="submit" name="button" id="button" value="Add to cart">
</form>
        </div>
    </div>
    
<?php
session_start();
if(isset($_POST["button"])) {

    include "koneksi.php";
$sqln = mysqli_query($kon,"INSERT into keranjang values ('','$_POST[idbrg]')");

if($sqln) {
    echo '<script language = "javascript">
    alert ("Data Berhasil Disimpan");
    document.location="data_keranjang.php";</script>';
    }else{
    echo '<script language = "javascript">
    alert ("Gagal Menyimpan");
    document.location="data_keranjang.php";</script>';
    }
}
?>

</body>

