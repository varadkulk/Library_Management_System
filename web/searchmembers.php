<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Search Members</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="search_members">
        <div class="box">
            <form action="#member_search" method="post">
                <h1> Search for Members</h1>
                <input type="number" name="id" placeholder="Member id" min="1">
                <input type="submit" name="search_id" value="Search">
            </form>
            <form action="#member_search" method="post">
                <input type="text" name="name" placeholder="Member Name">
                <input type="submit" name="search_name" value="Search">
            </form>
            <form action="#member_search" method="post">
                <input type="email" name="email" placeholder="Member email">
                <input type="submit" name="search_email" value="Search">
            </form>
            <form action="#member_search" method="post">
                <input type="tel" id="phone" name="phone" placeholder="Phone No. (include +91)" pattern="[+91]{3}[6-9]{1}[0-9]{9}" required>
                <input type="submit" name="search_phone" value="Search">
            </form>
            <a href="searchbooks.php">Search for books</a>
            <div id="member_search" class="overlay">
                <div class="popup">
                    <a class="close" href="searchmembers.php">&times;</a>
                    <div class="content">
                        <h1>Member Info</h1>
                        <?php
                        if (isset($_POST['search_id'])) {
                            $q = $_POST['id'];
                            $query_member = mysqli_query($conn, "SELECT * FROM members WHERE id = $q");
                        } else if (isset($_POST['search_name'])) {
                            $q = $_POST['name'];
                            $query_member = mysqli_query($conn, "SELECT * FROM members WHERE name = '$q';");
                        } else if (isset($_POST['search_email'])) {
                            $q = $_POST['email'];
                            $query_member = mysqli_query($conn, "SELECT * FROM members WHERE email like '  $q';  ");
                        } else if (isset($_POST['search_phone'])) {
                            $q = $_POST['phone'];
                            $query_member = mysqli_query($conn, "SELECT * FROM members WHERE phone =   '$q'  ;");
                        }
                        $count = mysqli_num_rows($query_member);
                        if ($count == "0") {
                            exit('<h2>No result found!</h2>');
                        } else {
                            while ($row_member = mysqli_fetch_array($query_member)) {
                                $bid1 = $row_member['book1id'];
                                $query_book1 = mysqli_query($conn, "SELECT * FROM book1 WHERE id = $bid1");
                                echo '<h2>ID: <span>' . $row_member['id'] . '</span><br>Name: <span>' .  $row_member['name'] . '</span><br> Email: <span>' . $row_member['email'] . '</span><br> Phone: <span>+' . $row_member['phone'] . '</span></h2><br>';
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