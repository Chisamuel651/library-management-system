<?php 
include "../connection.php";
$id = $_GET["id"];
$a = date("d-m-y"); 
$res = mysqli_query($link, "update issue_book set book_return_date = '$a' where id = $id");

$bookname = "";
$res = mysqli_query($link, "select * from issue_book where id = $id");
while($row = mysqli_fetch_array($res)){
    $bookname = $row["book_name"];
}
mysqli_query($link, "update add_book set available_qty= available_qty+1 where book_name = '$bookname'")
?>

<script type="text/javascript">
    window.location = "returnBook.php";
</script>