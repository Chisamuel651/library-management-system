<?php 
include "../connection.php";
   include "header.php";
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
                            <span>welcome</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="content">
                <div class="title padd-15">
                    <!-- <h2></h2> -->
                </div>
                <!-- <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div> -->
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">search book</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->
                    <!-- search -->
                    <form action="" name = "form1" method="post">
                        <table class="table_border">
                            <tr>
                                <td>
                                    <input type="text" name="t1" placeholder="enter book name" id="" class="form-control" required/>
                                </td>
                                <td>
                                    <input type="submit" value="search book" name="submit1" class="form-control" style="background-color: blue; color: #fff; cursor: pointer;">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php 
                       if(isset($_POST["submit1"])){
                        $i=0;
                        $res = mysqli_query($link, "select * from add_book where book_name like('%$_POST[t1]%')");
                        echo "<table class='table_border'>";
                        echo "<tr>";
 
                        while($row = mysqli_fetch_array($res)){
                            $i = $i + 1;
                            echo "<td>";
                            ?> <img src="../<?php echo $row["book_img"]; ?>" height = "100" width = "100" alt=""> <?php
                            echo "<br>";
                            echo $row["book_name"];
                            echo "<br>";
                            echo "<b>"."available: ".$row["available_qty"]."</b>";
                            echo "</td>";
 
                            if($i==2){
                                echo "</tr>";
                                echo "<tr>";
                                $i = 0;
                            }
                        }
                        echo "</tr>";
                        echo "</table>";
                       }
                       else{
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
                            echo "<b>"."available: ".$row["available_qty"]."</b>";
                            echo "</td>";
 
                            if($i==2){
                                echo "</tr>";
                                echo "<tr>";
                                $i = 0;
                            }
                        }
                        echo "</tr>";
                        echo "</table>";
                       }
                    ?>
                </div>
            </div>
        </div>

        <?php
        include "footer.php";
        ?>
</body>
</html>