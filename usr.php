<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL registers</title>
    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 800px;
  width: 100%;
  background-color: #fff;
  padding: 15px 15px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

h1{
    margin-top: 70px;
    color: black;
    text-align: center;
}
.container .title{
  font-size: 30px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.table{
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 40px;
    color: black;

}
button{   font-size: 16px;
    font-weight: 400;
    color: white;
    text-transform: uppercase;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
    border-radius: 4px 4px 4px 4px;
    padding: 20px 25px ; 
    margin-left: 240px;

}



.rightside button:hover{
      background: linear-gradient(57deg, #1E4D92, #00C6A7 );   
}
    </style>

</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"train");


$query = "select * from user ";
$query_run = mysqli_query($connection,$query);

?>
<div class="container">
    <div class="title">REGISTERS</div>    <table border=2 class="table">
        <tr>
        <td rowspan=1><h1>name</h1></td>
        <td rowspan=1><h1>user
            name</h1></td>
        <td rowspan=1><h1>pass</h1></td>
        <td rowspan=1><h1>phone</h1></td>
        <td rowspan=1><h1>email</h1></td>
        <td rowspan=1><h1>state</h1></td>
        
        </tr>
        
        
        <?php 
             
                foreach($query_run as $row) {
                $name=$row['name'];
                $uname=$row['uname'];
                $pass=$row['pass'];
                $phno=$row['phno'];
                $emailid=$row['emailid'];
                $state=$row['state']; ?>
        <form method="post" >
        <tr>
        <input type="hidden" name="uname" value="<?php echo $uname; ?>"/>
        <td><?php echo $name ?></td>
        <td><?php echo $uname ?></td>
        <td><?php echo $pass ?></td>
        <td><?php echo $phno ?></td>
        <td><?php echo $emailid ?></td>
        <td><?php echo $state ?></td>
        </tr>

        </form>
        <?php  
        } ?>
        </table>
        <button><a href="/train/adminhome.php">HOME</a></button>
        <div>
            <div>

</body>
</html>

