<?php
include "connectdb.php";

$sql = "SELECT BookName,BookAuther,BookImage,Bookcontent FROM listcontent where BookName = '".$bookName."'";
$result = $conn->query($sql);
$content = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID: " . $row["ID"]. " - content: " . $row["content"];
    array_push($content,$row);
  }
} else {
  echo "0 results";
}
$conn->close();
require '../views/bookcontent.html';
?>