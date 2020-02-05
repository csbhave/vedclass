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
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Teko', sans-serif;
}
body{
    background: #3a6186; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */    

}
.container-fluid{
        border:1px solid black;
    }
/* navbar */
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
#toggle-btn:hover{
}
/*container-fluid-2*/
#row-align{
    padding:50px;
}
#container-fluid-2{
    height:630px;    
    padding-top: 10%;
}
.text {
    color: #fff;
    font-size: 70px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 900;
    cursor: pointer;
    width: auto;
}
.enquiry-btn{
    width: 240px;
}
.enquiry-btn a {
    color: #fff;
    background: #1d1d29;
    display: block;
    padding: 15px 0;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 500;
     text-decoration:none;
  transition:all .5s ease;
   overflow:hidden;
      position:relative;
       z-index:2;
}
.eff-1{
  width:100%;
  height:100%;
  top:0px;
  left:-260px;
  background:#fd5b25;
  position:absolute;
  transition:all 0.5s ease-in;
  z-index:-1;
}
.enquiry-btn:hover .eff-1{
    left:0;
  }
  #navbar-ul li:hover{
      background-color: #fd5b25;
      border-radius: 30%;
    font-size: 20px;
    }
  .enquiry-btn:hover a{
    color:#fff;
  }
  .middle {
    position: relative;
    top: 30%;
    transform: translateY(-50%);
    width: 100%;
    display: block;
    justify-content: center;
}
.hidden{
    max-width: 0;
    opacity: 0;
    transition: 0.5s ease-in;
}
.text:hover .hidden{
    opacity: 1;
    max-width: 1em;
    transition: all 0.5s ease-in;
}
.para1{
    font-size: 20px;
    font-weight: 600;
    margin-top: 50px;
    color:white;
}
#col-1{
    height: 532px;
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark">
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
<div class="container-fluid" id="container-fluid-2"style="">
    <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5" id="col-1">
    <p id="ved" class="text middle"> 
                    <span>V<span class="hidden">ED</span></span>
                    
                    <span>E<span class="hidden">DUCATIONAL</span></span>
                   
                    <span>A<span class="hidden">CADEMY</span></span>
                        

                </p>
                <p class="para1">YOU HAVE A BRIGHT FUTURE
                </p> 
                <div class="enquiry-btn text-center">   
                        <a href="#contact" class="btn-3" target="_blank" rel="nofollow" class="hvr-sweep-to-right"> Enquire Now <i class="fa fa-location-arrow"></i><div class="eff-1"></div></a>
                    </div>   
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7" id="row-align">
    
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
                <img src="./img/img5.jpg" alt="Los Angeles" width="1440" height="350">
                </div>
                <div class="carousel-item">
                <img src="./img/img4.jpg" alt="Chicago" width="1440" height="350">
                </div>
                <div class="carousel-item">
                <img src="./img/img2.jpg" alt="New York" width="1440" height="350">
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