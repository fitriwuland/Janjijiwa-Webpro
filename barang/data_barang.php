<html>
	<head>
		<title></title>
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
                background-color: beige;
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

			.dropdown {
            font-size: 16px;  
            border: none;  
            outline: none;  
            color: white; 
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            overflow:hidden;
            padding-bottom:10px;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }
        
            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            
            }
            
            .dropdown-content a:hover {
            background-color: #ddd;
            }
            
            .dropdown:hover .dropdown-content {
            display: block;
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
		<img src="logo.png" alt="" style="height: 100px; width:250px; margin-left:540px;">
		<div class="navbar">
			<ul style="margin: 10px; height:0;">
			<h1><li style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; color:white; padding:20px; margin:5px; ">Janji Jiwa</li></h1>
		</ul>
		<ul class="navbar-ul">
		<ul class="navbar-ul">
            <li class="li-navbar"><a class="a-navbar" href="index.php">Home</a></li>
			<li class="dropdown" style="overflow:hidden;">
            <a href="" class="a-navbar" >Product</a>
                <div class="dropdown-content">
                <a href="barang_add.php" class="a-drop">Add Item</a>
		  		<a href="data_user.php" class="a-drop"> User Data </a>
				<a href="/webpro/transaksi/riwayat.php" class="a-drop"> Transaction History </a>
			 </div>
        </li>           
		   <li class="li-navbar"><a class="a-navbar" href="/webpro/transaksi/indeks.php">Shop</a></li>
		</ul>
		</div>
	</header>
	<center><h2 style=" ; color:black; width:60%; padding:20px 0;text-align:center;">List Product </center></h2>
	<div class="container">
        <?php
            include "koneksi.php";
            $sqln = mysqli_query($kon, "select * from barang order by kdbrg");
            while ($rn = mysqli_fetch_array($sqln)) {
        ?>
        <div class="produk">
            <img src="/webpro/barang/gambar/<?php echo $rn["gambar"]; ?>" alt="<?php echo $rn["nmbrg"]; ?>">
            <h4><?php echo $rn["nmbrg"]; ?></h4>
			<h5><?php echo $rn["kdbrg"];?></h5>
            <p>Price: Rp <?php echo number_format($rn["hrgbrg"]); ?></p>
            <p>Stock: <?php echo $rn["stokbrg"]; ?></p>
			<a href="barang_edit.php?idb=<?php echo $rn['idbrg']?>">Edit | </a>
			<a href="barang_del.php?idb=<?php echo $rn['idbrg']?>">Delete</a>
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