<?php
  session_start();
// print_r($_SESSION);
if(isset($_POST['login'])){
  $email = $_POST['email'];
  // $password = $_POST['password'];
  
  $q = "SELECT * FROM `agentreg` WHERE `email` = '$email'";
  include 'config.php';
  $stmt=$conn->prepare($q);
  $stmt->execute([$email,$password]);
  $row = $stmt->fetch();
    $id = $row['id'];
      $yourname = $row['yourname'];
  $conn=null;
  if ($row) {
     session_start();
    
     $_SESSION['id'] = $id;

     header('location:index.php?p=123');
    // if ($id == 0 ) {
    //    $_SESSION['admin'] = $name;
    //     header('location: ../admin/manage_products.php');
    //   # code...
    // }else{
    // header('location: ../index.php?q='.md5(0));   
    // }

  }
  else{
   
   header('location: AgentLogin.php?p=102'); 
  }
}
?>
