<?php 
  include "../connection.php";

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    mysqli_query($link, "delete from add_book where id=$id");

    ?>

    <script type="text/javascript">
        window.location="displayBook.php";
    </script>
    <?php
  }else{
      ?>
    <script type="text/javascript">
    window.location="displayBook.php";
</script>
<?php
  }
?>