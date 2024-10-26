
<?php include '../Gujarat tourism website/Home.html'; ?>

<?php
 error_reporting(0); 
 $servername = 'localhost';
 $username = "root";
 $password = '';
 $dbname = 'gujarat_tour';

 if( isset($_POST['submit']))
 {
   $fname  =  $_POST['fname'];
   $lname  =  $_POST['lname'];
    $email =   $_POST['email'];
    $phone =   $_POST['phone'];
    $date  =   $_POST['date'];
    $gen   =    $_POST['gen'];
    $book  =    $_POST['book'];
    $question =  $_POST['question'];

    $conn = mysqli_connect( $servername,$username,$password,$dbname);

    if($fname != "" && $lname != "" &&  $email != "" && $phone != "" && $date != "" && $gen != "" && $book != "" && $question != "")
    {

    $query = "INSERT INTO form 
  
    values ('$fname','$lname','$email','$phone','$date','$gen','$book','$question')";
     
    $data = mysqli_query($conn,$query);

    if($data){
      echo "Data is stored into database";
    }
    else
    {
      echo "Data is not stored  into database";
      
    }
  }
  else
  {
    echo "<script>alert('Please fill the form...')</script>";
  } 
 }
  

?>


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














