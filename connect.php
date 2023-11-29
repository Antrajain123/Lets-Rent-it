<?php
      $first_name = $_POST['first_name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];

      $conn = new mysqli('localhost','root','Antra@123','rentalhouse');
      if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
      }
      else{
        $stmt = $conn->prepare("insert into user(name, address, email, phone, password) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $first_name, $address, $email, $phone, $password);
        $stmt->execute();
        echo "Sign Up Succrssfully";
        $stmt->close();
        $conn->close();

      }

?>