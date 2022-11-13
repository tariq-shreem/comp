<?php session_start();
$conn= mysqli_connect('localhost','root','','comp');

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $user = "SELECT count(id) as countUser from users where email='$email'";
 $countQuery = mysqli_query($conn,$user);
 $count = mysqli_fetch_assoc($countQuery);

 if($count['countUser'] > 0){

    $_SESSION['errors'] = "Email Already Exist";
    header("location: ../register.php");
 }else{
    $password=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO users(`name`,`email`,`password`) VALUES('$name','$email','$password')";
    
    if(mysqli_query($conn,$sql)){
       $_SESSION['userId']=mysqli_insert_id($conn);
        header("location: ../index.php");
    }
 }
 


?>