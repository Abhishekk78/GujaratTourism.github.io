<?php include '../Gujarat tourism website/forgotpassword.html'; ?>

<?php 
error_reporting(0);
 $servername = 'localhost';
 $username = "root";
 $password = '';
 $ddname = 'gujarat_tour';

 if( isset($_POST['submit']))
 {
   $pass  =  $_POST['pass'];
   $cpass  =  $_POST['cpass'];
    $npass =   $_POST['npass'];

    $conn = mysqli_connect($servername,$username,$password,$ddname);

    $query = "INSERT INTO  forgotpass 
  
    values ('$pass','$cpass','$npass')";
     
    $data = mysqli_query($conn,$query);

    if($data){
      echo "Password is change successfully....";
    }
    else
    {
      echo "Password is not change successfully....";
      
    }
    
 }
  

?>