<?php
include "../connection.php";
session_start();
$tot = 0;
$res = mysqli_query($link, "select * from message where dusername = '$_SESSION[username]' && read1 = 'n'");
$tot = mysqli_num_rows($res);
// $tot1 = 0;
// $res1 = mysqli_query($link, "select * from student_registration where username = '$_SESSION[username]'");
// $tot1 = mysqli_result($res1);

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
        <section class="header">
            <div class="aside_content">
                <div class="logo">
                    <a href="#">library</a>
                </div>
    
                <div class="nav_toggler">
                    <span></span>
                </div>
    
                <ul class="nav">
                    <li><a href="../homepage2/index.php" class="active"><i class="fa-solid fa-house"></i> home</a></li>
                    <li>
                        <a href="myIssuedBooks.php"><i class="fa-solid fa-book"></i>my books</a>
                </li>
                </ul>
            </div>
        </section>

        