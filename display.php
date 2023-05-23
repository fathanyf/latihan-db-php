<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");
?>

<a href="insert.php">kembali</a>
<table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </tr>

        <?php
        while($res=mysqli_fetch_array($result)){

            echo '<tr>';
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['email'].'</td>';
            echo '<td>'.$res['mobile'].'</td>';
            echo '</tr>';

        }
        ?>
        </table>
<a href="insert.php">kembali</a>