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

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">One More Drink!</span>
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
</form>

<form class="form-inline">
  <input type="submit" class="btn btn-info form-inline" name="submit" value="Submit" >
</form>

  <form action="dw.php" class="form-inline">
  <input type="submit" class="btn btn-success form-inline" name="download" value="Download" >
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