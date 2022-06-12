<?php
include "db.php";

 ?>


<!DOCTYPE html>
<html>
<body>

<?php
echo "Data of Persons table<br>";
// This is a single-line comment

# This is also a single-line comment

$sql = "SELECT * FROM Persons";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["PersonID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " Address:". $row["Address"]." City:" . $row["City"].
 "<br>";
  }
} else {
  echo "0 results";
}



?>
<h1>PHP</h1>
