<?php

include 'connection.php';

if(isset($_POST['ADD_DATA']))
{
  $t_id = $_POST['t_no'];
   $t_name = $_POST['t_name'];
   $t_source = $_POST['t_source'];
   $t_dest = $_POST['t_dest'];
   $t_amount = $_POST['t_amount'];
   $arr_time = $_POST['arr_time'];
   $dep_time = $_POST['dep_time'];


   $sql = " INSERT INTO `trainlist`(`t_id`, `t_name`, `t_source`, `t_dest`, `t_amout`,`arr_time`,`dep_time`) VALUES ('$t_no','$t_name','$t_source','$t_dest','$t_amount','$arr_time','$dep_time') " ;
   $query = mysqli_query($con,$sql);

   header("location:trainl.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    

</head>

<body>
<style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
  .container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
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
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}form states{
            color: azure;
        }
        form #state{
            margin: 5px;
        }

 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

     </style>
   </head>
<body>


<div class="container">
    <div class="title">Add new train</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">t_no</span>
            <input type="text" placeholder="Enter train number" name="t_no" required>
          </div>
          <div class="input-box">
            <span class="details">t_name</span>
            <input type="text" placeholder="Enter train name" name="t_name" required>
          </div>
          
          
          <div class="input-box">
            <span class="details">source</span>
            <input type="text" placeholder="Enter train source" name="t_source" required>
          </div>
          <div class="input-box">
            <span class="details">destintaion</span>
            <input type="text" placeholder="Enter train destination" name="t_dest" required>
          </div>
          <div class="input-box">
            <span class="details">amount</span>
            <input type="text" placeholder="Enter amount" name="t_amount" required>
          </div>
          <div class="input-box">
            <span class="details">arrival timing</span>
            <input type="time" placeholder="" name="arr_time" required>
          </div><div class="input-box">
            <span class="details">reaching timing</span>
            <input type="time" placeholder="" name="dep_time" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="SUBMIT" name="ADD DATA">
        </div>
      </form>
    </div>
  </div>





  


<!-- Bootstrap core JavaScript-->
<script src="assest/vendor/jquery/jquery.min.js"></script>
    <script src="assest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assest/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assest/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assest/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assest/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assest/js/demo/datatables-demo.js"></script>

</body>

</html>
