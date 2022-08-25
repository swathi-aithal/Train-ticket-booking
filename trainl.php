<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL admin trainlist</title>
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
  max-width: 1800px;
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



$query = "select * from trainlist ";
$query_run = mysqli_query($connection,$query);

?>
<div class="container">
    <div class="title">TRAIN LIST</div>    <!-- <button class="add"><a href="addcar.php">+ ADD CARS</a></button> -->

    <table border=2 class="table">
        <tr>
            <td rowspan=2><h1>Train no</h1></td>

        <td rowspan=2><h1>Train Name</h1></td>
        <td rowspan=2><h1>Source place</h1></td>
        <td rowspan=2><h1>Destination Place</h1></td>
        <td rowspan=2><h1>Fare</h1></td>
        <td colspan=2><h1><center>Time</center></h1></td>
        <td rowspan="2"><h1>delete</h1></td>
        
        </tr>
        
        <tr>
        <td>Arrival</td>
        <td>Departure</td>
        
        </tr>
        <?php 
             
                foreach($query_run as $row) {
                $t_no=$row['t_id'];
                $t_name=$row['t_name'];
                $t_source=$row['t_source'];
                $t_dest=$row['t_dest'];
                $t_amount=$row['t_amout'];
                $arr_time=$row['arr_time'];
                $dep_time=$row['dep_time']; ?>
        <form method="post" >
        <tr>
        <input type="hidden" name="t_no" value="<?php echo $t_no; ?>"/>
        <td><?php echo $t_no ?></td>
        <td><?php echo $t_name ?></td>
        <td><?php echo $t_source ?></td>
        <td><?php echo $t_dest ?></td>
        <td><?php echo $t_amount ?></td>
        <td><?php echo $arr_time ?></td>
        <td><?php echo $dep_time ?></td>
        <td><button type="submit" class="submit-btn"><a href="deletetrain.php?id=<?php echo $row['t_id']?>">delete</a></button></td>
        </tr>
        </form>
        <?php  
        } ?>
        </table>
        <button><a href="/train/adminhome.php">HOME</a></button>
        <button><a href="add-data.php"  class="btn text-light "  ><i class="fas fa-plus-circle"></i>Add New train</span></a></button>
    </div>
    </div>
</body>
</html>

