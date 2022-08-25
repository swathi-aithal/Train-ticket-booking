<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL train list</title>
    <style>
body{
    margin: 0;
    padding: 0;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/goo2.jpeg);
}
h1{
    margin-top: 70px;
    color: whitesmoke;
    text-align: center;
}
.table{
    margin-left: 180px;
    margin-top: 70px;
    color: rgb(236, 242, 243);

}
    </style>

</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"train");

$r_passno=$_GET['passno'];

$query = "select * from trainlist ";
$query_run = mysqli_query($connection,$query);
$u=$_GET['id'];

?>
    <h1>BOOK YOUR TRAIN</h1>
    <table border=2 class="table">
        <tr>
            <td rowspan=2><h1>Train no</h1></td>

        <td rowspan=2><h1>Train Name</h1></td>
        <td rowspan=2><h1>Source place</h1></td>
        <td rowspan=2><h1>Destination Place</h1></td>
        <td rowspan=2><h1>Fare</h1></td>
        <td colspan=2><h1><center>Time</center></h1></td>
        <td rowspan="2"><h1>book</h1></td>
        
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
        <form method="post" action="passenger.php?passno=<?php echo $r_passno; ?>&tno=<?php echo $t_no;?>&tamt=<?php echo $t_amount; ?>&id=<?php echo $u?>">
        <tr>
        <input type="hidden" name="t_no" value="<?php echo $t_no; ?>"/>
        <td><?php echo $t_no ?></td>
        <td><?php echo $t_name ?></td>
        <td><?php echo $t_source ?></td>
        <td><?php echo $t_dest ?></td>
        <td><?php echo $t_amount ?></td>
        <td><?php echo $arr_time ?></td>
        <td><?php echo $dep_time ?></td>
        <td><button type="submit" class="submit-btn">Book Now</button></td>
        </tr>
        </form>
        <?php  
        } ?>
        </table>
</body>
</html>

