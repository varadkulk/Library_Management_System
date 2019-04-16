<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Issue books</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="issue">
        <div class="boxv box">
            <form action="#issue_book" method="post">
                <h1>Issue Book</h1>
                <input type="number" name="memid" placeholder="Member id" min="1" id="memid">
                <input type="number" name="bookid" placeholder="Book id" min="1" id="bookid">
                <input type="submit" name="issue" value="Issue">
                <a href="return.php">Return Book</a>
            </form>
            <div id="issue_book" class="overlay">
                <div class="popup">
                    <a class="close" href="issue.php">&times;</a>
                    <div class="content">
                        <?php
                        if (isset($_POST['issue'])) {
                            $mem = $_POST['memid'];
                            $book = $_POST['bookid'];
                            $bookquery = mysqli_query($conn, "SELECT * FROM book WHERE id=$book");
                            $bookcount = mysqli_num_rows($bookquery);
                            $memquery = mysqli_query($conn, "SELECT * FROM members WHERE id=$mem");
                            $memcount = mysqli_num_rows($memquery);
                            if ($bookcount == 0 && $memcount == 0)
                                echo "<h2>Book & Member not found</h2";
                            else if ($bookcount == 0)
                                echo "<h2>Book not found</h2";
                            else if ($memcount == 0)
                                echo "<h2>Member not found</h2";
                            else {
                                $bookrow = mysqli_fetch_array($bookquery);
                                $memrow = mysqli_fetch_array($memquery);
                                if ($bookrow['status'] != 0) {
                                    echo "Book is already issued";
                                } else {
                                    if ($memrow['book1id'] == 0) {
                                        echo "Data Inserted";
                                        mysqli_query($conn, "UPDATE `members` SET `book1id` = $book WHERE `members`.`id` = $mem;");
                                        mysqli_query($conn, "UPDATE `book` SET `status` = 1 WHERE `book`.`id` = $book;");
                                    } else if ($memrow['book2id'] == 0) {
                                        echo "Data Inserted";
                                        mysqli_query($conn, "UPDATE `members` SET `book2id` = $book WHERE `members`.`id` = $mem;");
                                        mysqli_query($conn, "UPDATE `book` SET `status` = 1 WHERE `book`.`id` = $book;");
                                    } else {
                                        echo "<h2>Maximum books are issued<br>Return books to issue new ones</h2>";
                                    }
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