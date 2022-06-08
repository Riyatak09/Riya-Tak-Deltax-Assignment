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
    </nav><br><br><br>
<center>
    <div class="form-container">

         <h1 style="font-size:30px;
        margin-bottom: 10px;
        text-transform:uppercase;">Add Songs</h1>
         <form action="insert.php" method="post" style=" text-align: center;
        width: 500px;
        background:#fff;
        border:2px solid #000;
        padding:20px;">
             
<p>
               <label for="Songname" style="font-size:30px;
        margin-bottom: 10px;
        text-transform:uppercase;">Enter the song title:</label>
               <input type="text" name="songname" id="songname" style="width: 90%;
        padding: 12px 15px;
        font-size:20px;
        border:2px solid #000;
        margin: 10px 0;">
            </p>
 
             
<p>
               <label for="songfile" style="font-size: 20px;
        padding-top: 10px;">Select song file:</label>
               <input type="file" name="songfile" id="songfile"  accept=".mp3,audio/*" style="display: block;
        margin: 10px 0;
        background: #000;
        color: #fff;
        padding: 10px 35px;
        font-size: 20px;
        width: 87%;
        cursor: pointer;">
            </p>
 
             
<p>
<label for="songimg" style="font-size: 20px;
        padding-top: 10px;">Select song thumbnail:</label>
               <input type="file" name="songimg" id="songimg" accept="image/*" style="display: block;
        margin: 10px 0;
        background: #000;
        color: #fff;
        padding: 10px 35px;
        font-size: 20px;
        width: 87%;
        cursor: pointer;">
            </p>
 
             

 
            <input type="submit" value="Submit" style="display: block;
        margin: 10px 0;
        background: #000;
        color: #fff;
        padding: 10px 35px;
        font-size: 20px;
        width: 100%;
        cursor: pointer;">
         </form>
</center>
</body>
</html>
