<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Speakwell Academy, we empower learners of all ages to master English, debate, and public speaking. With expert teachers
             and engaging lessons, we help you speak clearly, confidently, and effectively in any situation
      </p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+20</h3>
            <span>English courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+1000</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+50</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Learning Outcome</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>I started as a complete beginner, and now I can hold conversations confidently. Speakwell made learning English enjoyable!</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Bol Deng</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The debate classes boosted my confidence. I can now present my ideas in front of an audience without fear.</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Abass Akoon</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Great teachers, flexible schedules, and practical lessons. Speakwell Academy is the best investment I’ve made in myself.</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Demarko</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>As a parent, I’ve seen my son’s confidence grow since joining Speakwell. He now speaks English fluently at school.</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Antonio Berlin</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I love how Speakwell combines English lessons with debate and public speaking. It’s a unique and powerful approach.</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Oliver Johnson</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>From shy to confident! Speakwell Academy truly transformed how I express myself in English and in life.</p>
         <div class="user">
            <img src="https://m.media-amazon.com/images/I/41jLBhDISxL.jpg" alt="">
            <div>
               <h3>Chadrach Chol Ngor</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>