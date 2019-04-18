<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>
    <?php
    include 'connect.php';
    include 'header.php'; ?>
    <section id="signin">
        <div class="boxv box">
            <form action="#sign_in" method="post">
                <h1>Sign In</h1>
                <input type="email" name="email" placeholder="Email" id="email">
                <input type="password" name="password" placeholder="Password" id="password" pattern=".{5,}" title="Five or more characters">
                <input type="submit" name="signin" value="Sign In">
                <a href="signup.php">Sign Up</a>
            </form>
            <div id="sign_in" class="overlay">
                <div class="popup">
                    <a class="close" href="signin.php">&times;</a>
                    <div class="content">
                        <h1>Sign In</h1>
                        <?php
                        if (isset($_POST['signin'])) {
                            $email = $_POST['email'];
                            $query_admin = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
                            $pass = md5($_POST['password']);
                            $count = mysqli_num_rows($query_admin);
                            if ($count == "0") {
                                exit('<h2>Incorrect email</h2>');
                            } else {
                                while ($row_admin = mysqli_fetch_array($query_admin)) {
                                    if ($row_admin['password'] == $pass) {
                                        session_start();
                                        header("Location:adminhome.php");
                                    } else
                                        echo "<h2>Incorrect password</h2>";
                                }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>