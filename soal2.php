<?php
    function is_username_valid($username) {
        return preg_match('/^[a-zA-Z][a-zA-Z0-9]{5,8}+$/',$username);
    }
    function is_password_valid($password) {
        return preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])(?=\S*[=])\S*$/',$password);
    }
   
    $username = "Xrutaf888";
    if (is_username_valid($username)) {
        echo "Username Is Valid <br>" ;
    } else {
        echo "Username Is Invalid <br>" ;
    }

    $username = "1Diana";
    if (is_username_valid($username)) {
        echo "Username Is Valid <br>" ;
    } else {
        echo "Username Is Invalid <br>" ;
    }

    $password = "aZ1aaasss=";
    if (is_password_valid($password)) {
        echo "Password Is Valid <br>" ;
    } else {
        echo "Password Is Invalid <br>" ;
    }
    
    $password = "C0d3YourFuture!#";
    if (is_password_valid($password)) {
        echo "Password Is Valid <br>" ;
    } else {
        echo "Password Is Invalid <br>" ;
    }
?>