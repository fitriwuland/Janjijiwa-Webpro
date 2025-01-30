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








<html>
	<head>
		<title>User</title>
		<style>
			body {
				padding-top:20px;

			}
			.edit_user {
				padding:10px;
				
			}

			
			th {
				text-align:center;
				width:500px;
			}
			h3{
				text-align:center;
				background-color:rgb(190, 217, 245);or: 
			}
		</style>
	</head>
	 </html>
<?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "select * from login where id_user='$_GET[ids]'");
$rn =mysqli_fetch_array($sqln);
?>
<div class="edit_user" style="margin:0 auto;width:700px;">
<h2 style="padding:20px 0;text-align:center">Edit Data User</h2>
<form name="form1" method="post" action="user_edit_aksi.php" enctype="multipart/form-data">
    <table style="text-align:left;" border="0" cellpadding="0">
    <tr><th>USERNAME</th>
    <th><input type="text" name="username" id="username" value="<?php echo "$rn[username]"; ?>"></th></tr>
    <tr><th>PASSWORD</th>
    <th><input type="text" name="password" id="password" value="<?php echo "$rn[password]"; ?>"></th></tr>
    <tr><th>EMAIL</th>
    <th><input type="text" name="email" id="email" value="<?php echo "$rn[email]"; ?>"></th></tr>
    <tr><th>PHONE NUMBER</th>
    <th><input type="text" name="phone" id="phone" value="<?php echo "$rn[phone]"; ?>"></th></tr>
    
    
    <tr><th></th><th><input type="submit" name="button" id="button" value="Edit Data" </th></tr>
</table>
</form>
</div>


