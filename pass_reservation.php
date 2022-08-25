<?php if(isset($_POST['reservation']))
{
    $connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"train");
    $u=$_GET['id'];
    $sourc = $_POST['sourc'];
    $dest = $_POST['dest'];
    $dep = $_POST['dep'];
    $arr = $_POST['arr'];
    $passno = $_POST['passno'];
    $class = $_POST['class'];
    

    $_SESSION['passno']=$passno;
    $query = "insert into reservation values('','$u','$sourc','$dest','$dep','$arr','$passno','$class')";
    $query_run = mysqli_query($connection,$query);
    if($query_run) {
        echo '<script type="text/javascript"> alert("data saved") </script>';
        header("location: trainlist.php?passno=$passno&id=$u");
    }
    else {
        echo '<script type="text/javascript"> alert("data not saved") </script>';
    }

    
} ?>