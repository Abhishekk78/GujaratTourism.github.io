
<?php include '../Gujarat tourism website/contact.html'; ?>

<?php 

 $servername = 'localhost';
 $username = "root";
 $password = '';
 $dbname = 'gujarat_tour';

 if(isset(($_POST['submit'])))
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $conn = mysqli_connect( $servername,$username,$password,$dbname);
    $query = "INSERT INTO  contact  VALUES('$name','$email','$message')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo " Data send Successfully...";
    }
    else
    {
        echo " Data is not send Successfully...";
    }

 }
?>



