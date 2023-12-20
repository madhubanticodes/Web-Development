<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
      .navbar{
      overflow: hidden;
      background-color: green;
      position: fixed;
      top: 0;
      width: 100%;
  }
  h1,
  p {
    color: black;
  }
  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px green;
    margin: 10px;
    padding: 10px;
  }
  </style>
  <title>Career</title>
</head>
<body>
<div class="row">
  <div class="col-12">
    <div class="jumbotron jumbotron-fluid" style="backround-image: url('banner.jpg'); backround-size: cover;">
    <div class="container">
      <h1 class="display-4">Job Portal</h1>
      <p class="lead">Best jobs available according to your skills</p>
    </div>
  </div>
 </div>
</div>
<div class="row">
  <?php
  $sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-md-4">
      <div class="jobs">
      <h3 style="text-align: center;">'.$rows['position'].'</h3>
      <h4 style="text-align: center;">'.$rows['cname'].'</h4>
      <p style="color: black; text-align: justify;">'.$rows['Jdesc'].'</p>
      <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
      <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
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
        <h5 class="modal-title" id="exampleModalLabel">Apply for jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
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
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div> 
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
</body>
</html>