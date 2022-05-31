<?php

$con=mysqli_connect("localhost","root","","77date")
   or die("MySQL 접속 실패!!");
   $sql="SELECT *  , AES_DECRYPT(UNHEX(JOB), 'PN') as DJOB from project";  
   $ret= mysqli_query($con,$sql);
   if($ret){
      echo mysqli_num_rows($ret), "건이 조회됨.<br><br>";   
   }
   else {
      echo "77date 데이터 조회 실패!!!"."<br>";
      echo "실패 원인 :".mysqli_error($con);   
   }


    while($row = mysqli_fetch_array($ret)){
       
       $arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
       $hash_j=hash('sha512',$row['DJOB']);
       $subhash=SUBSTR($hash_j,0,1);
       $subhash2=SUBSTR($hash_j,1,1);
       $conhash=hexdec ( $subhash );
       $conhash2=hexdec ( $subhash2 );
       
       $arr[$conhash] = 1;
       $arr[$conhash2] = 1;
       $implode=implode(" ",$arr);
       
      
       echo $implode;
       echo "<br>";
       
      
       $a=" UPDATE PROJECT SET JOBBF ='$implode' WHERE PERNUM='".$row['PERNUM']."'";
       
       mysqli_query($con,$a);
	   
	   
	   
 
         
   

   }
       mysqli_close($con);


 
?>