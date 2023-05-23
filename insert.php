<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Database Anggota Paramotor</h1>
        <h2>Pengisian Data</h2>
        <form action="function.php" method="POST">
            Name <br>  <input type="text" name="name"><br>
            Email <br> <input type="email" name="email"><br>
            Mobile <br> <input type="mobile" name="mobile"><br>
            Date  <br> <input type="date" name="date"><br>
            <input type="submit" name="submit">
        </form>
        <a href="display.php"><h3>lihat data</h3></a>

        
    </body>
</html>