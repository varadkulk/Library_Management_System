<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add Members</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="add_members">
        <div class="boxv box">
            <form action="#member_add" method="post">
                <h1> Add Member</h1>
                <input type="text" name="name" placeholder="Member Name" id="name">
                <input type="email" name="email" placeholder="Member email" id="email">
                <input type="tel" id="phone" name="phone" placeholder="Phone No. (include +91)" id="phone" pattern="[+91]{3}[7-9]{1}[0-9]{9}" required>
                <input type="submit" name="add" value="Add">
                <a href="addbooks.php">Add Book</a>
                <a href="addpublisher.php">Add Publisher</a>
            </form>
            <a href="addbooks.php">Search for members</a>
            <div id="member_add" class="overlay">
                <div class="popup">
                    <a class="close" href="addmembers.php">&times;</a>
                    <div class="content">
                        <?php
                        if (isset($_POST['add'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            echo '<br><h2>Data Inserted</h2>';
                            mysqli_query($conn, "INSERT INTO `members` (`name`, `email`, `phone`) VALUES ( '$name', '$email', $phone)");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>