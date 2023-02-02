<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Search Data</title>
  </head>
  <body>
    <div class="container">
        <div class=row>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Search data using ID</h4>
</div>
    <div class="card-body">
        <div class="col-md-6">
            <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="get_id" class="form-control" placeholder="Enter ID" required>
    </div>
    <button type="submit" name="search_by_id" class="btn btn-primary">Search</button>
    <form>
</div>
</div>
<?php
$connection=mysqli_connect("localhost","root","","gne");
if(isset($_POST['search_by_id']))
{
$id=$_POST['get_id'];
$query="SELECT CRN,S_Name, TID from student WHERE TID='$id' ";
$query_run=mysqli_query($connection,$query);
?>

<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">TID</th>
</tr>
</thead>
<tbody>
    <?php
    if(mysqli_num_rows($query_run)>0)
        {
            while($row=mysqli_fetch_array($query_run))
                {
    ?>

    <tr>
        <td>#</td>
        <td><?php echo $row['CRN']; ?> </td>
        <td> <?php echo $row['S_Name']; ?> </td>
        <td><?php echo $row['TID']; ?></td>
</tr>
<?php
                }
            }
else
{
    ?>
    <tr>
        <td colspan="6">"No data found!"</td>
</tr>

    <?php
}
?>
</tbody>
</table>
</div>
<?php
}
?>
</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>