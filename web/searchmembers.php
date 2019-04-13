<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Search Members</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="search_members">
        <form class="box" action="../admin/home.php" method="post">
            <h1> Search for Members</h1>
            <input type="number" name="mem_id" placeholder="Member id" min="1">
            <input type="submit" name="search" value="Search">
            <input type="text" name="name" placeholder="Member Name">
            <input type="submit" name="search" value="Search">
            <input type="email" name="email" placeholder="Member email">
            <input type="submit" name="search" value="Search">
            <input type="tel" id="phone" name="phone" placeholder="Phone No. (include +91)" pattern="[+91]{3}[7-9]{1}[0-9]{9}" required>
            <input type="submit" name="search" value="Search">
        </form>
    </section>
</body>

</html>