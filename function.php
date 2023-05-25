


<?php

include("config.php");
        if(isset($_POST['submit']))
        {

            $name=$_POST['name'];
            $born=$_POST['born'];
            $address=$_POST['address'];
            $whatsapp=$_POST['whatsapp'];
            $email=$_POST['email'];
            $machine=$_POST['machine'];
            $parachute=$_POST['parachute'];
            $club=$_POST['club'];

            $result=mysqli_query($mysqli, "INSERT into member2 values('', '$name', '$born', '$address', '$whatsapp', '$email', '$machine', '$parachute', '$club')");
            if($result)
            {
                header("location:insert.php");
            }
            else{
                echo "Failed";
            }
        }
        ?>