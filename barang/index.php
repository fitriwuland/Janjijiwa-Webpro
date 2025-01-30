<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <head>
        <title></title>
        <style>
            *{
                box-sizing: border-box;
            }
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
                text-decoration:none;
            }
            a:visited {
                color:white;
            }

            a:hover {
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

            section{
                background-color:beige;
                justify-content:center;
            }
            .grid-container {
                display: grid;
                grid-template-columns: repeat(2,1fr) ;
                align-items: center;
                align-content: center;
                text-align: left ;
            }
            .grid-item {
                padding: 20px;
                font-size: 30px;
                text-align: center;
            }
            .button {
                display:inline-block;
                background-color: chocolate;
                color: #fff;
                padding: 15px;
                border-radius:2px;
                font-size:small;
                margin-left:300px;
            }
            h1 {
                margin:auto;
            }

            footer {
                background-color: black;
                padding: 70px 0;
                position: relative;
                bottom: 0;
                width: 100%;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                max-width: 1170px;
                margin: auto;
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
        <ul style="margin: 10px; height:0; ">
            <h1><li style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; color:white; padding:20px; margin:5px; ">Janji Jiwa</li></h1>
        </ul>
        <ul class="navbar-ul">
            <li class="li-navbar"><a href="">Home</a></li>
            <!-- <li class="li-navbar"><a href="">About</a></li> -->
            <li class="li-navbar"><a href="/webpro/transaksi/data_keranjang.php">Shop</a></li>
            <li class="dropdown" style="overflow:hidden;">
            <a href="/webpro/login.php" class="dropbtn" >Login</a>
                <!-- <div class="dropdown-content">
                    <a href="/webpro/admin/login.php" class="a-drop">admin</a> -->
           </div>
        </li>
        </ul>
    </div>
</header>

<section>
    <div class="grid-container">
        <div clas="grid-item">
            <h1 style="color:chocolate; text-shadow:2px 4px burlywood; text-align:left; margin-left:100px; font-size:65px; ">Janji Jiwa</h1>
            <h2 style="margin-left:100px; font-size:50px; ">
            Kopi Dari Hati
            <br>
            Untuk Teman Sejiwa.</h2>
            <a href="/webpro/transaksi/indeks.php" class="button">Product</a>
        </div>
        <div class="grid-item">
            <img src="janjiw.png" alt="" style="height: auto; max-width: 100%; background-color: beige;">
        </div>
    </div>
</section>


<footer>
        <div class="row">
            <div class="footer-konten">
                <h4>Ikuti Kami</h4>
                <p style="color:white;"><i class="fa-solid fa-location-dot"></i>   Addres: Jl.Kisamun No.201, Kota Tangerang, Banten. </p>
                <p style="color:white;"> <i class="fa-solid fa-phone"></i>   Phone: 0812464246864</p>
                <p style="color:white;"><i class="fa-solid fa-bell"></i>  Hours: 09.00-22.00</p>
            </div>
            <div class="footer-konten">
                <h4>layanan</h4>
                <ul class="footer-ul">
                    <li><a href="#">Bantuan</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">How To Order</a></li>
                </ul>
            </div>
            <div class="footer-konten">
                <h4>Jelajahi</h4>
                <ul class="footer-ul">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Kontak Media</a></li>
                </ul>
            </div>
            <div class="footer-konten">
                <h4>Brand</h4>
                <ul class="footer-ul">
                    <li><a href="#">Kopi Sejuta Jiwa</a></li>
                    <li><a href="#">Burger Geber</a></li>
                    <li><a href="#">Jiwa Tea</a></li>
                    <li><a href="#">Janji Jiwa</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>