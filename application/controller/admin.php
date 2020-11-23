<?php
include "connectdb.php";

if (!isset ($_SESSION['username']))
{
  if(isset ($_COOKIE['username']))
  {
    $_SESSION['username'] = $_COOKIE['username'];
  }
}
if(isset ($_SESSION['username']))
{
 //require 'adminbooklist.php';  
 header('Location: adminbooklist.php');
exit;
}

if ( ( $_POST['userName'] != null ) && ( $_POST['passWord'] != null ) ) {
    $userName = $_POST['userName'];
    $password = $_POST['passWord'];

    $sql = "select * from admin where userName = '$userName' and passWord = '$password'";
    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($res);
    //if ($row['password'] == md5($password)) {                           //md5(trim($_POST['password']))
    if ($row != null) {     
        setcookie('username',$userName,time()+60*60*24*1);//1 day
        setcookie('password',$password,time()+60*60*24*1);
        
        $conn->close();
        require 'adminbooklist.php';  
    }
    else
    {
        $conn->close();
        require '../views/admin.html';  
    }
}
else{
    $conn->close();
    require '../views/admin.html';  
}
?>