<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">


    
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <style>
        html{
	font-size: 10px;
	font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
*{
	margin:0px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
nav{
	width: 100%;
	height: 75px;
	background-color: #505d61;
	line-height: 75px;
	padding:0px 79px;
	position:fixed;
	z-index: 1;
}
nav .logo{
	font-size: 30px;
	font-weight: bold;
	letter-spacing: 1.4px; 
}
nav .logo p{
	float: left;
	color:#fff;
	text-transform: uppercase;
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
	padding:0px 15px;
}
nav ul li a:hover{
	color:#c0d96f;
}
nav ul li .active{
	color:#c0d96f;
}

.container{
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 40px;
}

.container img{
	margin-left: 520px;
	margin-top: -90px;
	position: absolute;
	size: 0px;;
	width: 420px;
	height: 280px;
}
#hero{
	background-image: url(images/unsplash5.jpg);
	background-size: cover;
	background-position: top center;
	position: relative;

	
}
#hero::after{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: black;
	opacity: .7;
	z-index: -1;

}
#hero .hero{
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 50px;
	justify-content: flex-start;
}
#hero h1{
	display:block;
	width: fit-content;
	font-size: 4rem;
	position: relative;
	color: transparent;
	animation: text_reveal .5s ease forwards;
	animation-delay: 1.5s;
}
#hero h1:nth-child(1) {
	animation-delay: 1.5s;
}
#hero h1:nth-child(2) {
	animation-delay: 2.5s;
}

#hero h1 span{
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 0;
	background-color: crimson;
	animation: text_reveal_box 1s ease;
	animation-delay: 1s;
}
#hero h1:nth-child(1) span{
	animation-delay: 1s;
}
#hero h1:nth-child(2) span{
	animation-delay: 2s;
}
#hero .cta{
	display: inline-block;
	padding: 10px 30px;
	color: crimson;
	background-color: transparent;
	border: 2px solid crimson;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 20px;
	transition: .3s ease;
	transition-property: background-color,color;
}
#hero .cta:hover{
	color: white;
	background-color: crimson;
}
@keyframes text_reveal_box{
	50%{
		width: 100%;
		left: 0;

	}
	100%{
		width: 0;
		left: 100%;
	}
}
@keyframes text_reveal{
	100%{
		color: white;
	}
}

#pnr-enquiry{
	display: flex;
	height: 75vh;
	margin-top: 40px;
	justify-content: center;
	align-items: center;
	background: linear-gradient(135deg,#71b7e6,#9b59b6);
}
.contain {
  text-align: center;
  font-size: 14px;
}

.progress-container {
  display: flex;
  justify-content: space-between;
  position: relative;
  margin-bottom: 30px;
  max-width: 100%;
  width: 350px;
}

.progress-container::before {
  content: '';
  background-color: var(--line-border-empty);
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 4px;
  width: 100%;
  z-index: -1;
}

.progress {
  background-color: var(--line-border-fill);
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 4px;
  width: 0%;
  z-index: -1;
  transition: 0.4s ease;
}

.circle {
  background-color: #fff;
  color: black;
  border-radius: 50%;
  height: 70px;
  width: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 3px solid var(--line-border-empty);
  transition: 0.4s ease;
}

.circle.active {
  border-color: var(--line-border-fill);
}

.btn {
  background-color: var(--line-border-fill);
  color: #0ED2F7;
  border: 0;
  border-radius: 6px;
  cursor: pointer;
  font-family: inherit;
  padding: 16px 60px;
  margin: 5px;
  font-size: 12px;
}

.btn:active {
  transform: scale(0.98);
}

.btn:focus {
  outline: 0;
}

.btn:disabled {
  background-color: var(--line-border-empty);
  cursor: not-allowed;
}
.credit a{
    text-decoration: none;
    color: tomato;
  }

  .credit {
      margin-top: 10px;
      text-align: center;
  }


#contact-us{
	margin-top:50px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
.section{
	width: 100%;
	min-height: 100vh;
	background-color: #ddd;
}
.containr{
	width: 70%;
	display: block;
	margin:auto;
	padding-top: 100px;
}
.content-section{
	float: left;
	width: 55%;
}
.image-section{
	float: right;
	width: 40%;
}
.image-section img{
	width: 100%;
	height: auto;
}
.content-section .title{
	text-transform: uppercase;
	font-size: 28px;
}
.content-section .content h3{
	margin-top: 20px;
	color:#5d5d5d;
	font-size: 21px;
}
.content-section .content p{
	margin-top: 10px;
	font-family: sans-serif;
	font-size: 18px;
	line-height: 1.5;
}
.content-section .content .button{
	margin-top: 30px;
}
.content-section .content .button a{
	background-color: #3d3d3d;
	padding:12px 40px;
	text-decoration: none;
	color:#fff;
	font-size: 25px;
	letter-spacing: 1.5px;
}
.content-section .content .button a:hover{
	background-color: #a52a2a;
	color:#fff;
}
.content-section .social{
	margin: 40px 40px;
}
.content-section .social i{
	color:#a52a2a;
	font-size: 30px;
	padding:0px 10px;
}
.content-section .social i:hover{
	color:#3d3d3d;
}
@media screen and (max-width: 768px){
	.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top:50px;
}
.content-section{
	float:none;
	width:100%;
	display: block;
	margin:auto;
}
.image-section{
	float:none;
	width:100%;
	
}
.image-section img{
	width: 100%;
	height: auto;
	display: block;
	margin:auto;
}
.content-section .title{
	text-align: center;
	font-size: 19px;
}
.content-section .content .button{
	text-align: center;
}
.content-section .content .button a{
	padding:9px 30px;
}
.content-section .social{
	text-align: center;
}

}
#contact-us{
	padding: 0;
	margin-top: 90px;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
}

.sect{
	height: 100vh;
	width: 100%;
}

.cont{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.cont:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("/images/trainbg.jfif") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("/images/trainbg.jfif") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	height: 35px;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}

#contact-us{
	padding: 0;
	margin-top: 90px;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
}

.section{
	height: 100vh;
	width: 100%;
}

.conts{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.conts:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("/images/train2.jpeg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
	margin-top:20px ;
}


#feedback{
	margin-top:50px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;

}
#feed-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
	background: url("/images/unsplash1.jfif") no-repeat center;
}

.rights{
	width:100%;
	background-size: cover;
	height: 100%;
	margin-left:200px ;
	margin-top: 50px;
	font-size: 14px;
	color: rgb(26, 26, 27);
}

/* .right label{
	font-size: 14px;
	font-weight: 12px;
} */
.lefts{
	padding: 40px 25px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.team{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.team:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
	color: black;
}

.btns{
	width: 100%;
	height: 35px;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btns:hover{
    background-color: #27ae60;
}

.team:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	#feed-box{
		grid-template-columns: 1fr;
	}
	.rights{
		height: 200px;
	}
}


    </style>
</head>
<body>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"train");
$u=$_GET['id'];
$sql="SELECT *from user where uname='$u'";
$name = mysqli_query($connection,$sql);
$rows=mysqli_fetch_assoc($name);
?>
	<div class="nav">
			<nav>
				<div class="logo">
					<p>invell</p>
				</div>
				<ul>
				
					<li><a href="#hero" class="active">home</a></li>
					<li><a href="#pnr-enquiry">booking steps</a></li>
					<li><a href="#about-us">about Us</a></li>
					<li><a href="#contact-us">Contact Us</a></li>
					<li><a href="#feedback">feedback</a></li>
					<li><a href="/index (1).html">logout</a></li>
					<li><a >Welcome-<?php echo $rows['name'];?></a></li>
				</ul>
			</nav>
		
	</div>
	
<section id="hero">

    <div class="hero container">
        <div>
            <h1>ONLINE TICKET<span></span></h1>
            <h1>RESERVATION SYSTEM<span></span></h1>
            <a href="reservation.php?id=<?php echo $u?>" type="button" class="cta">Reserve Now</a>
			<img src="images/station.jfif">

        </div>
    </div>


</section>   
<!-- <section class="pnr">
    <div class="booking-form">
        <h1 class="h1i">PNR Enquiry</h1>
        
        <label>ticket number</label>
                    <input type="number" class="form-control" placeholder="enter the ticket number"><br>
                    <button type='submit'class='submit-btn'>Submit</button>
    </div>
</section> -->
<!-- service section  -->
<section id="pnr-enquiry">
<div class="contain">
      <div class="progress-container">
        <div class="progress" id="progress"></div>
        <div class="circle active">reservation</div>
        <div class="circle">passanger booking</div>
        <div class="circle">payment</div>
        <div class="circle">ticket</div>
      </div>
<h3>*only one passanger booking allowed at one booking,<br>seat allotment done according passanger id</h3>
      <button class="btn" id="prev" disabled><a href="#hero">previous</a></button>
      <button class="btn" id="next"><a href="#about-us">next</a></button>
    </div>
    
    <script>const progress = document.getElementById('progress')
const prev = document.getElementById('prev')
const next = document.getElementById('next')
const circles = document.querySelectorAll('.circle')

let currentActive = 1

next.addEventListener('click', () => {
    currentActive++

    if(currentActive > circles.length) {
        currentActive = circles.length
    }

    update()
})

prev.addEventListener('click', () => {
    currentActive--

    if(currentActive < 1) {
        currentActive = 1
    }

    update()
})

function update() {
    circles.forEach((circle, idx) => {
        if(idx < currentActive) {
            circle.classList.add('active')
        } else {
            circle.classList.remove('active')
        }
    })

    const actives = document.querySelectorAll('.active')

    progress.style.width = (actives.length - 1) / (circles.length - 1) * 100 + '%'

    if(currentActive === 1) {
        prev.disabled = true
    } else if(currentActive === circles.length) {
        next.disabled = true
    } else {
        prev.disabled = false
        next.disabled = false
    }
}
</script>
	</form>
</div>
</section>
<!-- about us -->
<section id="about-us">
	<div class="section">
		<div class="containr">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Railway Ticket Booking Platform</h3>
					<p>The reservation in only on Stste level Railway Ticket reservation.It is computerized system of reserving seats of train in advanced.Online reservation has made the process for the reservation of seats very much easier than ever before</p>
					<div class="button">
						<a href="">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="images/train4.jpg">
			</div>
		</div>
	</div>

</section>
<!-- contact us -->
<style>
	/* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


#contactus{
  min-height: 100vh;
  width: 100%;
  background: #c8e8e9;
  display: flex;
  align-items: center;
  justify-content: center;
}
.containerss{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.containerss .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.containerss .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}


	</style>
<div id=contact-us>
<div class="containerss">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
</div>
</div>
<style>
	#feedback{
    background: #4e54c8; 
    background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  
    background: linear-gradient(to right, #8f94fb, #4e54c8);     
  font-family: 'Montserrat', sans-serif;
  overflow: hidden;
  height:100vh;
}

.panel-container {
  background-color: #12192c;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 15px;
  font-size: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 30px;
  max-width: 400px;
  color:#4e54c8;
  margin:10% auto 2% auto;
}

.panel-container strong {
  line-height: 20px;
}

.ratings-container {
  display: flex;
  margin: 20px 0;
}

.rating {
  flex: 1;
  cursor: pointer;
  padding: 20px;
  margin: 10px 5px;
}

.rating:hover,
.rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.rating img {
  width: 40px;
}

.rating small {
  color: #fff;
  display: inline-block;
  margin: 10px 0 0;
}

.rating:hover small,
.rating.active small {
  color: #8f94fb;
}

.btn {
  background-color: #8f94fb;
  color: #000;
  border: 0;
  border-radius: 4px;
  padding: 12px 30px;
  cursor: pointer;
}

.btn:focus {
  outline: 0;
}

.btn:active {
  transform: scale(0.98);
}

.fa-heart {
  color: red;
  font-size: 30px;
  margin-bottom: 10px;
}


.credit a{
    text-decoration: none;
    color: #fff;
  }

  .credit {
      text-align: center;
  }


	</style>

	<div id=feedback>
	<div id="panel" class="panel-container">
      <strong>How satisfied are you with our <br /> customer support performance?</strong>
      <div class="ratings-container">
        <div class="rating">
		<a target="_blank" href="https://icons8.com/icon/3ILJbwZWVbwm/unhappy"></a><a target="_blank" href="https://icons8.com"></a>
          <small>Unhappy</small>
        </div>

        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187136.svg" alt=""/>
          <small>Neutral</small>
        </div>

        <div class="rating active">
          <img src="https://image.flaticon.com/icons/svg/187/187133.svg" alt=""/>
          <small>Satisfied</small>
        </div>
      </div>
      <button class="btn" id="send">Send Review</button>
    </div>
    <!-- <div class="credit"><span style="color:tomato"></span> by <a  href="https://www.learningrobo.com/">Lea</a></div> -->
    <script src="script.js"></script>
  </div>



</div>
</div>
</body>
</html>