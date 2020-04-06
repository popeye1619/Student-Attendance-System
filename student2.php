<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">

<script src="script.js"></script>
</head>
<body>


  <div class="sidenav">
  <a href="index.php">Students</a>
  <a href="faculty.php">Teachers</a>
  
</div>

<div class="main">
     <div class="header">
  <h3 style="margin-right: 10px;"> Attendance
<button onclick="signOut()" class="btn btn-danger" style="margin-left: 1200px;">Sign Out</button>
</h3>
 
  </div>

 <br/>



  <table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">Student Id</th>
      <th scope="col">Subject</th>
      <th scope="col">Total Class</th>
      <th scope="col">Present</th>
      <th scope="col">Attendance %</th>


      
    </tr>
  </thead>
  <tbody>


  <?php
$connection=mysqli_connect("localhost","root","","taxheal");
if(isset($_POST['view_btn']))
{
$sid=$_POST['view_id'];
  
$query="SELECT * FROM attendance WHERE SId='$sid'";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{
?>

    <tr>
      
      
      <td><?php echo $row['SId']; ?></td>
      <td><?php echo $row['Subjects']; ?></td>
      <td><?php echo $row['Total_Class']; ?></td>
      <td><?php echo $row['Present']; ?></td>
      <td><?php echo $row['Percentage']."%"; ?></td>
     
      


    </tr>

        <?php
}
}

?>


  </tbody>
</table>
</div>

</body>
</html>