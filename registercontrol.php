<!DOCTYPE html>
<html>
    <body>
        <?php  
            include "admin/connessione.php";
            
            $usr=$_REQUEST['username'];
            $email=$_REQUEST['email'];
            $psw=$_REQUEST['password'];

            if($psw==""){
                echo "Please insert a password<br>";
                echo "Go back <a href='register.html'>here</a>";
                die();
            }
            else
                $psw=md5($psw);


            $sql="INSERT into utente (username, email, password) values ('$usr','$email','$psw')";

            $records=$conn->query($sql);

                if($records==FALSE)
                    echo "Username or Email already registered, login or choose a different username or email <a href='register.html'>here</a><br>";
                else
                    echo "Registration successful! Now login with this data <a href='login.html'>here</a>"; 
        ?>
    </body>
</html>