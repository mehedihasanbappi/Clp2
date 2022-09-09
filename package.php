<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="style.css">
   
<style>
    .btn{
      display: inline-block;
      background: var(--black);
      margin-top: 1rem;
      color:var(--white);
      font-size: 1.7rem      padding:1rem 3rem;
      cursor: pointer;
   }
   
   .btn:hover{
      background: var(--main-color);
   }
   
.packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}

.packages .box-container .box{
   border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
   display: none;
}

.packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){
   display: inline-block;
}

.packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

.packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

.packages .load-more{
   text-align: center;
   margin-top: 2rem;
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

<div class="heading" style="background:url(images/pac1.jpg) no-repeat">
   <h1>packages</h1>
</div>




<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pa1.jpg" alt="">
         </div>
         <div class="content">
            <h3>experience & adventure</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa2.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa3.jpg" alt="">
         </div>
         <div class="content">
            <h3>experience & adventure</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa4.jpg" alt="">
         </div>experience & adventure
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa5.jpg" alt="">
         </div>
         <div class="content">
            <h3>experience & adventure</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa6.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa7.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa8.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa9.jpg" alt="">
         </div>
         <div class="content">
            <h3>experience & adventure</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pa10.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>experience & adventure</h3>
            <p>oh! want to experience the world? lets grab the golden opportunity to travel throughout the world!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>oh! want to experience the world? be fast to experience first by travelling  your dream place!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>




<script>
       let loadMoreBtn = document.querySelector('.packages .load-more .btn');
 let currentItem = 3;
 
 loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
       boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
       loadMoreBtn.style.display = 'none';
    }
 }
   </script>




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
         <a href> <i class="fas fa-phone"></i> phone</a>
         <a href> <i class="fas fa-envelope"></i> bappymahmud62@gmail.com</a>
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