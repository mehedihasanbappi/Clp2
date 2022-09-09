<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css"/>

<style>
   
   .home .slide{
   text-align: center;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   background-size: cover !important;
   background-position: center !important;
   min-height: 80rem; 
}
 
 .home .slide .content span{
   display: block;
   font-size: 2.5rem;
   color:var(--light-white--);
   padding-bottom: -1rem;
   animation:fadeIn .2s linear backwards .2s;
   
}
.home .slide .content h3{
   font-size: 4vw;
   color:khaki;;
   text-transform: uppercase;
   line-height: 1;
   text-shadow: var(--text-shadow);
   padding:1rem 0;
   animation:fadeIn .8s linear backwards .8s;
}
@keyframes fadeIn {
   0%{
      transform: scale(0);
      opacity: 0;
   }
}
.btn{
      display: inline-block;
      background: var(--black);
      margin-top: 1rem;
      color:var(--white);
      font-size: 1.7rem;
      padding:1rem 3rem;
      cursor: pointer;
   }
   .btn:hover{
      background: var(--main-color);
   }
   .home .slide .content .btn{
   animation:fadeIn .2s linear backwards .6s;
   }
</style>

</head>

<body>



<section class="header">
   <a href="home.php" class="logo">travel & tour</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   
</section>




<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/h2.jpg) no-repeat">
            <div class="content">
               <span>...expand the domain of knoledge...</span>
               <h3>travel throughout the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>   
</section>




<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>




<section class="home-about">
   <div class="image">
      <img src="images/bappy.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>this is the matter of great happiness that we are offering you such a golden chance to enjoy the beauty of the beautiful world.we will try our best to give you all kind of facilities.are you ready?..</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>




<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pa1.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa2.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>



<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>lets grab the special and gorgeous opportunity to expand you with the library of knowledge,the world! we are optimistic that you catch the golden opportunity in order to spend your time with the world!!!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>




<section class="footer">
   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href><i class="fas fa-phone"></i> phone</a>
         <a href> <i class="fas fa-envelope"></i> Bappymahmud62@gmail.com</a>
         <a href> <i class="fab fa-facebook"></i>Bappy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy-policy</a>
      </div>
   </div>

   <div class="credit"> created by <span>Mehedi Hasan Bappy</span> | all rights reserved! </div>
   
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>