<?php


@include 'config.php';


if(isset($_POST['submit'])){
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['pass'];
   $cpassword = $_REQUEST['cpass'];
   $user_type = $_REQUEST['user_type'];


   $select = "SELECT * FROM user WHERE email = '$email' && password = '$password'";
   $result = mysqli_query($conn, $select);


   if($result){
      if(mysqli_num_rows($result) > 0){
         $error[] = 'user already exists!';
      } else {
         if($password != $cpassword){
            $error[] = 'passwords do not match!';
         } else {
            $insert = "INSERT INTO user (name, email, pass, cpass, user_type)
            VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";
            
            if(mysqli_query($conn, $insert)) {
               header('location: login_form.php');
               exit();
            }else {
               $error[] = 'Error esxecuting query: ' . mysqli_error($conn);
            }
         }
      }
   } else {
      $error[] = 'Error executing query: ' . mysqli_error($conn);
   }
}
?>
