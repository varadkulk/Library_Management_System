<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add books</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="add_books">
        <div class="boxv box">
            <form action="#publisher_add" method="post">
                <h1> Add Publisher</h1>
                <input type="text" name="name" placeholder="Publisher Name" id="name">
                <input type="submit" name="add" value="Add">
                <a href="addbooks.php">Add Book</a>
                <a href="addmembers.php">Add Member</a>
            </form>
            <div id="publisher_add" class="overlay">
                <div class="popup">
                    <a class="close" href="searchbooks.php">&times;</a>
                    <div class="content">
                        <?php
                        if (isset($_POST['add'])) {
                            $name = $_POST['name'];
                            echo '<h1>Data Inserted</h1>';
                            mysqli_query($conn, "INSERT INTO `publisher` (`name`) VALUES ( '$name')");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>