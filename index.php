<?php include 'header.php'?>
<div class="content">
<p>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
  </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea id="" cols="30" rows="10" class="form-control" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
<?php $sql="SELECT `cname`, `position`, `CTC` FROM `jobs`";
$result = mysqli_query($conn,$sql);
$i=0;
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo"
    <tbody>
    <tr>
<td>".++$i."</td>
<td>".$row['cname']."</td>
<td>".$row['position']."</td>
<td>".$row['CTC']."</td>
</tr>";
  }
}
else{
  echo"";
}
?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>