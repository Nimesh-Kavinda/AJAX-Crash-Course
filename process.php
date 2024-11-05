<?php

// connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest', 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo  'Process ';

// Check for Post Variabels

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST : Your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo 'User Added';
    }else {
        echo 'ERROR: '. mysqli_error($conn);
    }
}

// Check for Get Variabels

if(isset($_GET['name'])){
    echo 'GET : Your name is ' . $_GET['name'];
}

?>