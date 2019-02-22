<?php
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="bosseiei.csv"');
readfile('bosseiei.csv');

echo "DownloadComplete".'<a href"index.php">Click Here!!!</a>';
?>
