<?php
include "connectdb.php";

/*$q = isset($_GET["conn_id"]) ? intval($_GET["conn_id"]) : '';
 
if(empty($q)) {
    //echo 'select a time period!';
    echo "select a book to delete";
    exit;
}*/
$listId = $_POST['timelistId'];
$bookName = $_POST['BookName'];
$bookAuthor = $_POST['BookAuthor'];
$bookImage = $_POST['BookImage'];
$bookCotent = $_POST['BookContent'];


$sql = "INSERT INTO listcontent ( TimelistID, BookName,BookAuther,BookImage,BookContent )
                       VALUES
                       ('$listId', '$bookName','$bookAuthor','$bookImage','$bookCotent');";

echo "$sql";
$result = $conn->query($sql);

$conn->close();
require 'adminbooklist.php';


?>