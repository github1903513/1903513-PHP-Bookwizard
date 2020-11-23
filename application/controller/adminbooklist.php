<?php
include "connectdb.php";
include "Image.php";




$sql = "select a.content,b.ID,b.TimelistID,b.BookName,b.BookAuther from timelist a , listcontent b where a.ID = b.TimelistID";
$result = $conn->query($sql);
$list = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID: " . $row["ID"]. " - content: " . $row["content"];
    array_push($list,$row);
  }
} else {
  //echo "0 results";
}
$conn->close();

if (!isset ($_SESSION['username']))
{
  if(isset ($_COOKIE['username']))
  {
    $_SESSION['username'] = $_COOKIE['username'];
  }
}
if(isset ($_SESSION['username']))
{
 require '../views/adminbooklist.html';
}


?>