<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INVELL </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!---we had linked our css file----->
    <style>#index
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #index .full-page
        {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/plan.jfif);
            background-position: center;
            background-size: cover;
            position: absolute;
        }
        #index .navbar
        {
            display: flex;
            align-items: center;
            padding: 20px;
            padding-left: 50px;
            padding-right: 30px;
            padding-top: 50px;
        }
        #index nav
        {
            flex: 1;
            text-align: right;
        }
        #index nav ul 
        {
            display: inline-block;
            list-style: none;
        }
        #index nav ul li
        {
            display: inline-block;
            margin-right: 70px;
        }
        #index nav ul li a
        {
            text-decoration: none;
            font-size: 20px;
            color: white;
            font-family: sans-serif;
        }
        #index nav ul li button
        {
            font-size: 20px;
            color: white;
            outline: none;
            border: none;
            background: transparent;
            cursor: pointer;
            font-family: sans-serif;
        }
        #index nav ul li button:hover
        {
            color: aqua;
        }
        #index nav ul li a:hover
        {
            color: aqua;
        }
        /* .navbar{
            width: 85%;
            height: 15%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content:flex-end;
        }
        button{
            color: #fbfcfd;
            padding: 10px 25px;
            background: transparent;
            border: 1px solid #fff;
            border-radius: 20px;
            outline: none;
            cursor: pointer; */
        a
        {
            text-decoration: none;
            color: palevioletred;
            font-size: 28px;
        }
        #index #login-form
        {
            display: none;
        }
        
        #index .form-box
        {
            width:380px;
            min-height: 115px;
            height:480px;
            position:relative;
            margin-left: 900px;
            background:rgba(0,0,0,0.3);
            padding:25px 50px;
            overflow: hidden;
            border-left: 5px solid
        }
        #index .button-box
        {
            width:220px;
            margin:35px auto;
            position:relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;
        }
        #index .toggle-btn
        {
            padding:10px 30px;
            cursor:pointer;
            background:transparent;
            border:0;
            outline: none;
            position: relative;
        }
        #index #btn
        {
            top: 0;
            left:0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: #F3C693;
            border-radius: 30px;
            transition: .5s;
        }
        #index .input-group-login
        {
            top: 150px;
            position:absolute;
            width:280px;
            transition:.5s;
        }
        #index .input-group-register
        {
            margin:auto;
            top: 94px;
            position:absolute;
            width:280px;
            transition:.5s;
        }
        #index .input-field
        {
            width: 100%;
            padding:10px 0;
            margin:5px 0;
            border-left:0;
            border-top:0;
            border-right:0;
            border-bottom: 1px solid #999;
            outline:none;
            background: transparent;
        }
        #index .submit-btn
        {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: #F3C693;
            border: 0;
            outline: none;
            border-radius: 30px;
        }
        #index .check-box
        {
            margin: 30px 10px 34px 0;
        }
        #index .full-page span
        {
            color:#777;
            font-size:12px;
            bottom:68px;
            position:absolute;
        }
        
        #index #login
        {
            left:50px;
        }
        #index #login input
        {
            color:white;
            font-size:15;
        }
        #index #register
        {
            left:450px;
        }
        #index #register input
        {
            color:white;
            font-size: 15;
        }
        #index .p1{
            color: white;
        }
        #index .images{
            padding-left: 10px;
            padding-top:0;
            height: 160px;
            width: 90px;
        
        }
        #index .content{
            color: #f3ddf1;
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            z-index: 2;
            
        }
        #index .h11{
            font-size: 80px;
            margin: 8px 0 30px;
            line-height: 80px;
            
            
        }
        #index label{
            color: azure;
        }
        #index #state{
            margin: 5px;
        }
        </style>
</head>
<body>

<?php

require_once('connection.php');
if(isset($_POST['regs']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $uname=mysqli_real_escape_string($con,$_POST['uname']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
   

    if(empty($name)|| empty($uname)|| empty($pass)|| empty($cpass)|| empty($phone)|| empty($email)|| empty($state))
    {
        echo 'Please Fill in the place';
    }
    else{
       
        $sql="insert into user (name,uname,pass,cpass,phno,emailid,state) values('$name','$uname','$pass','$cpass',$phone,'$email','$state')";
        $result = mysqli_query($con,$sql);

        if($result){
        echo 'connect perfect';
       }
        else{
            echo 'pleasecheckconnection';
        }

    }
}


?>
    <section id="index">
    <div class="full-page">
        <!-- <img src="/images/train1.jpg" alt="" class="images"> -->
        <div class="navbar">
            <nav>
                <ul id='MenuItems'>
                    
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Sign-in</button></li>
                </ul>
            </nav>
        </div>
        <div class="content">
        <p>welcome to our</p>
        <h1 class="h11">Train Travelling World</h1>
         </div>
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' action="login.php" class='input-group-login'>
                  <input type="text" class="input-field" placeholder="username" required>
                <input type="password" class="input-field" placeholder="Enter Password" required>
		    <input type='checkbox'class='check-box' id='check' ><label for="check" style="color:white">Remember me</label><br>
		    <button type='submit'class='submit-btn'>Log in</button><br>
			<button type='button' class='submit-btn' onclick='register()'>Register</button>
		 	</form>
		 	<form id='register' class='input-group-register' method="POST">
					<input type="text" class="input-field" placeholder="enter name" name="name" required>
                    <input type="text" class="input-field" placeholder="username" name="uname" required>
                    <input type="password" class="input-field" placeholder="enter password" name="pass" required>
                    <input type="password" class="input-field" placeholder="confirm password" name="cpass" required>
                    <input type="tel" id="phone" name="phone"  maxlength="10" class="input-field" placeholder="Phone-no" required>
                    <input type="email"class='input-field'placeholder="Email Id" name="email" required><br>
                    <!-- <span>Date Of Birth</span><input type='date'class='input-field'placeholder='date' required> -->
                  <!-- <span>city</span><input type="text" class="input-field" placeholder="City" required> -->
                  <input type="text" class="input-field" placeholder="enghh" name="state" required>

				<!-- <input type='checkbox'class='check-box'><span>I agree to the terms andconditions</span> -->
                <input type='submit'class='submit-btn' name="regs"  value="REGISTER">
                
	         </form>
            </div>
        </div>
    </div>
</section>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>