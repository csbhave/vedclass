<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VED Educational Academy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f112d23fef.js" crossorigin="anonymous"></script>
 <style>
    .container-fluid{
        border:1px solid black;
    }
    .carousel-inner img {
      width: 100%;  
  }
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Teko', sans-serif;
}
#nav-bar{
    position: sticky;
    top: 0;
    z-index: 10;   
}
#navbar{
    background: rgba(0,0,0,0.65);
    padding: 0 !important;
    position: fixed;
    width: 100%;
    z-index: 10;
    height: 100px;
}
#navbar img{
    width: 150px;
    margin-left:50px; 
}
#navbar-ul{
    margin-right: 100px;
}
#navbar-ul li{

    padding: 0 10px;
    transition: all 0.5s ease-in;
}
#navbar-ul li a{
    color: #fff !important;
    font-weight: 600;
}
#navbar-ul li a:hover{
    opacity: 1;
    transition: all 0.5s ease-in;
   font-size:25px;
}
#toggle-btn{
    background:aliceblue;
    color:black;
    margin-right:30px;
    width:60px;
    height:60px;
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="./images/logo.jpg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle-btn">
            <span><i class="fas fa-bars"></i></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="navbar-ul" class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
                
            <li class="nav-item">
              <a class="nav-link" href="#footer">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#location">Location</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="./student/signin.php">Login</a>
              </li>      
          </ul>
        </div>
      </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
  
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./img/img5.jpg" alt="Los Angeles" width="1440" height="650">
                </div>
                <div class="carousel-item">
                <img src="./img/img4.jpg" alt="Chicago" width="1100" height="650">
                </div>
                <div class="carousel-item">
                <img src="./img/img6.jpg" alt="New York" width="1100" height="650">
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid" style="height:600px;">
    <h1>class portfolio</h1>
</div>

<div class="container-fluid" style="height:600px;">
    <h1>our services</h1>
</div>


<div class="container-fluid" style="height:600px;">
    <h1>Recent Achievement</h1>
</div>

<div class="container-fluid" style="height:600px;">
    <h1>Student feedback</h1>
</div>

<div class="container-fluid" style="height:600px;">
    <h1>Location</h1>
</div>

<div class="container-fluid" style="height:465px;">
    <h1>contact us</h1>
</div>


<div class="container-fluid" style="height:200px;">
    <h1>footer</h1>
</div>

</body>
</html>