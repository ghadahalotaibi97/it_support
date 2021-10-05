<?php
 include("db.php");
if(isset($_POST["view1"]))
{
 if($_POST["view1"] != '')
 {
  $update_query = "UPDATE ask SET status=1 WHERE status=0";
  mysqli_query($conn, $update_query);
} }

$sql = "SELECT * from ask where status = 0";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;
echo $count;

$conn->close();
?>