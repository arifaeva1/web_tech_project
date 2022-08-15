<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    nav,header,footer{
  display: block;
}
body{
  margin: 0;
  line-height: 1;
  background-color:#82bda0;
}
nav{
  width: 100%;
  margin: 0;
}
nav ul{
  background-color:#4eb381;
  overflow: hidden;
  margin: 0;
  padding: 0;

}
ul.topnav li{
  list-style-type: none;
  float: left;

}
ul.topnav li.topnav-right{
  list-style-type: none;
  float: right;

}
ul.topnav li a{
  display: block;
  text-decoration: none;
  min-height: 16px;
  text-align: center;
  padding: 14px;
  text-transform: uppercase;
  color: #060907;
}
ul.topnav li a:hover{
  background-color: yellowgreen;
  color:#060907;

}
ul.topnav li.dropdown{
  display: none;
}
/*##########  Mobile  #############*/
@media screen and (max-width:690px){
  ul.topnav li:not(:nth-child(1)){
    display: none;
  }

  ul.topnav li.dropdown{
    display: block;
    float: right;
  }
  ul.topnav.responsive li.dropdown{
    position: absolute;
    top: 0;
    right: 0;

  }

  ul.topnav.responsive{
    position: relative;

  }
  ul.topnav.responsive li{
    display: inline;
    float: none;
  }
  ul.topnav.responsive li a{
    display: block;
    text-align: left;
  }
}



h1{
text-align: center;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: black;
font-size: 50px;
padding:150px;


}


  </style>
  <title>Covid Test Kit</title>
</head>

<body >
<div class="whole">
  <nav>
    <ul class="topnav" id="dropdownclick">
      <li> <a href="#home">Home</a>
      </li>


      <li class="topnav-right"> <a href="../view/clientregistration.php">REGISTER</a> </li>
	   <li class="topnav-right"> <a href="../view/clientlogin.php">LOGIN</a> </li>
      <li class="dropdown"><a href="javascript:void(0)" onclick="dropdownmenu()">&#9776;</a></li>
    </ul>
  </nav>
  <script>
function dropdownmenu() {
  var x = document.getElementById("dropdownclick");
  if(x.className === "topnav"){
    x.className += " responsive";
  }
  else{
    x.className = "topnav";
  }
}
  </script>

<div >

</div>
<div class="image">
  <h1>
    Welcome to 
    Covid-19 Test Kit
  </h1>

</div>
</div>
</body>

</html>
