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
                    <h2>issue book</h2>
                </div>
                <div class="search_engine padd-15">
                    <input type="search" name="search" id="searchbox" placeholder="search for book">
                    <button class="response">Go</button>
                </div>
            </div>
    
            <div class="middle_content padd-15">
                <div class="sub_title padd-15">
                    <span class="text">issue book</span>
                    <hr>
                    <form action="" method="post" name="form1">
                        <table>
                            <tr>
                                <td>
                                    <select class="submit_btn1" name="enr" id="">
                                        <!-- <option>A</option>
                                        <option>B</option> -->
                                        <?php 
                                            $res = mysqli_query($link, "select enrollment_number from student_registration");
                                            while($row = mysqli_fetch_array($res)){
                                                echo "<option>";
                                                echo $row["enrollment_number"];
                                                echo "</option>";
                                            }
                                        ?>
                                    </select>
                                </td>

                                <td>
                                    <input type="submit" value="search" name="submit1" class="btn2">
                                </td>                              
                            </tr>
                        </table>


                    <?php 
                        if(isset($_POST["submit1"])){
                            // echo "hello";
                            // echo $_POST["enr"];
                            $res5 = mysqli_query($link, "select * from student_registration where enrollment_number = '$_POST[enr]'");
                            while($row5 = mysqli_fetch_array($res5)){
                                $firstname = $row5["firstname"];
                                $lastname = $row5["lastname"];
                                $username = $row5["username"];
                                $email = $row5["email"];
                                $contact = $row5["contact"];
                                $sem = $row5["sem"];
                                $enrollment = $row5["enrollment_number"];
                                $_SESSION["enrollment"] = $enrollment;
                                $_SESSION["sUsername"] = $username;
                            }
                            ?>
                    <table class="table table_border">
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $enrollment; ?>" name="enrollment" class="form-control" placeholder="enrollment no" disabled/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo $firstname.' '.$lastname; ?>" name="studentname" class="form-control" placeholder="student name" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo $sem; ?>" name="studentsem" class="form-control" placeholder="student sem" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo $contact; ?>" name="studentcontact" class="form-control" placeholder="student contact" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo $email; ?>" name="studentemail" class="form-control" placeholder="student email" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <select name="bookname" class="form-control">
                                    <?php 
                                        $res = mysqli_query($link, "select book_name from add_book");
                                        while($row = mysqli_fetch_array($res)){
                                            echo "<option>";
                                            echo $row["book_name"];
                                            echo "</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo date("d-m-y"); ?>" name="bookIssueDate" class="form-control" placeholder="book issue date" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" value="<?php echo $username; ?>" name="studentusername" class="form-control" placeholder="student username" disabled/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit2" class="form-control" value="issue books" style="background-color: blue; color: white;"/>
                            </td>
                        </tr>
                    </table>
                            <?php
                        }
                    ?>
                    </form> 
                    
                    <?php 
                       if(isset($_POST["submit2"])){
                           $qty = 0;
                           $res = mysqli_query($link, "select * from add_book where book_name = '$_POST[bookname]'");
                           while($row= mysqli_fetch_array($res))
                           {
                               $qty = $row["available_qty"];
                           }


                           if($qty == 0 ){
                               ?>
                               <div class="alert">
                                   <strong>this book is not available</strong>
                               </div>
                               <?php

                           }else{


                           mysqli_query($link, "insert into issue_book values(NULL,'$_SESSION[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[bookname]','$_POST[bookIssueDate]','','$_SESSION[sUsername]')");
                           mysqli_query($link, "update add_book set available_qty= available_qty-1 where book_name = '$_POST[bookname]'");

                           ?>
                           <script type="text/javascript">
                               alert("book issued successfully");
                               window.location.href = window.location.href;
                           </script>
                           <?php
                           }
                       }
                    ?>
                </div>
            </div>
        </div>


<?php
    include "footerL.php";
?>