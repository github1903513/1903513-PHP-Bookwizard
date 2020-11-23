<?php
include "connectdb.php";
  $_GET['target'];

$sql = "SELECT ID,content FROM timelist";
$result = $conn->query($sql);
$list = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID: " . $row["ID"]. " - content: " . $row["content"];
    array_push($list,$row);
  }
} else {
  echo "0 results";
}
$conn->close();

if($_GET['target'] != null)
{
  if ($_GET['target'] == 'show') {require '../views/booklist.html';}
  elseif ($_GET['target'] == 'add') {require '../views/add.html';}
}

?>