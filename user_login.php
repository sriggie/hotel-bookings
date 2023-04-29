<?php
require_once 'config/db.php';

if(isset($_POST['login_customer'])){
    // create variables to store values from the login form inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // create a query to check if the customer's username and password match with those in the database
    $query = "SELECT id FROM registered_customers WHERE username = '$username' AND password = '$password'";

    // execute the query
    $result = mysqli_query($conn, $query);

    // check if the query returned any rows
    if(mysqli_num_rows($result) == 1){
        echo 'Login Successful';
        // redirect the customer to the home page
        // replace the URL below with the URL of your home page
        header('Location:user_login   .php');
        exit;
    } else {
        echo 'Invalid Login Credentials';
    }
}
?>