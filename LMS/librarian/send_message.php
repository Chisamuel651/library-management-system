<?php 
   session_start();
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
                    <h2>send message</h2>
                </div>
                <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div>
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">send message</span>
                    <hr>
                    <!-- <p class="paragraph">add some content to the page</p> -->

                    <form action="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data">
                    <table class="table_border">
                        <tr>
                        <td>
                            <select class="form-control" name="dusername">
                                <?php 
                                   $res = mysqli_query($link, "select * from student_registration");
                                   while($row = mysqli_fetch_array($res)){
                                       ?>
                                       <option value="<?php echo $row["username"]; ?>">
                                           <?php echo $row["username"]." (". $row["enrollment_number"].")"; ?>
                                       </option>
                                       <?php
                                   }
                                ?>
                                <!-- <option></option> -->
                            </select>
                        </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="form">message</span> 
                                <br>
                                <textarea name="msg" class="form-control">

                                </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit1" value="send message" class="btn2">
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

        <?php 
            if(isset($_POST["submit1"])){
                mysqli_query($link, "insert into message values(NULL,'$_SESSION[librarian]','$_POST[dusername]','$_POST[title]','$_POST[msg]','n')");
                ?>
                <script type="text/javascript">
                    alert("message sent successfully");
                </script>
                <?php
            }
        ?>

        <?php
        include "footerL.php";
        ?>
</body>
</html>