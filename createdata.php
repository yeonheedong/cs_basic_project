<?php
    $con=mysqli_connect("localhost","root","","77date")
	or die("MySQL 접속 실패!!");	
	$sql="
	    CREATE TABLE project
		
		(
		
			NAME  TEXT(100) NOT NULL,
		  PERNUM    VARCHAR(512) NOT NULL,
		  ID CHAR(8) NOT NULL PRIMARY KEY,
		  PW varchar(512) NOT NULL,
		  BLOOD CHAR(8) NOT NULL,
		  JOB TEXT(512) NOT NULL,
		  JOBBF TEXT(20)NOT NULL,
		  PLACE  TEXT(512) NOT NULL,
		  REGION TEXT(512) NOT NULL,
		  TALL INT(8) NOT NULL,
		  RELIG TEXT(100) NOT NULL,
		  SMOKE TEXT(512) NOT NULL,	
		  SEX TEXT(512) NOT NULL,
		  AGEBUC VARCHAR(20) NOT NULL
		)
   ";		
	$ret= mysqli_query($con,$sql);
	if($ret){
		echo "sqlDB가 성공적으로 생성됨.";	
	}
	else {
		echo "sqlDB 생성 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);	
	}
	mysqli_close($con);
?>