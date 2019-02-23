<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    
    $file = fopen("bosseiei.csv","a");
    $add_row = "\n".$name.",".$cost.",".date('m/Y');
    fwrite($file,$add_row);
    fclose($file);
  }
?>

<!DOCTYPE HTML>  
<html>
<head>
  <title>One More Drink!</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php">One More Drink!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table.php">Record</a>
      </li>
    </ul>
  </div>
</nav>
<br>


<form method="post">
<div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header">


<h1>How much you spend with alcohol?</h1><br>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Bar Name</span>
    </div>
    <input type="text" name="name" class="form-control" placeholder="Enter Bar Name!" aria-label="Bar" aria-describedby="basic-addon1">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Pay</span>
    </div>
    <input type="text" name="cost" class="form-control" placeholder="Enter How much you Pay!" aria-label="Pay" aria-describedby="basic-addon1">
  </div>
  <input type="submit" class="btn btn-info form-inline" name="submit" value="Submit" ><br>
</form>


  <form action="dw.php" class="form-inline">
  <input type="submit" class="btn btn-success form-inline" name="download" value="Download" >
</form>
<br>
<form action="up.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume" class="btn btn-warning"><br>
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload File" class="btn btn-primary">
</form>
  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








</body>
</html>