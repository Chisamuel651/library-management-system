<?php 
   include "headerL.php";
   include "../connection.php";
?>
        <div class="main_content">
            <div class="head">
                <div class="container">
                    <div class="rows">
                        <div class="bars padd-15">
                            <i class="fa-solid fa-bars"></i>
                        </div>
        
                        <div class="messages padd-15">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
        
                        <div class="profile padd-15">
                            <i class="fa-solid fa-user"></i>
                            <span>Alexis</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="content">
                <div class="title padd-15">
                    <h2>plain page</h2>
                </div>
                <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div>
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">plain page</span>
                    <hr>
                    <?php 
                        $res = mysqli_query($link,"select * from student_registration");
                        echo "<table class='table_border'>";

                        echo "<tr>";
                        echo "<th>"; echo "firstname"; echo "</th>";
                        echo "<th>"; echo "lastname"; echo "</th>";
                        echo "<th>"; echo "username"; echo "</th>";
                        echo "<th>"; echo "email"; echo "</th>";
                        echo "<th>"; echo "contact"; echo "</th>";
                        echo "<th>"; echo "sem"; echo "</th>";
                        echo "<th>"; echo "enrollment"; echo "</th>";
                        echo "<th>"; echo "status"; echo "</th>";
                        echo "<th>"; echo "yes"; echo "</th>";
                        echo "<th>"; echo "no"; echo "</th>";
                        echo "</tr>";

                        while($row = mysqli_fetch_array($res)){

                            echo "<tr>";
                            echo "<td class='data'>"; echo $row["firstname"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["lastname"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["username"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["email"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["contact"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["sem"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["enrollment_number"]; echo "</td>";
                            echo "<td class='data'>"; echo $row["status"]; echo "</td>";
                            echo "<td class='data'>";?> <a href="approve.php?id=<?php echo $row["student_id"]; ?>">accept</a> <?php echo "</td>";
                            echo "<td class='data'>";?> <a href="notapprove.php?id=<?php echo $row["student_id"]; ?>">reject</a> <?php echo "</td>";
                            echo "</tr>";

                        }
                        echo "</table>";
                    ?>
                </div>
            </div>
        </div>

        <?php
        include "footerL.php";
        ?>
</body>
</html>