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

			.container {
            	width: 90%;
    			margin: 0 auto;
    			display: flex;
    			flex-wrap: wrap;
    			justify-content: space-around;
    			padding: 10px 0;
			}

        	.produk {
    			width: 20%;
				background-color: #fff;
    			border: 1px solid #ddd;
    			border-radius: 8px;
    			padding: 10px;
    			margin: 10px;
    			text-align: center;
    			transition: transform 0.3s ease-in-out;
    		}

			.produk:hover {
    			transform: scale(1.05);
    
			}

    		.produk img {
    			max-width: 85%;
    			height: auto;
    			border-radius: 6px;
    		}

			.produk h4 {
    			margin: 10px 0;
    			color: #333;
    		}

    		.produk p {
    			margin: 8px 0;
    			color: black;
				font-size:13px;
    		}

    		.produk a {
    			display: block;
    			background-color: chocolate;
    			color: white;
    			padding: 10px;
    			text-decoration: none;
    			border-radius: 2px;
    			transition: background-color 0.3s;
    		}

    		.produk a:hover {
    			background-color:rgb(177, 99, 44);
    		}
			
				
				
			.daftar{
				background-color:#FFF0F5;
				padding:10px;
				
			}
			.mop {
				margin-left: 320px;
			}
			th{
				text-align:center;
				background-color: rgb(190, 217, 245);
			}
			td{
				text-align:center;
			}
			h3{
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
			<li  style="list-style-type:none; padding: 8px; margin:7px; color:black; "><a href="/webpro/barang/data_barang.php" style="color:black;">Product</a></li>
            <li class="li-navbar"><a href="/webpro/barang/index.php">Home</a></li>
            <li class="li-navbar"><a href="">About</a></li>
            <li class="li-navbar"><a href="data_keranjang.php">Cart</a></li>
            
		</ul>
	</div>		
	</header>
	
	<div class="container">
        <?php
            include "koneksi.php";
            $sqln = mysqli_query($kon, "select * from barang order by kdbrg");
            while ($rn = mysqli_fetch_array($sqln)) {
        ?>
        <div class="produk">
            <img src="/webpro/barang/gambar/<?php echo $rn["gambar"]; ?>" alt="<?php echo $rn["nmbrg"]; ?>">
            <h4><?php echo $rn["nmbrg"]; ?></h4>
            <p>Price: Rp <?php echo number_format($rn["hrgbrg"]); ?></p>
            <p>Stock: <?php echo $rn["stokbrg"]; ?></p>
            <a href="pilih_barang.php?idb=<?php echo $rn['idbrg']; ?>">Add to cart</a>
        </div>
        <?php } ?>
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
	

