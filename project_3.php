<?php  
// Project 3: Basic Auth System 
// stored username and password
$user = "admin";
$password = "1234";
// Input from user
$inputUser = "admin";
$inputPassword = "1234";
// Check if the input username and password match the stored username and password
if(($user == $inputUser) && ($password == $inputPassword)){
    echo "Login successful<br>";
}else{
    echo "Invalid username or password<br>";
}
echo "<br>";