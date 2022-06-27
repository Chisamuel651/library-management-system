<?php
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
        <div class="login_contact">
            <form name="form1" method="post">
                <h2>student registration form</h2>

                <div class="inputBox">
                    <input type="text" class="form-control" name="firstname" required />
                    <span>first name</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="lastname" required />
                    <span>last name</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="username" required />
                    <span>user name</span>
                </div>
                <div class="inputBox">
                    <input type="password" class="form-control" name="password" required />
                    <span>password</span>
                </div>
                <div class="inputBox">
                    <input type="email" class="form-control" name="email" required />
                    <span>email</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="contact" required />
                    <span>contact</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="sem" required />
                    <span>sem</span>
                </div>
                <div class="inputBox">
                    <input type="text" class="form-control" name="enrollmentno" required />
                    <span>enrollment No</span>
                </div>
                <div class="submit col-12">
                    <input type="submit" value="Register" name="submit1" class="btn btn-default submit">
                </div>
            </form>
</div>
    </div>
    </div>

        <?php
           if(isset($_POST["submit1"])){
                mysqli_query($link, "insert into student_registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[sem]','$_POST[enrollmentno]', 'no')");
                ?>
                <!-- <div class="container">
                    <div class="signal">
                        <div class="alert alert-success">
                            Registration successful. A message will be sent when account is verified
                        </div>
                    </div>
                </div> -->
                <script type="text/javascript">
                    alert('successfully registered');
                    window.location = "../homepage2/index.php";
                </script>
                <?php

           }
        ?>
</body>
</html>