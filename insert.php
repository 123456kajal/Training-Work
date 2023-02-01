<?php

include 'connection.php';

if(isset($_POST['done'])){

	$CRN= $_POST['CRN'];
	$Name = $_POST['Name'];
	$Semester = $_POST['Semester'];
	$Branch = $_POST['Branch'];
	$Gender= $_POST['Gender'];
	$q = " INSERT INTO `student`(`CRN`, `Name`,`Semester`, 'Branch' ,'Gender') VALUES ( '$CRN', '$Name','$Semester','$Branch','$Gender')";

	$query = mysqli_query($con,$q);
 
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert A Record </h1>
 </div><br>

 <label> CRN: </label>
 <input type="text" name="CRN" class="form-control"> <br>

 <label> Name: </label>
 <input type="text" name="Name" class="form-control"> <br>

 <label> Semester: </label>
 <input type="text" name="Semester" class="form-control"> <br>

 <label> Branch: </label>
 <input type="text" name="Branch" class="form-control"> <br>

 <label> Gender: </label>
 <input type="text" name="Gender" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>