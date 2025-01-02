<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>



<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> Online delivery is especially appealing for those with busy schedules, making it easier to enjoy meals without the hassle of cooking or going out. Additionally, technology has made the ordering process seamless, providing quick access to menus, reviews, and various payment options, enhancing the overall dining experience</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>



<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>you have choose any foods of our website, and it process is very simple and friendly.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>It ensures that customers receive their orders promptly, maintaining the freshness and quality of the food.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>After the taking your order, you have taste your meal hurry up.</p>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.jpg" alt="">
            <p>Delicious and diverse menu options that cater to various tastes.
               Fresh ingredients and high-quality preparation make every bite enjoyable.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pasindu</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.jpg" alt="">
            <p>Consistent quality and flavor, my go-to choice for satisfying meals.
                User-friendly site and easy ordering process streamline the experience.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Roshan</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.jpg" alt="">
            <p>Healthy food options available, making it a guilt-free indulgence.
               Appreciate the detailed nutritional information for health-conscious choices</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MUfli</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.jpg" alt="">
            <p>Accurate order fulfillment, never had issues with missing items.
               Great value for money; reasonable prices for the quality provided.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pulina</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.jpg" alt="">
            <p>Super fast delivery; beats my expectations every time.
               Tastes like homemade; the chefs put a lot of care into their dishes.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kaveen</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.jpg" alt="">
            <p>
               Online tracking feature is convenient for keeping an eye on my order's status.
               Great for group orders; everyone can find something they love.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Thisaru</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>


<?php include 'components/footer.php'; ?>







<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>