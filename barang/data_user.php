<html>
	<head>
		<title> Riwayat transaksi </title>
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
            <li class="li-navbar"><a class="a-navbar" href="/webpro/barang/data_barang.php">Home</a></li>
            <li class="li-navbar"><a class="a-navbar" href="">About</a></li>
            <li class="li-navbar"><a class="a-navbar" href="data_barang.php">Cart</a></li>
            
		</ul>
	</div>		
	</header>



<html>
	<head>
		<title>User</title>
		<style>
			body {
				padding-top:20px;

			}
			.user {
			}

			td, th {
				border-bottom: 1px solid #ddd;
				cursor:pointer;
			}

			th {
				text-align:center;
				width:500px;
				background-color: rgba(254, 185, 107, 0.876);
			}
			td {
				text-align:center;
			}
			
			table {
				margin-left:-100px;
			}
		</style>
	</head>
	 </html>


<div class="user" style="width:850px; margin:0 auto;">

<center><h2 style="color:black; width:60%; padding:20px 0;text-align:center;">
USER LIST </h2></center>
<hr><br>
	<table cellpadding="0" cellspacing="0" border="1" style="width:1000px; margin">
	<tr>
	<thead>
	<th> No. </th>
	<th style="width:13%"> FULL NAME </th>
	<th> USERNAME </th>
	<th> PASSWORD </th>
	<th> EMAIL </th>
	<th style="width:16%"> PHONE NUMBER</th>
	<th> GENDER</th>
	<th> AKSI</th>
	<th> Delete</th>
	</tr>
	</thead>
	
	
<?php
include "koneksi.php";
	$sqln = mysqli_query($kon,"select * from login order by username");
	$row = mysqli_num_rows($sqln);
	$no=1;
	
		while($rn = mysqli_fetch_array($sqln)){ ?>
		<tbody>
		<tr>
		<td><?php echo $no++ ;?></td>
		<td><?php echo $rn["fullname"];?></td>
		<td><?php echo $rn["username"];?></td>
		<td><?php echo $rn["password"]?></td>
		<td><?php echo $rn["email"]?></td>
		<td>0<?php echo $rn["phone"]?></td>
		<td><?php echo $rn["gender"];?></td>
		
	<td style="text-align:center"><a href="user_edit.php?ids=<?php echo $rn['id_user']?>">Edit</a>
			<td><a href="user_del.php?ids=<?php echo $rn['id_user']?>"><button type="button" style="background-color:transparant; border-radius:8px; font-size:8px; cursor:pointer;">X</button></a></td>
			
		
<?php }?>
</tr></tbody>
</table>
	</div>