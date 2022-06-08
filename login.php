<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spotify - Your favourite music is here</title>
        <link rel="stylesheet" href="style.css">
        </head>
<body>
    <nav>
        <ul>
            <li class="brand"><img src="logo.png" alt="Spotify"> Spotify</li>
            <button onclick="window.location.href='index.php'"><b>Top Songs</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button onclick="window.location.href='Artist.php'"><b>Top Artists</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button onclick="window.location.href='add.php'"><b>Add Song</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button onclick="location.href='login.php'"><b>Sign up / Login</b></button>
        </ul>
    </nav><br><br><br><br><br><br>
<center>
    <div class="form-container">
        <form action="" method="post" style=" text-align: center;
        width: 500px;
        background:#fff;
        border:2px solid #000;
        padding:20px;">
            <h3 style="font-size:30px;
        margin-bottom: 10px;
        text-transform:uppercase;">Login Now</h3>
        <?php
                if(isset($error)){
                    foreach($error as $error){
                       echo '<span class="error-msg">'.$error.'</span>'; 
                    } 
                }
            ?>
            <input type="email" name="usermail" placeholder="enter your email" class="box" style="width: 90%;
        padding: 12px 15px;
        font-size:20px;
        border:2px solid #000;
        margin: 10px 0;" required>
            <input type="password" name="password" placeholder="enter your password" class="box" style="width: 90%;
        padding: 12px 15px;
        font-size:20px;
        border:2px solid #000;
        margin: 10px 0;" required>
            <input type="submit" value="login now" name="submit" style="display: block;
        margin: 10px 0;
        background: #000;
        color: #fff;
        padding: 10px 35px;
        font-size: 20px;
        width: 100%;
        cursor: pointer;">
            <p style="font-size: 20px;
        padding-top: 10px;">Dont have an account? <a href="register_form.php">Register now</a></p>
        </form>
    </div>
</center>
</body>
</html>