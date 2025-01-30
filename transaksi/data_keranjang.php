<html>
    <head>
        <title> Shopping Cart </title>
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

			.a-navbar:visited {
                color:white;
            }

            .a-navbar:hover {
                color: rgb(255, 188, 139);
            }

			.data{
				margin-top:20px;
			}

			td,th {
				text-align:center;
				border-bottom: 1px solid #ddd;
				padding:10px;
			}
			
			h2{
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
				margin-left:250px;

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
            <li class="li-navbar"><a class="a-navbar" href="/webpro/barang/index.php">Home</a></li>
            <li class="li-navbar"><a class="a-navbar" href="">About</a></li>
            <li class="li-navbar"><a class="a-navbar" href="indeks.php">Product</a></li>
		</ul>
		</div>
	</header>

	<div class="data" style="width:850px; margin-left:150px;">
	<div style="display:flex; margin:auto;">
	<img src="bag.png" style="width:35px; height:35px; margin-top:12px; margin-right:8px;  "> 
	<h2 style=" text-decoration:underline;">Shopping cart</h2>
</div>
<br>
	<table cellpadding="0" cellspacing="1"  style="width:1000px; ">
	<tr>
	<thead>
	<th style="text-align:left;">PRODUCT</th>
	<th>PRICE</th>
	<th>STOCK ITEM</th>
	<th>AKSI</th>
	<th>REMOVE</th>
	</tr>
	</thead>
	
	
<?php
include "koneksi.php";
	$sqln = mysqli_query($kon,"select * from keranjang inner join barang on keranjang.idbrg = barang.idbrg");
	$row = mysqli_num_rows($sqln);
	$no=1;
	
		while($rn = mysqli_fetch_array($sqln)){ ?>
		<tbody>
		<tr>
		
		<td><img src="/webpro/barang/gambar/<?php echo $rn['gambar']?>" style="width: 120px; float:left;"><h4 style="margin-top:40px;"><?php echo $rn["nmbrg"]?></h4></td>
		<td>Rp.<?php echo $rn["hrgbrg"];?></td>
		<td><?php echo $rn["stokbrg"]?></td>
	<td style="text-align:center">
    <a href="transaksi.php?idk=<?php echo $rn['idkjg']?>">Checkout</a>
    </td>
	<td><a href="kjg_del.php?idk=<?php echo $rn['idkjg']?>"><button type="button" style=" background-color:transparant; border-radius:50%; cursor:pointer;">X</button></a></td>		
	

<?php }?>
</tr></tbody>
</table>
	</div>

	<footer>
        <div class="row" >
            <div class="footer-konten">
                <h4>layanan</h4>
                <ul class="footer-ul">
                    <li><a class="a-navbar" href="#">Bantuan</a></li>
                    <li><a class="a-navbar" href="#">Contact Us</a></li>
                    <li><a class="a-navbar" href="#">How To Order</a></li>
                </ul>
            </div>
            <div class="footer-konten">
                <h4>Jelajahi</h4>
                <ul class="footer-ul">
                    <li><a class="a-navbar" href="#">Tentang Kami</a></li>
                    <li><a class="a-navbar" href="#">Karir</a></li>
                    <li><a class="a-navbar" href="#">Kontak Media</a></li>
                </ul>
            </div>
            <div class="footer-konten">
                <h4>Brand</h4>
                <ul class="footer-ul">
                    <li><a class="a-navbar" href="#">Kopi Sejuta Jiwa</a></li>
                    <li><a class="a-navbar" href="#">Burger Geber</a></li>
                    <li><a class="a-navbar" href="#">Jiwa Tea</a></li>
                    <li><a class="a-navbar" href="#">Janji Jiwa</a></li>
                </ul>
            </div>
        </div>
			</footer>
</body>
