<html>
    <head>
        <title> Halaman Register </title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
    <div class="kotak_login">
        <p class="tulisan_login"> <h2> Sign Up </h2>
            <form action="cekregister.php" method="post">
    <!-- <label> Full Name </label>
            <input type="text" name="fullname" class="form_login" placeholder="full name"> -->
    <label> Username </label>
            <input type="text" name="username" class="form_login" placeholder="username" required>
    <label> Password </label>        
            <input type="text"  id="password" name="password" class="form_login" placeholder="password" required>
    <label> Email </label>    
            <input type="text" name="email" class="form_login" placeholder="email" required>
    <label> Phone </label>    
            <input type="text" name="phone" class="form_login" placeholder="phone" required>
        <label for="gender"> Gender </label>
        <p><select name="gender" id="gender">
                <option value="Man"> Man </option>
                <option value="Woman"> Woman </option>
        </select></p>

        


<input type="submit" class="tombol_login" value="Submit">
            </form>
            <br></br>
            <a href="login.php"><p style="text-align: center;"> Back </p>
    </div>
</body>
</html>

    

