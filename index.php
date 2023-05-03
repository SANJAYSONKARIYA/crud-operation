<?php
include 'config.php';
$select = "select * from adit";

$result = mysqli_query($con,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIT 2022 - 24 @Dehradun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      NSTI Dehradun
    </a>
  </div>
</nav>
    <form action="config.php" method="post">

  <div class="m-3">
    <label for="reg_no" class="form-label">Registraion Number: </label>
    <input type="number" class="form-control" id="reg_no" name="Reg_No" placeholder="Registraion Number" required>
  </div>

  <div class="m-3">
    <label for="t_name" class="form-label">Trainee's Name: </label>
    <input type="text" class="form-control" id="t_name" name="T_name" placeholder="Trainee's Name">
  </div>

  <div class="m-3">
    <label for="t_mobile" class="form-label">Mobile: </label>
    <input type="number" class="form-control" id="t_mobile" name="Mobile" placeholder="Mobile">
  </div>

  <div class="m-3">
    <label for="t_nsti" class="form-label">NSTI: </label>
    <input type="text" class="form-control" id="t_nsti" name="nsti" placeholder="NSTI">
  </div>

  <div class="m-3">
    <label for="date" class="form-label">Date: </label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
  </div>
 
  <button type="submit" class="btn btn-primary m-3" name="Onclick">Submit</button>
  <button type="submit" class="btn btn-primary m-3" name="Ondelete">Delete</button>
  <button type="submit" class="btn btn-primary m-3" name="Onedit">Update</button>
</form>
<div class="fluid-container">
    <div class="row m-3">
    <h1 class="text-center">Read Table</h1>
<table class="table table-hover table-bordered table-striped" > 
    <tr>
        <th>Registraion Number</th>
        <th>Trainee's Name</th>
        <th>Mobile</th>
        <th>NSTI</th>
        <th>Date</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>'.$data['reg_no'].'</td>';
        echo '<td>'.$data['trainee_name'].'</td>';
        echo '<td>'.$data['phone_no'].'</td>';
        echo '<td>'.$data['nsti'].'</td>';
        echo '<td>'.$data['reg_date'].'</td>';
        echo '</tr>';
    }
    ?>
   </table>

    </div>
</div>



</body>
</html>
