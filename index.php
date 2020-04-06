<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="script.js"></script>

<link rel="stylesheet" href="style.css">


</head>
<body>


  <?php
$connection=mysqli_connect("localhost","root","","taxheal");

$query="SELECT * FROM students";
$query_run = mysqli_query($connection, $query);

?>

<div class="sidenav">
  <a href="index.php">Students</a>
  <a href="faculty.php">Teachers</a>
  
</div>

<div class="main">

     <div class="header">
   


  <h3 style="margin-right: 10px;"> Students
<button onclick="signOut()" class="btn btn-danger" style="margin-left: 1200px;">Sign Out</button>
</h3>
 
  </div>


 <br/>



  <table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Degree</th>
      <th scope="col">Batch</th>
      <th scope="col">Semester</th>
      <th scope="col">Stream</th>
      <th scope="col">Attendance</th>
     
      
    </tr>
  </thead>
  <tbody>

    <?php
if(mysqli_num_rows($query_run)>0)
{
while($row = mysqli_fetch_assoc($query_run))
{
?>

    <tr>
      
      <td><?php echo $row['SId']; ?></td>
      <td><?php echo $row['FirstName']; ?></td>
      <td><?php echo $row['LastName']; ?></td>
      <td><?php echo $row['Degree']; ?></td>
      <td><?php echo $row['Batch']; ?></td>
      <td><?php echo $row['Semester']; ?></td>
      <td><?php echo $row['Stream']; ?></td>
      
        <td> 
         <form action="student2.php" method="post">
         <input type="hidden" name="view_id" value="<?php echo $row['SId']; ?>">
         <button type ="submit" name="view_btn" class="btn btn-success"> View Attendance</button>
         </form>
        </td>

    </tr>


    <?php
}
}
else{
echo "No record found";
}
?>

  </tbody>
</table>
</div>

</body>
</html>