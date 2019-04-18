<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Search Books</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php

    include 'headeradmin.php';
    include "connect.php"; ?>
    <section id="search_books">
        <div class="box">
            <h1>Books</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publisher Id</th>
                    <th>Publisher Name</th>
                </tr>
                <?php
                $bookquery = (mysqli_query($conn, "SELECT * FROM book"));
                while ($row_book = mysqli_fetch_array($bookquery)) {
                    $pid = $row_book['publisherid'];
                    $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = $pid");
                    $row_publisher = mysqli_fetch_array($query_publisher);
                    echo '<tr>
            <th>' . $row_book['id'] . '</th>
            <th>' . $row_book['name'] . '</th> 
            <th>' . $row_book['author'] . '</th> 
            <th>' . $row_book['publisherid'] . '</th> 
            <th>' . $row_publisher['name'] . '</th> 
        </tr>';
                }
                ?>
            </table>
        </div>
    </section>

</body>

</html>