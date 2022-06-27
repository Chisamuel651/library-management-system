<?php
//    session_start();
   include "../connection.php"; 
   include "header.php";
//    include "login.php";
?>
        <div class="main_content">
            <div class="head">
                <div class="container">
                    <div class="rows">
                        <div class="bars padd-15">
                            <i class="fa-solid fa-bars"></i>
                        </div>
        
                        <div class="messages padd-15">
                            <i class="fa-solid fa-envelope"  onclick = "window.location = 'receiveMessage.php';"></i>
                            <span class="notification"><?php echo $tot; ?></span>
                        </div>
        
                        <div class="profile padd-15">
                            <i class="fa-solid fa-user"></i>
                            <span>welcome</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="content">
                <div class="title padd-15">
                    <h2>my issued books</h2>
                </div>
                <div class="search_engine padd-15">
                    <a href="search.php">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                    </a>
                </div>
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">my issued books</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->
                    <table class="table_border">
                        <th>
                            enrollment no
                        </th>
                        <th>
                            book name
                        </th>
                        <th>
                            book issued date
                        </th>

                        <?php 
                            $res1 = mysqli_query($link, "select * from issue_book where student_username = '$_SESSION[username]'");
                            while($row1 = mysqli_fetch_array($res1)){
                                echo "<tr>";
                                echo "<td>";
                                echo $row1["student_enrollment"];
                                echo "</td>";

                                echo "<td>";
                                echo $row1["book_name"];
                                echo "</td>";

                                echo "<td>";
                                echo $row1["book_issue_date"];
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <?php
        include "footer.php";
        ?>
</body>
</html>