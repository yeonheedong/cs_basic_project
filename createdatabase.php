<?php
    $con=mysqli_connect("localhost","root","","")
	or die("MySQL 접속 실패!!");
	
	$sql="CREATE DATABASE 77date";
	$ret= mysqli_query($con,$sql);
	
	if($ret){
		echo "77date 성공적으로 생성됨.";
		
	}
	else {
		echo "77date 생성 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);	
	}
	
	mysqli_close($con);
?>