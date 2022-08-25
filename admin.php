<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVELL admin login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: #1abc9c;
  overflow: hidden;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}

    </style>

    </head>
	<body >
        <?php

        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"train");
        if(isset($_POST['a_login'])){
            $ad_uname=$_POST['ad_uname'];
            $ad_pass=$_POST['ad_pass'];
            
            
            if(empty($ad_uname)|| empty($ad_pass))
            {
                echo '<script>alert("please fill the blanks")</script>';
            }
    
            else{
                $query="select *from a_login where ad_uname='$ad_uname'";
                $result=mysqli_query($connection,$query);
                if($row=mysqli_fetch_assoc($result)){
                    $db_password = $row['ad_pass'];
                    if($ad_pass  == $db_password)
                    {
                        
                        // session_start();
                        // $_SESSION['email'] = $email;
                        echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                        header("location: ");
                        
                    }
                    else{
                        echo '<script>alert("Enter a proper password")</script>';
                    }
    
    
    
                    
    
    
    
                }
                else{
                    echo '<script>alert("enter a proper email")</script>';
                }
            }
        }
    
    
    
    
        
    
    
    
    
    
    
    
        
    ?>

    



  <!-- <br><br><br><br> 
<table width="25%" border="0" cellspacing="35" align="center" method="POST">
    <tr>
        <td align="center"><img src="login-icon-images-14.jpg" width="50%" </td>
    </tr>
    

    <tr>
        <td><input type="text" placeholder="username" name="ad_uname" id="type"> </td>
    </tr>
    <tr>
        <td><input type="password" placeholder="*******" name="ad_pass" id="type"> </td>
    </tr>
    <tr>
        <td align="center"><input type="submit" value="Login" name="a_login" id="btn"> </td>
    </tr>
</table> -->
<div class="container">
      <div class="wrapper">
        <div class="title"><span>admin Login Form</span></div>
        <form method="POST" action="/train/adminhome.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="ad_uname" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="ad_pass" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Login" name="a_login">
          
        </form>
      </div>
    </div>
    </body>
</html>