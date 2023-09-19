<!DOCTYPE html>
<html lang="en">
<head>
  <title>PLANT SHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=".\css\bootstrap.min.css">
    <link rel="stylesheet" href=".\css\bootstrap-icons.css">
    <link rel="stylesheet" href=".\css\font-awesome.min.css">
    <link rel="stylesheet" href=".\css\style.css">
  <script src=".\js\bootstrap.min.js"></script>
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src=".\js\jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <style>
    .social i{
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
    }
  </style>
<!-- ------------------------NAV BAR---------------------------- -->
<?php include "NavBar.php"  ?>
<!-- ----------------------------BODY--------------------- -->
<div class="container">
<div class="jumbotron">
  <div class="row">
    <div class="col-lg-6 mt-5">
  <img src="img\bg.png" width="90%" height="90%" class="responsive">
  </div>
  <div class="col-lg-6 my-5 text-center">
<h1 class="text-warning">Welcome To <b class="text-success"> Plants Shop </b><i class="fa-solid fa-face-smile"></i></h1>
<h4 class="mt-4 text-secondary">We Have All Natural Plants In Tamilnadu</h4>
<p class="mt-3">You Can Order Some Plants Like Flowers Plants,Fruits Plants And Other Plants</p>
<a href="FlowerPlant.php" class="btn btn-default bg-success text-light mt-3">Flower Plants</a>
<a href="FruitPlant.php" class="btn btn-default bg-success text-light mt-3">Fruits Plants</a>
<a href="otherPlant.php" class="btn btn-default bg-success text-light mt-3">Other Plants</a>
  </div>
  </div>
 </div>
 <!-- -------------------------------OUR PRODUCTS-------------------------- -->
 <div class="text-center mt-3 p-3 rounded-2 bg-success">
  <h1 class="text-light"><b> Our Plants </b><i class="fa-solid fa-seedling text-white"></i></h1>
 </div>
 <div class="card-group mt-5 bg-success">
  <div class="card m-3">
    <img class="card-img-top" src="./img/rose-flower.jpg"  width="300" height="350">
    <div class="card-body">
      <h3 class="card-title">Flower Plants</h3>
      <p class="card-text">We Have Many Flower Like Lotus,Canna Lily,Rose,
        Plumeria,Arabian Jasmine,Aak Crown Flower,
        Coral Jasmine,Ect..,</p>
        <a href="FlowerPlant.php" class="btn btn-default bg-success text-light"><b> Visit</b></a>
    </div>
  </div>  
  <div class="card m-3">
    <img class="card-img-top" src="./img/fruits1.jpg"  width="300" height="350">
    <div class="card-body">
      <h3 class="card-title">Fruits Plants</h3>
      <p class="card-text">We Have Many Fruits Like Mango,Banana,Lemon,Guava,Sapota,Papaya And Ect..,</p>
      <a href="FruitPlant.php" class="btn btn-default bg-success text-light"><b> Visit</b></a>
    </div>
  </div>  
  <div class="card m-3">
    <img class="card-img-top" src="./img/otherplant.jpg"  width="300" height="350">
    <div class="card-body">
      <h3 class="card-title">Other Plants</h3>
      <p class="card-text">We Have Many Common Like Teak Plant,Tamarind Plant,Coconut Plant,
        Terminalia catappa And Ect..,</p>
        <a href="otherPlant.php" class="btn btn-default bg-success text-light"><b> Visit</b></a>
    </div>
  </div>  
</div>
<!-- ---------------------ABOUT-------------------------- -->
<div class="text-center mt-5 bg-success  p-3 rounded-2" id="about">
  <h1 class="text-light"><b>About Us </b><i class="fa-solid fa-people-group text-light"></i></h1>
 </div>
 <div class="row text-center mt-3 p-4"  id="about-bg">
  <div class="col-md-4">
  <img src="./img/myphoto.jpg" style="border-radius:150px;" class="img-responsive" id="myimg" width="300" height="300"> 
</div>
  <div class="col-md-8 mt-4">
  <h4 class="text-dark"><b>This Web Page Designed And Created By </b></h4><br>
<h5 class="text-success"><b> Mr.Prabhakaran BCA</b></h5>
<b>Web Designer</b><br>
<a href="tel:9025647338" class="btn text-primary"><i class="fa-solid fa-phone"></i> <b> Contact: 9025647338</b></a>
  </div>
 </div>
 <!-- --------------------------CONTACT----------------------- -->
 <div class="contact" id="contact">
 <div class="text-center mt-5 bg-success p-3 rounded-2">
  <h1 class="text-light"><b>Contact Us </b><i class="fa-sharp fa-solid fa-bell"></i></h1>
 </div>
 <div class="row  mt-5 text-light">
  <div class="col-lg-6">
  <h1 class="text-secondary mb-4">You Have Any Doubts Say Hi!</h1>
  <h3><a href="mailto:asprabha453@gmail.com" class="nav-link  text-dark mt-3  p-4"><i class="fa-solid fa-envelope text-danger"></i> asprabha453@gmail.com</a></h3>
  <h3><a href="tel:9025647338" class="nav-link text-dark mt-3 p-4"><i class="fa-brands fa-whatsapp text-success"></i> 9025647338</a></h3>
  </div>
  <div class="col-lg-6 mt-3  text-center">
  <h1 class="text-dark mb-4">FeedBack <i class="fa-solid fa-face-smile text-dark"></i></h1>
  <center>
  <form class="form-horizontal p-2" action="insertFeedback.php" method="post"> 
    <div class="form-group">
      <div class="col-sm-6"> 
        <input type="text" class="form-control p-4" id="name" placeholder="Enter Your Name" name="name" required>
      </div>
    </div>
   
    <div class="form-group mt-3">
      <div class="col-sm-6"> 
        <input type="email" class="form-control p-4" id="mail" placeholder="Enter Email Address" name="mail" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <div class="col-sm-6"> 
       <textarea name="doubt" id="doubt" cols="30" placeholder="Enter Subject/Doubt/FeedBack" class="form-control" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default bg-success p-3 text-light">Submit</button>
      </div>
    </div>
  </form>
  </center>
  </div>
</div>
<div class="social text-dark mt-3 text-center">
 <a href="#"> <i class="fa-brands fa-facebook text-primary"></i></a>
<a href="#"><i class="fa-brands fa-instagram text-danger"></i></a>
<a href="#"><i class="fa-brands fa-google text-danger"></i></a>
<a href="#"><i class="fa-brands fa-whatsapp text-success"></i></a>
<a href="#"><i class="fa-solid fa-envelope text-primary"></i></a>
<a href="#"><i class="fa-brands fa-linkedin text-primary"></i></a>
</div>
</div>
</div>
<?php include "footer.php" ?>
</body>
</html>
