<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "taxheal");

if(isset($_POST['updatebtn']))
{
$id = $_POST['edit_id'];

$total = $_POST['Total'];
$present = $_POST['Present'];
$percentage = $_POST['Percentage'];

$query = "UPDATE attendance SET  Total_Class='$total', Present='$present', Percentage='$percentage' WHERE Id='$id'";
$query_run= mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] = "Data updated";
header('Location: student2.php');
}

else
{
$_SESSION['status'] = "Data not updated";
header('Location: student2.php');
}
}


if(isset($_POST['delete_btn']))
{
$id= $_POST['delete_id'];

$query = "DELETE FROM attendance WHERE Id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] = "Data Deleted";
header('Location: student2.php');
}
else
{
$_SESSION['status'] = "Data not Deleted";
header('Location: student2.php');
}
}



?>
