<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

   <style>
       .booking .book-form{
   padding:2rem;
   background: var(--light-bg);
}

.booking .book-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.booking .book-form .flex .inputBox{
   flex:1 1 41rem;
}

.booking .book-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.booking .book-form .flex .inputBox input:focus{
   background: var(--black);
   color:var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--light-black);
}

.booking .book-form .btn{
   margin-top: 2rem;
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





<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>





<section class="booking">



   <h1 class="heading-title" style="color:maroon">book your trip!</h1>

   <form action="book_form.php"  method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit"  value="submit" class="btn" name="send" >

   </form>

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
         <a href> <i class="fas fa-phone"></i> phone</a>
         <a href> <i class="fas fa-envelope"></i> bappymahmud62@gmail.com887@gmail.com</a>
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