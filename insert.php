<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");
?>

<html>
    <head>
        <title>Database Anggota Paramotor DKI Jakarta</title>
        <link rel="stylesheet" href="display.css">
    </head>
    <body>
        <h1>Database Anggota Paramotor</h1>
        <h2>Pengisian Data</h2>
        <form action="function.php" method="POST">
            Name <br>  <input type="text" name="name"><br>
            born  <br> <input type="date" name="born"><br>
            Address <br> <input type="text" name="address"><br>
            whatsapp <br> <input type="mobile" name="whatsapp"><br>
            email <br> <input type="email" name="email"><br>
            machine <br> <input type="text" name="machine"><br>
            parachute <br> <input type="text" name="parachute"><br>
            club <br> <input type="text" name="club"><br>
            <input type="submit" name="submit">
        </form>
        <a href="display.php"><h3>lihat data</h3></a>

        
    </body>
</html>