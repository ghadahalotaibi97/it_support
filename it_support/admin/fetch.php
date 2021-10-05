<?php
 include("db.php");
if(isset($_POST["view"]))
{
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE message SET status=1 WHERE status=0";
  mysqli_query($conn, $update_query);
} }

$sql = "SELECT * from message where status = 0";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;
echo $count;

$conn->close();
?>