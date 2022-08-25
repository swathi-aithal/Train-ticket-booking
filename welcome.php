<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL train ticket reservation</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        *{
    margin: 0; padding:0; box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

.site-header {
    width: 100%;
    height: 100vh;
    background: #7c2ac9;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
    clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 0% 100%);

}


nav{
    width: 100%; height: 100px;
    /*background-color:  red;*/
    display: flex; color: white;
    
}
nav ul{
	float: right;
}
nav ul li{
	display: inline-block;
	list-style: none;
}
nav ul li a{
	color:#fff;
	text-decoration: none;
	font-size: 18px;
	text-transform: uppercase;
	padding:0px 32px;
}
nav ul li a:hover{
	color:#c0d96f;
}
nav ul li .active{
	color:#c0d96f;
}


.logo{
    width: 50%;
    height: 100px;
}

.logo h1{
    line-height: 100px;
    padding-left: 50px;
}

.menu{
    width: 50%; height: 100px;
}

.menu ul{
    width: 100%;
    height: 100px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items:  center;
}

.menu ul li{
    list-style: none;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}

section{ display: flex;  }

.leftside { width: 45%; height: auto; overflow: hidden; margin-top: 20px;}

.leftside img{  width: 600px;  height: 500px; }

.rightside{ width: 55%; height: 300px; color: white; text-align: center; margin-top: 80px; padding: 40px;}

.rightside h1{ text-align: center;
    color: #ffffff;
    font-size: 50px;
    font-weight: 900;
    text-transform: uppercase; } 

.rightside p {  
    font-size: 1.1rem; padding: 30px 0; }

.rightside button{   font-size: 17px;
    font-weight: 600;
    color: white;
    text-transform: uppercase;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
    border-radius: 4px 4px 4px 4px;
    padding: 20px 35px ; 
}



.rightside button:hover{
      background: linear-gradient(57deg, #1E4D92, #00C6A7 );   
      text-decoration: none;
}
    </style>
</head>
<body>
    <header class="site-header clearfix">
        <nav>
         <div class="logo">
          <h1>INVELL</h1>
         </div>
         <div class="menu"> 
          <ul>
           <li><a href="#"></a></li>
           <li ><a href="#"></a></li>
           <li><a href="#"></a></li>
           <li ><a href="#"></a></li>
           <li><a href="#"></a></li>

          </ul>
         </div>
        </nav>
        <section>
         <div class="leftside"> 
          <img src="images/train2.jpeg">
         </div>
         <div class="rightside"> 
          <h1>INVELL BOOKING</h1>
          <p>  “Trains are wonderful.... To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life.” </p>
          <button><a href="admin.php">admin login</a></button></a>
          <button><a href="login.php">user login</a></button></a>
         </div>
         
        </section>
       
       </header>
       
       
       </body>
       </html>
</body>
</html>