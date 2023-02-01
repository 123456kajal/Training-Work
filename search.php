<!DOCTYPE html>
<html>
<head>
  <title>searching data</title>
 <style>
    body{
      background-color: lightgreen;
    }
    table,td{
    border:1px solid black;
      width: 1100px;
      background-color: lightblue;
      text-align: center;
    }
    th {
      width: 1100px;
      background-color: lightblue;
      text-align: center;
      font-size: 25px;
    }
    .btn{
      width: 20%;
      height: 5%;
      font-weight: bold;
    }*/
  </style> -->

</head>

<body>
  <h1>Seach By Name</h1>
  <div class="container" >
    <form action=""method="POST">
      <label  for="text">Enter Date</label>
        <input id="text" type="text" name="textDate">
        <p>
            <button class="button" type="submit" name="search" value="search exam">Search Name</button>

        </p>

      <table>
        
      
      
    </form>
    <?php
        if(isset($_POST['search']))
            {
        $conn=mysqli_connect("localhost","root","","GNE");
        if(!$conn)
        {
            die("connection Failed=" .mysqli_connect_error());

        }
            $textDate=$_POST['textDate'];
        $qry="Select * from student where Name = '$textDate' OR CRN = '$textDate' ";
            $query=mysqli_query($conn,$qry);
            $count1=mysqli_num_rows($query);

            
            if($count1 == "0")
            {
                echo "no datesheet is found";

            }
            else
            {
                echo "<table border=1> ";
                
                while($row = mysqli_fetch_array($query)){
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
                }
                echo "</table>";
            }
        }
            ?>
  </div>
</body>
</html>