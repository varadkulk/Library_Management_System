<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Return book</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="return">
        <div class="boxv box">
            <form action="#return_book" method="post">
                <h1>Return Book</h1>
                <input type="number" name="id" placeholder="Book id" min="1" id="id">
                <input type="submit" name="return" value="Return">
                <a href="issue.php">Issue Book</a>
            </form>
            <div id="return_book" class="overlay">
                <div class="popup">
                    <a class="close" href="return.php">&times;</a>
                    <div class="content">
                        <?php
                        if (isset($_POST['return'])) {
                            $book = $_POST['id'];
                            $bookquery = mysqli_query($conn, "SELECT * FROM book WHERE id=$book");
                            $bookcount = mysqli_num_rows($bookquery);
                            $mb1query = mysqli_query($conn, "SELECT * FROM members WHERE book1id=$book");
                            $mb1count = mysqli_num_rows($mb1query);
                            $mb2query = mysqli_query($conn, "SELECT * FROM members WHERE book2id=$book");
                            $mb2count = mysqli_num_rows($mb2query);
                            if ($mb1count == 0 && $mb2count == 0)
                                echo "<h2>Book not issued</h2";
                            else if ($bookcount == 0)
                                echo "<h2>Book not found</h2";
                            else {
                                $bookrow = mysqli_fetch_array($bookquery);
                                if ($bookrow['status'] == 0) {
                                    echo "Book is not issued to anyone";
                                } else {
                                    if ($mb1count != 0) {
                                        $memrow = mysqli_fetch_array($mb1query);
                                        $mem = $memrow['id'];
                                        mysqli_query($conn, "UPDATE `members` SET `book1id` = 0 WHERE `members`.`id` = $mem;");
                                    } else if ($mb2count != 0) {
                                        $memrow = mysqli_fetch_array($mb2query);
                                        $mem = $memrow['id'];
                                        mysqli_query($conn, "UPDATE `members` SET `book2id` = 0 WHERE `members`.`id` = $mem;");
                                    }
                                    mysqli_query($conn, "UPDATE `book` SET `status` = 0 WHERE `book`.`id` = $book;");
                                    echo "Book Returned";
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