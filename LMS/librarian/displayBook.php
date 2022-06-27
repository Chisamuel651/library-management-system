<?php
   include "../connection.php";
   include "headerL.php";
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
                    <span class="text">display book</span>
                    <hr>

                    <form action="" method="post" name=form1>
                        <input type="text" name="t1" class="form-control" placeholder="enter book name">
                        <input type="submit" value="search book" name="submit1" class="btn2">
                    </form>

                    <?php 

                    if(isset($_POST["submit1"])){
                        $res = mysqli_query($link, "select * from add_book where book_name like('$_POST[t1]')");
                        echo "<table class='table_border'>";
                        echo "<tr>";
                        echo "<th>"; echo "book name"; echo"</th>";
                        echo "<th>"; echo "book image"; echo"</th>";
                        echo "<th>"; echo "author name"; echo"</th>";
                        echo "<th>"; echo "publicator name"; echo"</th>";
                        echo "<th>"; echo "purchase date"; echo"</th>";
                        echo "<th>"; echo "book price"; echo"</th>";
                        echo "<th>"; echo "book quantity"; echo"</th>";
                        echo "<th>"; echo "available quantity"; echo"</th>";
                        echo "<th>"; echo "delete"; echo"</th>";
                        echo "</tr>";
                        while($row = mysqli_fetch_array($res)){
                          echo "<tr>";
                          echo "<td>"; echo $row["book_name"]; echo"</td>";
                          echo "<td>";?> <img src="<?php $row["book_img"]; ?> " height="100" width="100" alt="">  <?php echo"</td>";
                          echo "<td>"; echo $row["book_author_name"]; echo"</td>";
                          echo "<td>"; echo $row["book_publicator_name"]; echo"</td>";
                          echo "<td>"; echo $row["book_purchase_date"]; echo"</td>";
                          echo "<td>"; echo $row["book_price"]; echo"</td>";
                          echo "<td>"; echo $row["book_qty"]; echo"</td>";
                          echo "<td>"; echo $row["available_qty"]; echo"</td>";
                          echo "<td>"; ?><a href="deleteBook.php?id=<?php echo $row["id"]; ?>">delete</a> <?php echo"</td>";
                          echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else{

                      $res = mysqli_query($link, "select * from add_book");
                      echo "<table class='table_border'>";
                      echo "<tr>";
                      echo "<th>"; echo "book name"; echo"</th>";
                      echo "<th>"; echo "book image"; echo"</th>";
                      echo "<th>"; echo "author name"; echo"</th>";
                      echo "<th>"; echo "publicator name"; echo"</th>";
                      echo "<th>"; echo "purchase date"; echo"</th>";
                      echo "<th>"; echo "book price"; echo"</th>";
                      echo "<th>"; echo "book quantity"; echo"</th>";
                      echo "<th>"; echo "available quantity"; echo"</th>";
                      echo "<th>"; echo "delete"; echo"</th>";
                      echo "</tr>";
                      while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>"; echo $row["book_name"]; echo"</td>";
                        echo "<td>";?> <img src="<?php $row["book_img"]; ?> " height="100" width="100" alt="">  <?php echo"</td>";
                        echo "<td>"; echo $row["book_author_name"]; echo"</td>";
                        echo "<td>"; echo $row["book_publicator_name"]; echo"</td>";
                        echo "<td>"; echo $row["book_purchase_date"]; echo"</td>";
                        echo "<td>"; echo $row["book_price"]; echo"</td>";
                        echo "<td>"; echo $row["book_qty"]; echo"</td>";
                        echo "<td>"; echo $row["available_qty"]; echo"</td>";
                        echo "<td>"; ?><a href="deleteBook.php?id=<?php echo $row["id"]; ?>">delete</a> <?php echo"</td>";
                        echo "</tr>";
                      }
                      echo "</table>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
        include "footerL.php";
        ?>