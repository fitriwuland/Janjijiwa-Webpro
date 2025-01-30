<html>
    <head>
        <title>Login Admin</title>
        <link rel="stylesheet" href="/webpro/style.css"/>
    </head>
    <body><center>
        <header>
        <img class="janjiw" src="janjiw.png">
            <div class="navbar">
                <ul class="ul-tulis">
                    <h1><li class="tulis">Janji Jiwa</li></h1>
                </ul>
                <ul class="navbar-ul">
                <li class="li-navbar"><a href="/webpro/barang/index.php">Home</a></li>
                <li class="li-navbar"><a href="">About</a></li>
                <li class="li-navbar"><a href="/webpro/barang/data_barang.php">Product</a></li>
                </ul>
            </div>
        </header>
        <div class="kotak_login">
            <p class="tulisan_login"><h1>Log In</h1></p>
                <form action="ceklogin.php" method ="post">
        <label> Username </label> 
            <input type="text" name="username" class="form_login" placeholder="username">
        <label> Password </label>
            <input type="text" name="password" class="form_login" placeholder="password">
        
        <input type="submit" class="tombol_login" value="login"> 

    
                 </form>
                 <br></br>
                 <a href="register.php"><p style="text-align: center;"> Register </p>
        </div>
    </body>
</html>

     
        
            
