<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVELL ticket</title>
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
    padding: 10px 15px ; 
    margin-left: 140px;

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
$u=$_SESSION['uname'];
$sql="SELECT *from reservation where username='$u' order by reservation_id desc limit 1";
$name = mysqli_query($connection,$sql);
$rows=mysqli_fetch_assoc($name);

$query2="SELECT *from user where uname='$u'";
$query_run2 = mysqli_query($connection,$query2);
$rows2=mysqli_fetch_assoc($query_run2);


$query3="SELECT *from trainlist limit 1";
$query_run3 = mysqli_query($connection,$query3);
$rows3=mysqli_fetch_assoc($query_run3);

$name=$rows2['name'];
$t_no=$rows3['t_id'];
$reservation_id=$rows['reservation_id'];
$class=$rows['class'];
$dest_time=$rows['dest_time'];
$arr_time=$rows3['arr_time'];

$insert="INSERT INTO TICKET (name,t_no,reservation_id,class,dest_time,arr_time) VALUES('$name','$t_no','$reservation_id','$class','$dest_time','$arr_time')";
$i=mysqli_query($connection,$insert);
?>

<div class="container">
    <div class="title">YOUR TICKET

    </div>
        <table border=2 class="table"><thead>
        <tr>
            <!-- username from user -->
        <td rowspan=2><h1>booked by</h1></td>  
<!-- train num from train list -->
            <td rowspan=2><h1>Train no</h1></td>
<!-- passanger id from passanger -->
      
        <!-- ticket id from reservation -->
        <td rowspan=2><h1>reservation_id</h1></td>

        <!-- class from reservation -->
        <td rowspan=2><h1>class</h1></td>
        <!-- departure date from reservation -->
        <td rowspan=2><h1>date</h1></td>

        <!-- arrival timing from train list -->
        <td rowspan=2><h1>train timing</h1></td>
        
        
        </tr>
        </thead>
        <tbody>
        <tr>
                    <td><?php echo $rows2['name'];?></td>
                    <td><?php echo $rows3['t_id'];?></td>
                    <td><?php echo $rows['reservation_id'];?></td>

                    <td><?php echo $rows['class'];?></td>
                    <td><?php echo $rows['dest_time'];?></td>
                    <td><?php echo $rows3['arr_time'];?></td>

                </tr>
        </tbody>
        
        
        
        </table>
        <div class="btn">
        <button ><a href="welcome.php">HOME</a></button>
        <button onclick="display()">Click to Print</button>
      <script>
         function display() {
            window.print();
         }
      </script>
        <button><a class="btn btn-success" href="javascript:void(0);" onclick="generate();"> Generate    
        Screenshot »</a> </button>
    </div>
</div>
<script type="text/javascript">    
        (function (exports) {    
            function urlsToAbsolute(nodeList) {    
                if (!nodeList.length) {    
                    return [];    
                }    
                var attrName = 'href';    
                if (nodeList[0].__proto__ === HTMLImageElement.prototype || nodeList[0].__proto__ ===         
                 HTMLScriptElement.prototype) {    
                    attrName = 'src';    
                }    
                nodeList = [].map.call(nodeList, function (el, i) {    
                    var attr = el.getAttribute(attrName);    
                    if (!attr) {    
                        return;    
                    }    
                    var absURL = /^(https?|data):/i.test(attr);    
                    if (absURL) {    
                        return el;    
                    } else {    
                        return el;    
                    }    
                });    
                return nodeList;    
            }    
    
            function screenshotPage() {    
                urlsToAbsolute(document.images);    
                urlsToAbsolute(document.querySelectorAll("link[rel='stylesheet']"));    
                var screenshot = document.documentElement.cloneNode(true);    
                var b = document.createElement('base');    
                b.href = document.location.protocol + '//' + location.host;    
                var head = screenshot.querySelector('head');    
                head.insertBefore(b, head.firstChild);    
                screenshot.style.pointerEvents = 'none';    
                screenshot.style.overflow = 'hidden';    
                screenshot.style.webkitUserSelect = 'none';    
                screenshot.style.mozUserSelect = 'none';    
                screenshot.style.msUserSelect = 'none';    
                screenshot.style.oUserSelect = 'none';    
                screenshot.style.userSelect = 'none';    
                screenshot.dataset.scrollX = window.scrollX;    
                screenshot.dataset.scrollY = window.scrollY;    
                var script = document.createElement('script');    
                script.textContent = '(' + addOnPageLoad_.toString() + ')();';    
                screenshot.querySelector('body').appendChild(script);    
                var blob = new Blob([screenshot.outerHTML], {    
                    type: 'text/html'    
                });    
                return blob;    
            }    
    
            function addOnPageLoad_() {    
                window.addEventListener('DOMContentLoaded', function (e) {    
                    var scrollX = document.documentElement.dataset.scrollX || 0;    
                    var scrollY = document.documentElement.dataset.scrollY || 0;    
                    window.scrollTo(scrollX, scrollY);    
                });    
            }    
    
            function generate() {    
                window.URL = window.URL || window.webkitURL;    
                window.open(window.URL.createObjectURL(screenshotPage()));    
            }    
            exports.screenshotPage = screenshotPage;    
            exports.generate = generate;    
        })(window);    
    </script>   
    


</body>
</html>

