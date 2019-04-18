<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add books</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'headeradmin.php';
    include "connect.php"; ?>
    <section id="add_books">
        <div class="boxv box">
            <form action="#book_add" method="post">
                <h1> Add book</h1>
                <input type="text" name="name" placeholder="Name" id="name">
                <input type="text" name="author" placeholder="Author" id="author">
                <input type="number" name="pid" placeholder="Publisher id" min="1" id="pid">
                <input type="submit" name="add" value="Add">
                <a href="addpublisher.php">Add Publisher</a>
                <a href="addmembers.php">Add Member</a>
            </form>
            <div id="book_add" class="overlay">
                <div class="popup">
                    <a class="close" href="addbooks.php">&times;</a>
                    <div class="content">
                        <?php
                        if (isset($_POST['add'])) {
                            $name = $_POST['name'];
                            $author = $_POST['author'];
                            $pid = $_POST['pid'];
                            $query_publisher = mysqli_query($conn, "SELECT * FROM publisher WHERE id = '$pid';");
                            $count = mysqli_num_rows($query_publisher);
                            if ($count == "0") {
                                exit('<h2>Publisher not found!</h2>');
                            } else {
                                echo '<h1>Book Inserted</h1>';
                                mysqli_query($conn, "INSERT INTO `book` (`name`, `author`, `publisherid`) VALUES ( '$name', '$author', $pid)");
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