<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Search Books</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="search_books">
        <div class="box">
            <form action="#book_search" method="post">
                <h1> Search for Books</h1>
                <input type="number" name="id" placeholder="Book id" min="1" id="id">
                <input type="submit" name="search_bid" value="Search">
            </form> 
            <form action="#book_search" method="post">
                <input type="text" name="name" placeholder="Book Name" id="name">
                <input type="submit" name="search_book" value="Search">
            </form>
            <form action="#book_search" method="post">
                <input type="text" name="author" placeholder="Author" id='author'>
                <input type="submit" name="search_author" value="Search">
            </form>

            <div id="book_search" class="overlay">
                <div class="popup">
                    <a class="close" href="#search_books">&times;</a>
                    <div class="content">
                        <h1>Book Info</h1>
                        <?php
                        if (isset($_POST['search_bid'])) {
                            $q = $_POST['id'];
                            $query_book = mysqli_query($conn, "SELECT * FROM book WHERE id = $q");
                            $count = mysqli_num_rows($query_book);
                            if ($count == "0") {
                                exit('<h2>No result found!</h2>');
                            } else {
                                while ($row_book = mysqli_fetch_array($query_book)) {
                                    $pid = $row_book['publisherid'];
                                    $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = $pid");
                                    echo '<h2>ID: <span>' . $row_book['id'] . '</span><br>Name: <span>' .  $row_book['name'] . '</span><br> Author: <span>' . $row_book['author'] . '</span></h2><br>';
                                }
                            }
                        } else if (isset($_POST['search_book'])) {
                            $q = $_POST['name'];
                            $query_book = mysqli_query($conn, "SELECT * FROM book WHERE name = '$q';");
                            $count = mysqli_num_rows($query_book);
                            if ($count == "0") {
                                exit('<h2>No result found!</h2>');
                            } else {
                                while ($row_book = mysqli_fetch_array($query_book)) {
                                    $pid = $row_book['publisherid'];
                                    $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = $pid");
                                    echo '<h2>ID: <span>' . $row_book['id'] . '</span><br>Name: <span>' .  $row_book['name'] . '</span><br> Author: <span>' . $row_book['author'] . '</span></h2><br>';
                                }
                            }
                        } else if (isset($_POST['search_author'])) {
                            $q = $_POST['author'];
                            $query_book = mysqli_query($conn, "SELECT * FROM book WHERE author = '$q';");
                            $count = mysqli_num_rows($query_book);
                            if ($count == "0") {
                                exit('<h2>No result found!</h2>');
                            } else {
                                while ($row_book = mysqli_fetch_array($query_book)) {
                                    $pid = $row_book['publisherid'];
                                    $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = $pid");
                                    echo '<h2>ID: <span>' . $row_book['id'] . '</span><br>Name: <span>' .  $row_book['name'] . '</span><br> Author: <span>' . $row_book['author'] . '</span></h2><br>';
                                }



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