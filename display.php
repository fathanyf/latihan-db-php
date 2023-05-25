<html>
    <head>
        <title>Database Anggota Paramotor DKI Jakarta</title>
        <link rel="stylesheet" href="display.css">
    </head>
    <body>
    <?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from member2 ORDER by id DESC");
?>

<a href="insert.php">kembali</a>
<table border="1">
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
            </tr>

        <?php
        while($res=mysqli_fetch_array($result)){

            echo '<tr>';
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['address'].'</td>';
            echo '</tr>';

        }
        ?>
        </table>
<a href="insert.php">kembali</a>
    </body>
</html>