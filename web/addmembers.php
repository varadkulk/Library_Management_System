<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add Members</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="add_members">
        <form class="boxv box" action="../admin/home.php" method="post">
            <h1> Add Members</h1>
            <input type="number" name="memid" placeholder="Member id" min="1">
            <input type="text" name="name" placeholder="Member Name">
            <input type="email" name="mememail" placeholder="Member email">
            <input type="tel" id="phone" name="phone" placeholder="Phone No. (include +91)" pattern="[+91]{3}[7-9]{1}[0-9]{9}" required>
            <input type="submit" name="add" value="Add">
        </form>
    </section>
</body>

</html>