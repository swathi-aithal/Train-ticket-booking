<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"train");
    
    if(isset($_POST['regs']))
    {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $stat = $_POST['stat'];
    
    
    $query = "insert into user (name,uname,pass,phno,emailid,state) values('$name','$uname','$pass',$phone,'$email','$stat')";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("data saved") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("data not saved") </script>';
     
    }
    header()
    }
    
    
    ?>