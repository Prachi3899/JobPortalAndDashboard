<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);

}
echo"";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];

  $sql= "INSERT INTO `users`( `Name`, `email`, `password`,`number`) VALUES ('$name','$email','$password','$number')";
  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Coukd not able to execute $sql." . mysqli_error($conn);    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      body{
        background-image: url('2579546.webp');
        background-size: cover;
      }
      form{
        background-color: white;
        margin-top: 3em;
        margin-left: 35em;
        margin-right: 5em;
        padding: 30px;
        box-shadow: 5px 10px #888888;
      }
    </style>
    <title>Register</title>
</head>
<body>
   <div class="container">
   <form action="" method="POST">
   <div class="mb-3">
    <label for="exampleInputname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputname" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputnumber" name="phone_no">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
  <br>
  Already registered <a href="login.php">Login</a>
</form>
</body>
</html>