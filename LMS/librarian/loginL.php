<?php
session_start();
   include "../connection.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
    <div class="login_wrapper">
        <section class="login_contact">
            <form action="" name="form1" method="post">
                <h2>user login form</h2>

                <div class="inputBox">
                    <input type="text" name="username" class="form-control" required />
                    <span>user name</span>
                </div>

                <div class="inputBox">
                    <input type="password" name="password" class="form-control" required />
                    <span>password</span>
                </div>

                <div class="submit">
                    <input type="submit" value="login" name="submit1" class="btn btn-login submit">
                </div>

                <a class="reset_pass" href="#">can't remember password?</a>

                <div class="clearfix"></div>

                <div class="new">
                    <p class="newlink">New here? <a href="registration.php">create account</a></p>
                </div>
            </form>

        </section>
    </div>
    </div>

    <?php
        if(isset($_POST["submit1"]))
        {
            $count = 0;
            $res = mysqli_query($link, "select * from librarian_registration where username = '$_POST[username]' && password = '$_POST[password]'");
            $count = mysqli_num_rows($res);

            if($count == 0){
                ?>
                <div class="error_message">
                    Username or password incorrect
                </div>

                <?php
            }
            else{
                $_SESSION["username"]= $_POST["username"];
                ?>
                   <script type="text/javascript">
                       window.location = "../home page/index.php";
                   </script>
                <?php
            }
        }
        ?>


</body>
</html>