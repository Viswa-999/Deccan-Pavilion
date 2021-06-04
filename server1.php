<?php
session_start();

// initializing variables
$First_name = "";
$Email_Id    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'deccan_pavilion');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $First_name = mysqli_real_escape_string($db, $_POST['First_name']);
  $Last_name = mysqli_real_escape_string($db, $_POST['Last_name']);
  $Email_Id = mysqli_real_escape_string($db, $_POST['Email_Id']);
  $Enter_password = mysqli_real_escape_string($db, $_POST['Enter_password']);
  $Confirm_password = mysqli_real_escape_string($db, $_POST['Confirm_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($First_name)) { array_push($errors, "First_name is required"); }
  if (empty($Last_name)) { array_push($errors, "Last_name is required"); }
  if (empty($Email_Id)) { array_push($errors, "Email_Id is required"); }
  if (empty($Enter_password)) { array_push($errors, "Enter_password is required"); }
  if ($Enter_password != $Confirm_password) {
  array_push($errors, "The two passwords do not match");
  }
  else{
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $SELECT= "SELECT Email_Id FROM registration WHERE  Email_Id = ? LIMIT 1";
  $stmt = $db->prepare($SELECT);
  $stmt->bind_param("s", $Email_Id);
  $stmt->execute();
  $stmt->bind_result($Email_Id);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  if($rnum==0){
    $stmt->close();
    $INSERT = "INSERT INTO registration (First_name, Email_Id, Enter_password) VALUES (?, ?, ?)";
    $stmt = $db->prepare($INSERT);
    $stmt->bind_param("sss", $First_name, $Email_Id, $Enter_password,);
    $stmt->execute();
  }else{
    array_push($errors,"someone already register using this Email");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    header('Location: login1.html');
  }
 }
}
// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $Email_Id = $_POST['Email_Id'];
  $Enter_password = $_POST['Enter_password'];
     $INSERT = "INSERT INTO login (Email_Id,Enter_Password) VALUES(?, ?)";
     $stmt = $db->prepare($INSERT);
    $stmt->bind_param("ss", $Email_Id, $Enter_password);
    $stmt->execute();
    $query = "SELECT * FROM login WHERE Email_Id=? ";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $Email_Id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
      $data = $stmt_result->fetch_assoc();
      if($data['Enter_Password'] === $Enter_password){
        header("Location: index.html");
      }else {
        array_push($errors, "Wrong username/password");
      }
    }else {
      array_push($errors, "Wrong username/password");
    }
}