<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php
    include 'connect.php';
    include 'header.php'; ?>
    <section id="signin">
        <div class="boxv box">
            <form action="#sign_up" method="post">
                <h1>Admin Sign Up</h1>
                <input type="text" name="name" placeholder="Name" id="name">
                <input type="email" name="email" placeholder="Email" id="email">
                <input type="password" name="password" placeholder="Password" id="password" pattern=".{5,}" title="Five or more characters">
                <input type="password" name="repassword" placeholder="Retype Password" id="password" pattern=".{5,}" title="Five or more characters">
                <input type="password" id="ac" name="ac" placeholder="Access Code">
                <input type="submit" name="signup" placeholder="Sign Up">
                <a href="signin.php">Sign In</a>
            </form>
            <div id="sign_up" class="overlay">
                <div class="popup">
                    <a class="close" href="signup.php">&times;</a>
                    <div class="content">
                        <h1>Sign Up</h1>
                        <?php
                        if (isset($_POST['signup'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $pass = md5($_POST['password']);
                            $repass = md5($_POST['repassword']);
                            $ac = $_POST['ac'];
                            $query_member = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
                            $count = mysqli_num_rows($query_member);
                            if ($count == "0") {
                                if ($pass != $repass)
                                    exit('<h2>Passwords dont match<h2>');
                                if ($ac == 1234) {
                                    mysqli_query($conn, "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ( '$name', '$email','$pass')");
                                    echo '<h2>Sign up sucessful</h2>';
                                }
                            } else
                                exit('<h2>Email already exists</h2>');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>