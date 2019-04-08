<?php
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$author = filter_input(INPUT_POST, 'author');

if (!empty($id) || !empty($Name) || !empty($author)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "LIBRARY";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
        die('connection error (' . mysqli_connect_error() . ')'
            . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO BOOK(id,name,author)
            values ('$id','$name','$author')";
        if ($conn->query($sql)) {
            echo "Woooo huuuuuuuuu Inserted !";
        } else {
            echo "error" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
} else {
    echo "enter the proper input ";
    die();
}
