<?php
include 'connection.php';

$sql = "SELECT * FROM student ORDER BY Name ";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    echo "<table border=1> ";
    while($row = mysqli_fetch_array($result)){
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
  }
} else {
  echo "0 results";
}
$con->close();

?>