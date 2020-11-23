<?php

header("content-type:text/html;charset=utf-8");

include("database.php");

require_once './Classes/PHPExcel/IOFactory.php';

require_once './Classes/PHPExcel.php';

require_once './Classes/PHPExcel/Reader/Excel5.php';

$filename="helmet.xls";//get filename
$objReader = PHPExcel_IOFactory::createReader('Excel5');
	
			
	$objPHPExcel = $objReader->load($_FILES["file"]["tmp_name"]);
			
	$sheet = $objPHPExcel->getSheet(0);//first table
			
			$highestRow = $sheet->getHighestRow(); // rows count
			
			$check=1;
			
			echo "<br>";
			
			//read and insert
			
			for ($j = 2; $j <= $highestRow; $j++) { //from 2nd rows start to handle
				
				$id = $objPHPExcel->getActiveSheet()->getCell("A" . $j)->getValue();//get A value
				
				echo $id."<br>;
				
  $name = $objPHPExcel->getActiveSheet()->getCell("B" . $j)->getValue();//get B value
  
  echo $name."<br>";
  
  $sql="insert into ** values('$id','$name')";//table name
  
  if(!mysqli_query($con,$sql))
  
  $check=0;
  
  }
  
  if($check==1)
  
  echo "sucsses!";
  		
  else
  		
  echo "fault!";
  
 ?>