<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="function.php" method="POST">
            Name<input type="text" name="name"><br>
            Email <input type="email" name="email"><br>
            Mobile <input type="mobile" name="mobile"><br>
            Date <input type="date" name="date"><br>
            <input type="submit" name="submit">
        </form>
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
        
    </body>
</html>