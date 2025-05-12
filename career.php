<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .navbar{
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
        }
        h1,p{
          color: #fff;
        }
        .jobs{
          border: 1px solid black;
          box-shadow: 5px 5px 4px 5px grey;
          margin: 10px;
          padding: 10px;
        }
    </style>
    <title>Career</title>
</head>
<body style="margin: 0; padding:0;">
<div class="row mr-0">
  <div class="col-12 container-fluid">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('DefaultPageImage_1.jpg'); background-size:cover;">
      <div class="container">
        <h1 class="display-4">Job Portal</h1>
        <p class="lead">Best Jobs available matching your skills</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
<?php
    $sql="SELECT `Id`, `cname`, `position`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align: center;">'.$rows['position'].'</h3>
        <h4 style="text-align: center;">'.$rows['cname'].'</h4>
        <p style="color: black; text-align= justify;">'.$rows['Jdesc'].'</p>
        <p style="color: black;"><b>Skills Required: </b>'.$rows['skills'].'</p>
        <p style="color: black;"><b>CTC: </b>'.$rows['CTC'].'</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
              Apply Now
        </button>
        </div>
        </div>';
      }
    }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passing</label>
            <input type="text" class="form-control" name="year">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
   
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>