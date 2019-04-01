<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
        <ul>
            <li class="title"><a href="#home">Library Management System</a></li>
            <li class="normal"><a href="#about">About</a></li>
            <li class="normal"><a href="#add">Add</a></li>
            <li class="normal"><a href="#search">Search</a></li>
            <li class="normal"><a href="#home">Home</a></li>
        </ul>

        <section id="home">
            <form class="boxv box" action="index.php" method="post">
                <h1>Library Management System</h1>
                <a class="index_a" href="#search">Search</a>
                <a class="index_a" href="#add">Add</a>
            </form>
        </section>

        <section id="search">
            <form class="boxv box" action="index.php" method="post">
                <h1>Search</h1>
                <a class="index_a" href="#search_members">Members</a>
                <a class="index_a" href="#search_books">Books</a>
            </form>
        </section>

        <section id="search_members">
            <form class="box" action="../admin/home.php" method="post">
                <h1> Search for Members</h1>
                <input type="number" name="memid" placeholder="Member id" min="1">
                <input type="submit" name="search" value="Search">
                <input type="text" name="memname" placeholder="Member Name">
                <input type="submit" name="search" value="Search">
                <input type="email" name="mememail" placeholder="Member email">
                <input type="submit" name="search" value="Search">
            </form>
        </section>

        <section id="search_books">
            <form class="box" action="../admin/home.php" method="post">
                <h1> Search for Books</h1>
            </form>
        </section>

        <section id="add">
            <form class="boxv box" action="index.php" method="post">
                <h1>Search</h1>
                <a class="index_a" href="#add_members">Members</a>
                <a class="index_a" href="#add_books">Books</a>
            </form>
        </section>

        <section id="add_members">
            <form class="boxv box" action="../admin/home.php" method="post">
                <h1> Add Members</h1>
            </form>
        </section>

        <section id="add_books">
            <form class="boxv box" action="../admin/home.php" method="post">
                <h1> Add books</h1>
            </form>
        </section>

        <section id="about">
            <form class="boxv box" action="../admin/home.php" method="post">
                <h1> About</h1>
                <h2>Project by,</h2>
                <h3>Swanand Khonde</h3>
                <h4>Roll no. 24<br>Gr. no. 1710071</h4>
                <h3>Varad Kulkarni</h3>
                <h4>Roll no. 37<br>Gr. no. 1710072</h4>
            </form>
        </section>

</body>

</html> 