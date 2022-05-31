<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $conn=mysqli_connect("localhost","root","","77date");
      if(!$conn){
         die("Connection failed : ". mysqli_connect_error());
      }

      $sql="SELECT *  , AES_DECRYPT(UNHEX(REGION), 'PN') as DREG , AES_DECRYPT(UNHEX(JOB), 'PN') as DJOB from project";
      $result=mysqli_query($conn,$sql);
	  
	if($result){
         while($row=mysqli_fetch_array($result)){
         $tall=$_POST["HEI"];
         $sex=$_POST["SEX"];
         $age=$_POST["AGE"];
		 $job=$_POST["JOB"];
         if($age==20){
            $age=5;
         }else if($age==30){
            $age=9;
         }
         else if($age==40){
            $age=4;
         }else{}
		  $hash_p = hash('sha512',$job);
         //echo $hash_p;
   
         $substring_job=SUBSTR($hash_p,0,1);
         $substring_job2=SUBSTR($hash_p,1,1);
       
         $arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
         $d_substring_job  = hexdec ( $substring_job );
         $d_substring_job2  = hexdec ( $substring_job2 );
         
         $arr[$d_substring_job] = 1;
         $arr[$d_substring_job2] = 1;
         $implode = implode(" ", $arr);
        
     
            if($row["JOBBF"]==$implode){
		 if($row["SEX"]==$sex){
        if($row["TALL"]==$tall&&$row["AGEBUC"]==$age){
            
			if($age==5){
				$age=20;
			}else if($age==9){
				$age=30;
			}
			else if($age==4){
				$age=40;
			}

		echo "이름: ",$row["NAME"],"<br>","  혈액형:",$row["BLOOD"],"<br>","  직업:",$row["DJOB"],"<br>","  사는지역:",$row["DREG"],"<br>","  학교/직장:",$row["PLACE"],"<br>","   키:",$row["TALL"],"<br>","  종교:",$row["RELIG"],"<br>","  흡연 유무:",$row["SMOKE"],"<br>","  나이:",$age,"대<br><br><br><br>";
			
            }
			
		 }
         }
	  
                
            
      } 
	
         
      }  else{
         echo "조회 실패";}
		 mysqli_close($conn);}
?>