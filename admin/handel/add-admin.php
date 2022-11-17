<?php session_start();
require('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * from admins where email = '$email'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) > 0 ){
    $_SESSION['msg'] =["Email Already Exits"];
   header("location: ../add-admin.php");
   exit;
}

$errors = [];

if(empty($name)){

    $errors[] ="name is required";
}

if(empty($email)){

    $errors[] ="email is required";
}

if(empty($password)){

    $errors[]="password is required";
}
if(count($errors) > 0){
    $_SESSION['msg']=$errors;
 header("location: ../add-admin.php");

}else{
    $password = password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO admins(`name`,`email`,`password`) 
    VALUES('$name','$email','$password')";
    $query = mysqli_query($conn,$sql);
    if(!$query){
        $errors[]= "error while adding new admin";
    }
    $_SESSION['msg']=["admin added succesfully"];
   header("location: ../add-admin.php");

}

?>