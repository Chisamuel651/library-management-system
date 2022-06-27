<?php 
   include "header.php";
   include "../connection.php";
   $res = mysqli_query($link, "update message set read1 = 'y' where dusername = '$_SESSION[username]'");
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
                    <h2>Notification</h2>
                </div>
                <!-- <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div> -->
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">receive notification</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->
                    <table class="table_border">
                        <tr>
                        <th>full name</th>
                        <th>title</th>
                        <th>message</th>
                        </tr>

                        <?php
                           $fullname=null; 
                           $res = mysqli_query($link, "select * from message where dusername = '$_SESSION[username]' order by id desc");
                           while($row = mysqli_fetch_array($res)){

                            $res1 = mysqli_query($link, "select * from librarian_registration where username = '$row[susername]'");
                            while($row1 = mysqli_fetch_array($res1)){
                                $fullname = $row1["firstname"]." ".$row1["lastname"];
                            }

                               echo "<tr>"; 
                                  echo "<td>"; echo $fullname; echo "</td>";
                                  echo "<td>"; echo $row["title"]; echo "</td>";
                                  echo "<td>"; echo $row["msg"]; echo "</td>";
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