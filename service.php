
<?php include '../Gujarat tourism website/service.html'; ?>

<?php 
 $servername = 'localhost';
 $username = "root";
 $password = '';
 $ddname = 'gujarat_tour';

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

    $conn = mysqli_connect( $servername,$username,$password,$ddname);

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
  

?>



