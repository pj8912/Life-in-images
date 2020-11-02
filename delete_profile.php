<?php
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
$conn = mysqli_connect('localhost','root','','lii');
$sql = "DELETE FROM profile WHERE p_id = '$id' ";
mysqli_query($conn, $sql);
header('location: view_profile.php');
exit();
}
?>
