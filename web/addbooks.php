<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add books</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include 'header.php';
    include "connect.php"; ?>

    <section id="add_books">
        <form class="boxv box" action="insertion.php" method="post">
            <h1> Add books</h1>
            <input type="text" name="name" placeholder="Book Name" id="name">
            <input type="text" name="author" placeholder="Author" id="author">
            <input type="number" name="publisherid" placeholder="Publisher id" min="1" id="id">
            <input type="submit" name="add" value="Add">
        </form>
    </section>

</body>

</html>