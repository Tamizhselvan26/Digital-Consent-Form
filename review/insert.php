<html>
<head>
<meta charset="utf-8"/>
<title>employee details</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
 hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
h1{
            font-size:40px;
            text-shadow:2px 2px 5px red;
        }
h2{
        font-size:40px;
        text-shadow:2px 2px 5px gold;
}
h3{
        font-size:40px;
        text-shadow:2px 2px 5px blue;
}
body {
  background-color:rgb(153,132,10);
}
div, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
form {
      margin: 0 30px;
      }
.main-block {
      max-width: 440px; 
      min-height: 560px; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
#icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
input[type=text] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
 .btn-block {
      margin-top: 10px;
      text-align: center;
      }
 button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
span{
position:fixed;
top:100px;
right:05px;
}
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
} 

span4{
position:fixed;
top:80px;
left:20px;
}
span2{
position:fixed;
top:120px;
right:20px;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: red;
}
marquee{
      font-size: 30px;
      font-weight: 800;
      color: #8ebf42;
      font-family: sans-serif;
      }
p2{
	font-size:30px;
}
</style>

<script>
function validateForm() {
  var name=document.myform.name.value;
var id=document.myform.id.value;
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(id==null || id==""){
alert("Enter employee id");
return false;
}


else{
    alert("Registration successful");
    }
}

</script>

</head>
<body>

<marquee>MADURA COATS</marquee>
<ul>
  <li><a href="login.html">Login page</a></li>
  <li><a href="insert.php">Current page</a></li>
  

</ul>
 <div id="box"></div>
        <h1>About Us</h1>
        <p2>Coats is the world’s leading industrial thread manufacturer and a major player in the Americas textiles crafts market. Headquartered in the UK we employ 19,000 employees in over 50 countries across six continents around the world.<br>
      
        <img src="mc_logo1.jpg" width="200" style='float: left; margin: 20px; border: 2px solid black; box-shadow: 0 0 5px;'>
<p2>
Connected – we have been helping to connect and form the fabric of daily life on our planet for over 200 years, and our global footprint provides unrivalled access to markets and customers<br>
<br>
Pioneering – we are restless pioneers, always seeking to create new advanced materials and partner with customers across multiple industries to realise the challenges they face<br>
<br>
Trusted – we recognise that our success rests on our reputation and the trust and confidence of the people with whom we do business and the communities in which we operate
</p2>








<center><h3>Employee Details</h3></center>
<div class="main-block">
<center><h2>Enter ur details</h2></center>
<form name="myform" method="post" action="backend.php"  onsubmit="return validateForm()"    enctype="multipart/form-data">
 <hr>

<label id="icon" for="name"><i class="fas fa-signature"></i></label>
Employee Signature<br>
<input type="file" name="myfile"/><br>
<br> 
<label id="icon" for="name"><i class="fas fa-user"></i></label>
<input type="text" name="emp_name"id="name" placeholder="Employee Name"><br>
<br> 
<label id="icon" for="name"><i class="far fa-id-badge"></i></label>
<input type="text" name="emp_id" id="id" placeholder="Employee Id" onblur="fname()"><br>
<br>
<label id="icon" for="name"><i class="far fa-comment"></i></label>
<span1>Feedback</span1>
<div class="col-75">    
        <textarea id="subject" name="feedback" placeholder="Write something.." style="height:100px;width=100px;"></textarea>    
      </div>      
<br>  <br><br><br><br><br><br>
<div class="btn-block">
          <p>By clicking Register, you agree on our <a href="https://www.w3docs.com/privacy-policy" target="_blank">Privacy Policy</a>.</p>
  
<button type="submit"name="btn"  href="/">Submit</button>
        </div>
</center>
</form>



<p></p>


</body> 
</html>
