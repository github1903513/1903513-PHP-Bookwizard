<?php
include "connectdb.php";
include "Image.php";

$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
 
if(empty($q)) {
    //echo 'select a time period!';
    echo "select a period";
    exit;
}

$sql = "SELECT * FROM listcontent where TimelistID = '".$q."'";
$result = $conn->query($sql);
$list = [];

echo "$sql";

echo "
<table class='table table-hover'><thead >
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>BookName</th>
      <th scope='col'>BookAuther</th>
      <th scope='col'>BookImage(click)</th>
    </tr>
  </thead>
  <tbody>  ";
  $i = 1;
  while($row = mysqli_fetch_array($result))
{
    //echo "<td onClick=\"return displaycontent('".$row['BookName']."');\">";
    echo "<tr data-toggle='modal' data-target='#exampleModalLong'>";
    echo "<th scope='row'>" .$i++ . "</th>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['BookAuther'] . "</td>";
    $imgpath = $row['BookImage'];
    
    
    //echo "<td><a href='#exampleModalCenter".$i."' data-toggle='modal' ><img src=\"../../upload/$imgpath\" class='img-fluid'></img></a></td>"; 
    echo "<td><a href='#exampleModalCenter".$i."' data-toggle='modal' ><img src=\"$imgpath\" class='img-fluid'></img></a></td>";
    echo "</tr>";

    echo "
    <div class='modal fade' id='exampleModalCenter".$i."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalCenterTitle'>".$row['BookName']."</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>".
        $row['BookContent']."
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>
</div>";
}

echo "</tbody>
</table>";
$conn->close();

?>