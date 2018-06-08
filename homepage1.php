<!DOCTYPE html>
<html>
<head>
<title>Project Beta</title>
<link rel="stylesheet" href="cssproject.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body>
<header style="background-color:white; height:50px" >
<nav style="background-color:white class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:orange" class="navbar-brand" href="homepage1.php">EgyptStreetBank</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  


<!--<img src="background.jpg" style="width:1024px;height:50px;">-->

</header>
<!--****************************TOP*******************************-->
<div id="top" style="background-image:url('background.jpg')">

<a href="addaskill.php"><button  style="margin-left:408px;background-color:#f4c141;color:black">ADD A SKILL    </button></a>
<a href="addathing.php"><button style="background-color:#f4c141;color:black">                         ADD A THING    </button></a>
<a href="makearequest.php"><button style="background-color:#f4c141;color:black" >                         MAKE A REQUEST </button></a>

<iframe style="background-image:url('background.jpg')"   src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13810.973985265286!2d31.3026881!3d30.072886150000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1493399511634" 
width="1228" height="272" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>
<!--****************************UPLEFT*******************************-->
<div id="upleft">h</div>
<!--****************************UPRIGHT******************************-->
<div id="upright">o</div>
<!--*****************************MAIN********************************-->
<p style="margin-top:29px"</p>
<div id="main">
<button style="width:90px;height:40px;margin-left:200px;background-color:#f4c141;color:black"><a style="color:black" href="getactivity.php" target="iframe_a">Activity</a></button>
<button style="width:90px;height:40px;margin-top:0px;background-color:#f4c141;color:black"><a style="color:black" href="getoffered.php" target="iframe_a">Offered</a></button>
<button style="width:90px;height:40px;margin-top:0px;background-color:#f4c141;color:black"><a style="color:black" href="getrequests.php" target="iframe_a">Requests</a></button>
<button style="width:90px;height:40px;margin-top:0px;background-color:#f4c141;color:black"><a style="color:black" href="getneighbours.php" target="iframe_a">Neighbours</a></button>
<iframe allowtransparency="true" style="background-color: snow;    width:815px;height:245px;margin-left:0px" src="getneighbours.php" name="iframe_a"></iframe>


</div>
</body>
</html>