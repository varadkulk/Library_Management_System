<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Search Publisher</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="search_publisher">
        <div class="box">
            <form action="#publisher_search " method="post">
                <h1> Search for Publisher</h1>
                <input type="number" name="id" placeholder="Publisher id" min="1" id="id">
                <input type="submit" name="search_id" value="Search">
            </form>
            <form action="#publisher_search" method="post">
                <input type="text" name="name" placeholder="Publisher Name" id="name">
                <input type="submit" name="search_name" value="Search">
            </form>
            <a href="searchbooks.php">Search for Bookst</a>
            <a href="searchmembers.php">Search for members</a>
            <div id="publisher_search" class="overlay">
                <div class="popup">
                    <a class="close" href="searchpublisher.php">&times;</a>
                    <div class="content">
                        <h1>Publisher Info</h1>
                        <?php
                        if (isset($_POST['search_id'])) {
                            $q = $_POST['id'];
                            $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = '$q'");
                        } else if (isset($_POST['search_name'])) {
                            $q = $_POST['name'];
                            $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE name = '$q';");
                        }
                        $count = mysqli_num_rows($query_publisher);
                        if ($count == "0") {
                            exit('<h2>No result found!</h2>');
                        } else {
                            while ($row_publisher = mysqli_fetch_array($query_publisher)) {
                                $pid = $row_publisher['id'];
                                $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = $pid");
                                $row_publisher = mysqli_fetch_array($query_publisher);
                                echo '<h2>ID: <span>' . $row_publisher['id'] . '</span><br>Name: <span>' .  $row_publisher['name'] . '</span></h2><br>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>