<?php
include "connectdb.php";

$q = isset($_GET["conn_id"]) ? intval($_GET["conn_id"]) : '';
 
if(empty($q)) {
    //echo 'select a time period!';
    echo "select a book to delete";
    exit;
}

$sql = "DELETE FROM listcontent WHERE ID = '".$q."'";
$result = $conn->query($sql);

$conn->close();
  require 'adminbooklist.php';

/*if ($result->num_rows > 0) {
  // back to page
  $conn->close();
  require '../views/adminbooklist.html';
  }
} else {
  echo "0 delete";
  $conn->close();
}*/

?>