<?php

include 'connection.php';

if(isset($_POST['done'])){

	$TID= $_POST['TID'];
	$TName = $_POST['TName'];
    $Gender= $_POST['Gender'];
	$Branch = $_POST['Branch'];
    $Experience = $_POST['Experience'];
	$Subject= $_POST['Subject'];
	$q = " INSERT INTO `teacher`(`TID`, `TName`,`Gender`,`Branch`,`Experience`,`Subject` ) VALUES ( '$TID', '$TName','$Gender','$Branch','$Experience','$Subject')";

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

 <label> TID: </label>
 <input type="text" name="TID" class="form-control"> <br>

 <label> TName: </label>
 <input type="text" name="TName" class="form-control"> <br>

 <label> Experience: </label>
 <input type="text" name="Experience" class="form-control"> <br>

 <label> Branch: </label>
 <input type="text" name="Branch" class="form-control"> <br>

 <label> Gender: </label>
 <input type="text" name="Gender" class="form-control"> <br>

 <label> Subject: </label>
 <input type="text" name="Subject" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>