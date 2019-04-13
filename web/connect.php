
<?php
$servername = "127.0.0.1" ;
$username = "root";
$pass = "";
$conn = mysqli_connect($servername,$username,$pass) or die("Problem occur in connection");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
$db = mysqli_select_db($conn,"library");

?>
