<?php

require_once('connection.php');
$trainid=$_GET['id'];
$sql="DELETE from trainlist where t_id=$trainid";
$result=mysqli_query($con,$sql);

echo '<script>alert("TRAIN DELETED SUCCESFULLY")</script>';
echo '<script> window.location.href = "trainl.php";</script>';



?>