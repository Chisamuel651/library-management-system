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
                    <!-- <h2>plain page</h2> -->
                </div>
                <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div>
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">books with student</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->
                    <?php
                        $i=0;
                        $res = mysqli_query($link, "select * from add_book where available_qty > 0");
                        echo "<table class='table_border'>";
                        echo "<tr>";
 
                        while($row = mysqli_fetch_array($res)){
                            $i = $i + 1;
                            echo "<td>";
                            ?> <img src="../<?php echo $row["book_img"]; ?>" height = "100" width = "100" alt=""> <?php
                            echo "<br>";
                            echo $row["book_name"];
                            echo "<br>";
                            echo "total books ".$row["book_qty"];
                            echo "<br>";
                            echo "<b>"."available: ".$row["available_qty"]."</b>";
                            echo "<br>";
                            ?> <a href="allStudentOfBook.php?book_name=<?php echo $row["book_name"]; ?>" style="color: red;">student who demand</a> <?php

                            echo "</td>";
 
                            if($i==2){
                                echo "</tr>";
                                echo "<tr>";
                                $i = 0;
                            }
                        }
                        echo "</tr>";
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