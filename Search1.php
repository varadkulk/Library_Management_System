<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "LIBRARY";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('connection error (' . mysqli_connect_error() . ')'
        . mysqli_connect_error());
}
mysqli_select_db($conn, $dbname);

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];

    $sql = "select * from book where id='" . $id . "'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo 'Id :' . $id . '<br>';
        echo 'Name :' . $name . '<br>';
        echo 'Author :' . $author . '<br>';
        exit();
    } else {
        echo " Search Not Found ";
        exit();
    }
    /*if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }*/
}
