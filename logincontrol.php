<?php  
    include "admin/connessione.php";
    
    $usr=$_REQUEST['username'];
    $psw=md5($_REQUEST['password']);

    $sql="SELECT username, password from utente WHERE username='$usr' AND password='$psw'";

    $records=$conn->query($sql);
    $row=$records->fetch_assoc();

        if($records->num_rows==1){
            header("Location:home.php?username='$usr'");  
        }
        else
            echo "Username or Email already registered, login or choose a different username <a href='register.html'>here</a><br>";
?>