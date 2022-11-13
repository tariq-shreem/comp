<?php session_start();

$conn= mysqli_connect('localhost','root','','comp');

 $email = $_POST['email'];
 $password = $_POST['password'];

 $sql="SELECT * FROM users where email='$email'";
 $result = mysqli_query($conn,$sql);
 $user = mysqli_fetch_assoc($result);

 if(mysqli_num_rows($result) > 0){
    if(password_verify($password,$user['password'])){
        
        $_SESSION['userId']=$user['id'];
        header("location: ../index.php");
    }else{
        $_SESSION['errors']= "password incorrect";
        header("location: ../login.php");
    }
 }else{

    $_SESSION['errors']= "email incorrect";
    header("location: ../login.php");

 }
?>