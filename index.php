<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Assignment Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
 .myPage{
	 border-left: 1px solid red;
	}
.centered {
  position: absolute;
  top: 30%;
  left: 52%;
  transform: translate(-90%, -18%);
  width: 47%;
  word-wrap: break-word;
  color: #00A8B4;
   margin-bottom: 30px;
   text-align: center;
   line-height: 1.375em;
   letter-spacing: 2px;
}
  .para1{
    font-size: 27px;
    font-family: Bahnschrift;
    color: #00A8B4;
    font-weight: 600;
    margin-bottom: 10px;
    text-align: center;
    line-height: 1.375em;
    letter-spacing: 2px;
  }
  .para2 {
    font-size: 18px;
    line-height: 1.375em;
   color: #00A8B4;
    font-weight: 400;
    margin-bottom: 20px;
     text-align: center;
     font-family: calibri;
  } 
   .para3{
  	 border-radius:0 !important;
  	 font-size: 18px;
  	  background-color:#006778;
  	  margin-bottom: 20px; 
  	  color: white;
  	   margin-bottom: 25px;
  } 
  .para31{
  	font-size: 12px;
  }

  .para4 {
  	color: #00A8B4;
  	font-size: 20px;
  	 font-family: calibri;
  	margin: 44px 60px;
  }
  .fakeimg {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  margin-top: 18px;
  margin-left: 20px;
  }
  .shop-para1 {
  	font-size: 18px;
    line-height: 1.375em;
   color: #006778;
    font-weight: 400;
    margin-top: 30px;
     text-align: center;
     font-family: Times New Roman;
  }
   .shop-para2{
  	font-size: 15px;
    line-height: 1.375em;
   color: #89817C;
    font-weight: 400;
    margin-top: 12px;
     text-align: center;
     font-weight: bold;
     text-transform: uppercase;
  }
   .shop-para3 {
  	font-size: 17px;
    line-height: 1.375em;
   color: black;
    font-weight: 400;
    margin-top: 12px;
     text-align: center;
     font-weight: bold;
  }
  .shop-para5{
  	font-size: 15px;
   
   color: gray;
  font-family: calibri;
    margin-top: 8px;
  }
  .last-row {
  	margin:10px;
  }
  .shop-price {
  	margin-right: 10px;
  	text-decoration: line-through;
  }
  .container {
    font-family: Montserrat, sans-serif;
  }
 .bord{
 	 border-right: 0.5px solid lightgray;
 }
 .sale{
 	background-color: orange;
 	color: white;
 	border-radius: 50px;
 	width: 60px;
 	margin-top: 10px;
 }
  .banner
  {
  	/*background-image: url("img/homepage.jpg");*/
  	background-size: cover;
  	background-position: fixed;
  	background-attachment: cover;
  	border-top:  1px solid gray;
  	border-width: 100%;
  	box-sizing: border-box;
  	margin-left: 0px;
  	margin-right: 0px;
  }
  .shop
  {
  	height: 230px;
  	width: 260px;
  	margin-left: 25px;
  	 box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .shop1
  {
  	border-style: solid;
  	border-width: 2px;
  border-color: lightgray black black  lightgray ;
  	float: left;
  	width: 260px;
  	margin-left: 25px;
  	font-size: 17px;
    line-height: 1.375em;
   color: white;
    background-color:#006778;
    font-weight: 400;
   padding-top: 10px;
     text-align: center;
     font-weight: bold;
   background-color:#006778;
  }
  
 .footer {
   /*position: fixed;*/
   left: 0;
   width: 100%;
   background-color: #00A8B4;
   color: white;
   text-align: center;
   height: 40px;
   width: 100%;
   padding: 5px;
}
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
 html {
  font-size: 1rem;
}

@include media-breakpoint-up(sm) {
  html {
    font-size: 1.2rem;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 1.4rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.6rem;
  }
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container bord">
	<div id="services" class="container text-center">
	  <img src="img/logo.svg" alt="New York" width="200" height="110">
	</div>
	<div class="container">
		<img src="img/homepage.jpg" alt="Snow" width="100%" class="banner">
  	<div class="container  centered"> 
  	<div class="hero-slide-cta-wrap">
	  	<h2 class="para1">Delivering California's Best To Your Doorstep 10% Off Your Entire Order.</h2>
		<h4 class="para2">Use Code: HELLO01</h4>
		<a href="#" class="btn para3" target="_self" role="button">SHOP NOW</a>
		 <p class="para31">*Offer Valid till Octomber 31st 2020</p>
		 <p class="para31">*Same day delivery available</p>
	</div>
 </div>
</div>
<div class="container">
    <div class="header-wrap">
        <h3 class="slider-header-text para4">TOP PRODUCTS</h3>
	    <div class="row">
	    	<div class="col-sm-3 shop">
     			<div><button class="btn btn-warning sale">sale</button><img src="img/1.jpg" height="160px" width="160px" class="fakeimg"></div>
    		</div>
   			 <div class="col-sm-3  shop">
     			<div><img src="img/2.jpg" height="160px" width="160px" class="fakeimg"></div>
    		</div>
   		   <div class="col-sm-3 shop">
    		  <div class="fakeimg"><img src="img/3.jpg" height="160px" width="160px" class="fakeimg"></div>
    		</div>
   			<div class="col-sm-3 shop">
     		 	<div class="fakeimg"><img src="img/4.jpg" height="160px" width="160px" class="fakeimg"></div>
     		</div>
 	 </div>
<div class="row">
  <div class="col-sm-3 shop "> <p class="shop-para1">THC Dominant Brew Cold Brew</p><p class="shop-para2">BY WEEKENDERS</p>
  	<p class="shop-para3"><span class="shop-price" style=" ">$412</span>$452.00</p></div> 

  <div class="col-sm-3 shop "> <p class="shop-para1">
High Dose Brew Cold Brew</p><p class="shop-para2">BY KISKANU</p>
  	<p class="shop-para3">$452.00</p></div>

  	<div class="col-sm-3 shop "> <p class="shop-para1">
Chill Single Brew Pre-Roll</p><p class="shop-para2">BY WEEKENDERS</p>
  	<p class="shop-para3">$452.00</p></div>

  	<div class="col-sm-3 shop "> <p class="shop-para1">Cannabis Brew Intimacy Oil</p><p class="shop-para2">BY KISKANU</p>
  	<p class="shop-para3">$452.00</p></div>
</div>
<div class="row">
  <div class="col-sm-3 shop1"><p >SHOP NOW</p></div>
  <div class="col-sm-3 shop1"><p >SHOP NOW</p></div>
  <div class="col-sm-3 shop1"><p >SHOP NOW</p></div>
  <div class="col-sm-3 shop1"><p >SHOP NOW</p></div>
</div>
 </div>
  </div>

<div class="container">
            <div class="header-wrap">
               <h3 class="slider-header-text para4">WHY SAVA ?</h3>
    <div class="row last-row">
    <div class="col-sm-4 "> <b class="shop-para1">Some text about me in m..</b><p class="shop-para5">Some text about me in culpa qui officia  anim.me text about me indeserunt mollit anim.me text about me in deseruntme in mollit anim.me text about me in  mollit anim..</p></div>
       <div class="col-sm-4 "> <b class="shop-para1">Some text about me in m..</b><p class="shop-para5">Some texta deserunt mollit anim.me text about me indeserunt mollit anim.me text about me in deseruntme in mollit anim.me text about me in  mollit anim..</p></div>
        <div class="col-sm-4 "> <b class="shop-para1">Some text about me in m..</b><p class="shop-para5">Some text about me in culpa qui officia deserunt mollit anim.me text about me indeserunt mollit anim.me  deseruntme in mollit anim.me text about me in  mollit anim..</p></div>
</div>
</div>
</div>
<div class="container">
	<p class="footer">Privacy Policy | Terms of Service</p>
</div>
</div>
</body>
</html>
