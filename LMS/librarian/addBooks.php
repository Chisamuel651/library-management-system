<?php
session_start(); 
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
                    <span class="text">plain page</span>
                    <hr>
                    <form action="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
                    <table class="table table_border">
                        <tr>
                        <td>
                            <input type="text" name="booksname" class="form-control" placeholder="books name" required />
                        </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="text" placeholder="books author name" class="form-control" name="bauthorname" require />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="text" placeholder="publication name" class="form-control" name="pname" require />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="date" placeholder="books purchase date" class="form-control" name="bpurchasedate" require />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="text" placeholder="book price" class="form-control" name="bprice" require />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="text" placeholder="books quantity" class="form-control" name="bquantity" require />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <hr>
                                <input type="text" placeholder="available quantity" class="form-control" name="aquantity" require />
                            </td>
                        </tr>

                        <tr>
                        <td>
                            <hr>
                            <p>book image</p>
                            <input type="file" name="f1" required>
                        </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit1" class="submit_btn" value="insert book details">
                            </td>
                        </tr>


                    </table>
                    </form>
                </div>
            </div>
        </div>


        <?php 
            if(isset($_POST["submit1"])){

                $tn = md5(time());
                $f1 = $_FILES["f1"]["name"];
                $data = "../book_image".$tn.$f1;
                $data1 = "book_image".$tn.$f1;

                move_uploaded_file($_FILES["f1"]["tmp_name"],$data1);
                mysqli_query($link, "insert into add_book values(NULL,'$_POST[booksname]','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedate]','$_POST[bprice]','$_POST[bquantity]','$_POST[aquantity]','$_SESSION[librarian]','$data1')");
                ?>

                <script type="text/javascript">
                    alert("book successflly inserted");
                </script>
                <?php
            }
        ?>
        
        <?php
        include "footerL.php";
        ?>
</body>
</html>