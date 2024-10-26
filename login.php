
<?php include '../Gujarat tourism website/login.html'; ?>

<?php 
error_reporting(0);
 $servername = 'localhost';
 $username = "root";
 $password = '';
 $dbname = 'gujarat_tour';

 if(isset(($_POST['submit'])))
 {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    
    $conn = mysqli_connect( $servername,$username,$password,$dbname);
    $query = "INSERT INTO  login  VALUES('$uname','$pass')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "Login Data Store Successfully...";
    }
    else
    {
        echo "Login Faild...";
    }

 }
?>



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