<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
?>

<head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <ul>
        <li class="li title"><a href="#home">Library Management System</a></li>
        <li class="li normal"><a href="#about">About</a></li>
        <li class="li normal"><a href="#add">Add</a></li>
        <li class="li normal"><a href="#search">Search</a></li>
        <li class="li normal"><a href="#home">Home</a></li>
    </ul>

    <section id="home">
        <form class="boxv box" action="index.php" method="post">
            <h1>Library Management System</h1>
            <a class="index_a" href="#search">Search</a>
            <a class="index_a" href="#add">Add</a>
        </form>
        <div class="rightarrow click">
            <a class="padding" href="#search"></a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="search">
        <div class="leftarrow click">
            <a class="padding " href="#home"></a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="boxv box" action="index.php" method="post">
            <h1>Search</h1>
            <a class="index_a" href="#search_members">Members</a>
            <a class="index_a" href="#search_books">Books</a>
        </form>
        <div class="rightarrow click">
            <a class="padding " href="#search_members"></a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="search_members">
        <div class="leftarrow click">
            <a class="padding " href="#search"></a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
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
        <div class="rightarrow click">
            <a class="padding " href="#search_books"></a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="search_books">
        <div class="leftarrow click">
            <a class="padding " href="#search_members"></a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="box" action="Search1.php" method="post">
            <h1> Search for Books</h1>
            <input type="number" name="id" placeholder="Book id" min="1" id="id">
            <input type="submit" name="search" value="Search">
            <input type="text" name="name" placeholder="Book Name" id="name">
            <input type="submit" name="search" value="Search">
            <input type="text" name="author" placeholder="Author" id='author'>
            <input type="submit" name="search" value="Search">
        </form>
        <div class="rightarrow click">
            <a class="padding " href="#add"></a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="add">
        <div class="leftarrow click">
            <a class="padding " href="#search_books">
                <a href="#search_books"></a></a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="boxv box" action="index.php" method="post">
            <h1>Add</h1>
            <a class="index_a" href="#add_members">Members</a>
            <a class="index_a" href="#add_books">Books</a>
        </form>
        <div class="rightarrow click">
            <a class="padding " href="#add_members"></a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="add_members">
        <div class="leftarrow click">
            <a class="padding " href="#add">
            </a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="boxv box" action="../admin/home.php" method="post">
            <h1> Add Members</h1>
            <input type="number" name="memid" placeholder="Member id" min="1">
            <input type="text" name="name" placeholder="Member Name">
            <input type="email" name="mememail" placeholder="Member email">
            <input type="tel" id="phone" name="phone" placeholder="Phone No. (include +91)" pattern="[+91]{3}[7-9]{1}[0-9]{9}" required>
            <input type="submit" name="add" value="Add">
        </form>
        <div class="rightarrow click">
            <a class="padding " href="#add_books">
            </a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="add_books">
        <div class="leftarrow click">
            <a class="padding " href="#add_members">
            </a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="boxv box" action="insertion.php" method="post">
            <h1> Add books</h1>
            <input type="number" name="id" placeholder="Book id" min="1" id="id">
            <input type="text" name="name" placeholder="Book Name" id="name">
            <input type="text" name="author" placeholder="Author" id="author">
            <input type="submit" name="add" value="Add">
        </form>
        <div class="rightarrow click">
            <a class="padding " href="#about">
            </a>
            <div class="rightarrow-top"></div>
            <div class="rightarrow-bottom"></div>
        </div>
    </section>

    <section id="about">
        <div class="leftarrow click">
            <a class="padding " href="#add_books">
            </a>
            <div class="leftarrow-top"></div>
            <div class="leftarrow-bottom"></div>
        </div>
        <form class="boxv box" action="../admin/home.php" method="post">
            <h1> About</h1>
            <h2>Project by,</h2>
            <h3>Swanand Khonde</h3>
            <h4>Roll no.<span> 24</span><br>Gr. no.<span> 1710071</span></h4>
            <h3>Varad Kulkarni</h3>
            <h4>Roll no. <span>37</span><br>Gr. no. <span>1710072</span></h4>
        </form>
    </section>

</body>

</html>