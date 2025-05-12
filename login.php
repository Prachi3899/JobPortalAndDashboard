<!DOCTYPE html>
<?php include 'config.php'?>
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
   <form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
    <br>
    <p style="text-align: center;">New User?<br><a href="register.php">Sign Up</a></p>
</form>
</body>
</html>