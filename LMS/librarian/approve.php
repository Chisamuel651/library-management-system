
<?php 
  include "../connection.php";

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    mysqli_query($link,"update student_registration set status = 'yes' where student_id = $id");

    ?>

    <script type="text/javascript">
        window.location="displayStudentInfo.php";
    </script>
    <?php
  }else{
      ?>
    <script type="text/javascript">
    window.location="displayStudentInfo.php";
</script>
<?php
  }
?>