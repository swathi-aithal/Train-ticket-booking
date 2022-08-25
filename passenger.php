    <?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">;
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL Passenger</title>   
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <style>
         body {
            
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/station.jfif);
            background-size: cover;
            background-position: center;
        }
        h1{
            color: azure;
            text-align: center;
            margin: 10px;
        }
        #airo{
            max-width: 350px;
            border: 3px solid #ced4da;
            margin:4% auto 0;
            color: azure;
            
        }
        .airo .container{
            padding: 0 10px 20px;
        }
        .airo .airo-container label{
            margin-bottom: 25px;
            margin-top: 20px;
            font-size: 22px;
            color: rgb(240, 57, 57);
        }
        .airo-container input::placeholder{
            color: rgb(165, 164, 164) !important;
        
        }
.form-control{
	font-size: 12px;
	border-radius: 2px;
    height: 20px;
	color: rgb(19, 1, 19) !important;
	background: rgb(245, 243, 243)!important;
	box-shadow: none !important;
    
    
}
.submit-btn{
    height: 30px;
    margin: 10px;
}

.submit-btn button:hover{
	background: rgb(252, 161, 176);
    
}

.amt{
    color: white;
    text-decoration: none;
    margin-left:650px;
}
    </style>
</head>
<body>
    <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'train');
$u=$_GET['id'];
$r_passno=$_GET['passno'];
$t_no=$_GET['tno'];
$t_amount=$_GET['tamt'];
if(isset($_POST['insert']))
{

    $pname = $_POST['pname'];
    $pphone = $_POST['pphone'];
    $gender = $_POST['gender'];
    

$query = "insert into passanger values('$u','','$pname','$pphone','$gender')";
$query_run = mysqli_query($connection,$query);

if($query_run)
{
    

    $_SESSION['passno'] = $r_passno;
    $_SESSION['tno'] = $t_no;
    $_SESSION['tamt'] = $t_amount;
    $_SESSION['uname'] = $u;


    echo '<script type="text/javascript"> alert("ticket has been booked booked") </script>';
    echo '<script> window.location.href = "payments.php";</script>';
}
else{
    echo '<script type="text/javascript"> alert("data not saved") </script>';
 
}
}



?>
    <h1>PASSANGER INFORMATION</h1>
    <h3 class="amt">TOTAL AMOUNT  : <?php  echo $t_amount*$r_passno?></h3>
<form id="airo" allign="center" method="POST">
    
    <div class="airo-container">
        
                <!-- <div style="max-width: 400px;"> -->
                
                <h2>Trip Registration</h2>
                <?php $passno=$r_passno; 
                      $i=1;  
                while ($i<= $passno ) {
                    ?>
                <label>passenger <?php echo $i; ?></label><br>
                <label>name</label>
                <input type="text" name="pname"  class="form-control" placeholder="name" required/>
                </div>
                <label>phono</label>
                    <span>mobile</span><input type="tel" class="form-control" name="pphone"  pattern="[0-9]{10}" maxlength="10" class="input-field" placeholder="Phone-no" required><br>
                </div>
                <label>Gender</label>
                <span><input type="radio" class="form-control" name="gender" value="male" required/>Male</span>
                <span><input type="radio" class="form-control" name="gender" value="female" required/>Female</span>
                <span><input type="radio" class="form-control" name="gender" value="other" required>Others</span><br>
                </br>
                </br>
                <?php 
                $i+=1;
                }
                ?>
                
                <!-- <button type='submit'class='submit-btn'>Submit</button><span>to select train</span> -->
                <input type="submit" class="submit-btn" name="insert" value="SUBMIT">

            
        </div>
    </div>
</form>    
</body>
</html>