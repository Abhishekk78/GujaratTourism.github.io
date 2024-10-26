<?php include '../Gujarat tourism website/Login.html'; ?>
<?php 

 $servername = 'localhost';
 $username = "root";
 $password = '';
 $ddname = 'gujarat_tour';
 
 $conn = mysqli_connect( $servername,$username,$password,$ddname);
  
 if($conn){
   //  echo 'Connection ok';
 }
 else{
    echo 'connection faild';
 }

?>


