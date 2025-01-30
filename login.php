<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li class="li-navbar"><a href="">Product</a></li>
                </ul>
            </div>
        </header>
        <div class="kotak_login">
            <p class="tulisan_login">
                <h1> Login</h1>
                <form action="ceklogin.php" method ="post">
        <label> Username </label> 
            <input type="text" name="username" class="form_login" placeholder="username" required >
        <label> Password </label>
            <input type="password" name="password" class="form_login" placeholder="password" required>
        
        <input type="submit" class="tombol_login" value="login"> 

    <p>-- Or sign up with -- </p>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-google"></i>
    <i class="fa-brands fa-twitter"></i>
    
                 </form>
                 <br></br>
                 <a href="register.php"><p style="text-align: center;"> Register </p>
        </div>
    </body>
</html>

     
        
            
