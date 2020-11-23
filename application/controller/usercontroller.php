<?php
class UserController {
 function __construct(){
     //  db connect

        $this->link = mysqli_connect("localhost","root","","bookwizard");
        mysqli_set_charset($this->link,"utf8");
    }

   Public function selectList() //read booklist
   {
       if(!empty($_POST)){
         $listId = $_POST['listId'];

         $sql = "SELECT * FROM timelist ";
            $res = mysqli_query($this->link,$sql);
            $r = mysqli_fetch_assoc($res);

             if(empty($r)){
                $errinfo = "list is empty!";
                require 'default.html';
                die();
            }
            require 'views/booklist.html';
        }
   } 

   Public function selectListcontent()
   {

   }
}