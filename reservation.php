<!DOCTYPE html>
<html lang="en">
     
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL reservation</title>
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/train6.jpg);
    background-size: cover;
    background-position: center;
}
.logo{
    margin-top: 4px;
    margin-left: 5px;
    position: absolute;
}
h1{
    color: azure;
    text-align: center;
    margin: 10px;
}
.booking-form-box{
	max-width: 400px;
	border: 1px solid #ced4da;
	margin:2% auto 0;
	
}
.booking-form-box .booking-form{
	padding: 0 10px 20px;
}
.booking-form-box .booking-form label{
	margin-bottom: 10px;
	margin-top: 10px;
	font-size: 15px;
	color: whitesmoke;
}
.booking-form-box input::placeholder{
	color: rgb(165, 164, 164) !important;

}
.booking-form-box .booking-form .input-grp{
	width:151px;
	display: inline;
}
.booking-form-box .booking-form .input-grp .form-control{
	font-size: 12px;
	border-radius: 0;
	color: violet !important;
	background: transparent !important;
	box-shadow: none !important;
}
.select-date::-webkit-inner-spin-button,
.select-date::-webkit-inner-spin-button
{
	-webkit-appearance: none;
	margin: 0;
}
.select-date::-webkit-calender-picker-indicator
{
	background: transparent !important;

}
.booking-form-box .booking-form .input-grp .customer-select{
	color: whitesmoke!important;
	font-size: 12px!important;
	border: 1px solid #ced4da!important;
	box-shadow: none!important;
	border-radius: 0!important;
	background: transparent!important;
}
.booking-form-box .booking-form .input-grp .custom-select option{
	color: #333;

}
.booking-form #source{
    max-width: 400px;
	border: 1px solid #ced4da;
	margin:2% auto 0;
        }
.booking-form #destination{
    max-width: 400px;
	border: 1px solid #ced4da;
	margin:2% auto 0;

}
.train{
	width: 150px;
	padding: 9px 0;
	font-size: 17px;
	border: 1px solid#dbe2e9 !important;
	background: rgba(69, 70, 68, 0.836)!important;
	box-shadow: none!important;
	border-radius: 4%!important;
    text-align: center;
    font-weight: 10px;
}
.train:hover{
	color: rgb(245, 184, 184);
	background: rgb(201, 201, 240);
}
a {
    color: #eaeef3;
    text-decoration:unset;
}
/* payment */

    </style>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"train");
$u=$_GET['id'];


?>
<h1 class="logo">INVELL</h1>
    <h1>BOOK YOUR TRAIN TICKET</h1>
        
            <div class="booking-form-box">
                <form class="booking-form" method="POST" action="pass_reservation.php?id=<?php echo $u?>">
                    <label>from/source</label>
                    <!-- <input type="text" class="form-control" placeholder="source station" required> -->
                    <select name="sourc" id="source">
                    <option value="source"selected>source</option>

                    <option value="SBC">banglore</option>
                        <option value="YPR">yasvanthpur</option>
                        <option value="MYS">mysore</option>
                        <option value="KJM">hghn</option>
                        <option value="BWT">Andhra Pradesh</option>
                        <option value="RC">Andhra Pradesh</option>
                        <option value="BNC">Andhra Pradesh</option>
                        <option value="MAJN">Andhra Pradesh</option>
                        <option value="UBL">Andhra Pradesh</option>
                        <option value="DVG">Andhra Pradesh</option>
                        <option value="DWR">Andhra Pradesh</option>
                        <option value="MYA">Andhra Pradesh</option>
                        <option value="YG">Andhra Pradesh</option>
                    </select><br>
                    <label>To/Destination</label>
                    <!-- <input type="text" class="form-control" placeholder="Destination station" required> -->
                    <select name="dest" id="destination">
                        <option value="destination"selected>destination</option>
                        <option value="SBC">banglore</option>
                        <option value="YPR">yasvanthpur</option>
                        <option value="MYS">mysore</option>
                        <option value="KJM">hghn</option>
                        <option value="BWT">Andhra Pradesh</option>
                        <option value="RC">Andhra Pradesh</option>
                        <option value="BNC">Andhra Pradesh</option>
                        <option value="MAJN">Andhra Pradesh</option>
                        <option value="UBL">Andhra Pradesh</option>
                        <option value="DVG">Andhra Pradesh</option>
                        <option value="DWR">Andhra Pradesh</option>
                        <option value="MYA">Andhra Pradesh</option>
                        <option value="YG">Andhra Pradesh</option>
                    </select><br>
                    <div class="input-grp">
                        <label>departing date</label>
                    <input type="date" class="form-control select-date" name="dep" id="start" required><br>
                    <label>Arrivaing date</label>
                    <input type="date" class="form-control select-date" name="arr" id="end"><br>
                    <label>passenger</label>
                    <input type="number" class="form-control" placeholder="Enter the number of passanger" name="passno"><br>

                    
                    <label>Travel class</label>
                    <select class="customer-select" name="class">
                        <option value="AC">AC</option>
                        <option value="nonAC">Non AC</option>
                    </select><br>
                    </div>
                    <div class="input-grp">
                        <a href="/home.html" type="button" class="train">back</a>
                        <!-- <a href="/passenger.html" type="button" class="train" name="regs">Passenger Info</a> -->
                        <input type="submit" class="train" value="passanger info" name="reservation"/>
                </form>
</div>
<script>
   $('#start').datepicker({ onSelect: function(selected) { $("#end").datepicker("option", "minDate", selected) } }); 
   $('#end').datepicker({ onSelect: function(selected) { $("#start").datepicker("option", "minDate", selected) });
</script>
</body>
</html>

