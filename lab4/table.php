<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.html">One More Drink!</a>
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
    <table class = "table">
        <thead class="thead-dark">
            <tr>
                <th>Bar Name</th>
                <th>Pay</th>
                <th>M/Y</th>
            </tr>
            <tbody>
                <?php
                    $file = fopen("bosseiei.csv","r");
                    while (($data = fgetcsv($file, 0, ",")) !== FALSE){
                        echo "<tr>";
                        echo "<td>".$data[0]."</td>";
                        echo "<td>".$data[1]."</td>";
                        echo "<td>".$data[2]."</td>";
                        echo "<tr>";
                    }
                    fclose($file);
                ?>
            </tbody>
        </thead>
    </table>
    <?php
        $file = fopen("bosseiei.csv","r");
        $balance =0;
        while (($data = fgetcsv($file, 0, ",")) !== FALSE){
            $balance += intval($data[1]);
        }
        fclose($file);
        echo "Total is :". $balance;
    ?>

</body>
</html>