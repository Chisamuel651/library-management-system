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
                    <span class="text">record of student</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->
                    <?php 
                      $res = mysqli_query($link, "select * from issue_book where book_name = '$_GET[book_name]' && book_return_date = ''");
                      echo "<table class='table_border'>";
                      echo "<tr>";
                      echo "<th>"; echo "student name"; echo "</th>";
                      echo "<th>"; echo "enrollment no"; echo "</th>";
                      echo "<th>"; echo "book name"; echo "</th>";
                      echo "<th>"; echo "email"; echo "</th>";
                      echo "<th>"; echo "contact"; echo "</th>";
                      echo "<th>"; echo "book issue date"; echo "</th>";
                      echo "</tr>";
                      while($row =  mysqli_fetch_array($res)){
                          echo "<tr>";
                          echo "<td>"; echo $row["student_name"]; echo "</td>";
                          echo "<td>"; echo $row["student_enrollment"]; echo "</td>";
                          echo "<td>"; echo $row["book_name"]; echo "</td>";
                          echo "<td>"; echo $row["student_email"]; echo "</td>";
                          echo "<td>"; echo $row["student_contact"]; echo "</td>";
                          echo "<td>"; echo $row["book_issue_date"]; echo "</td>";
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