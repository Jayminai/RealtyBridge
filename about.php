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
   <link href="images/logos/favicon-1.ico" rel="icon">
   <link href="images/logos/favicon-1.ico" rel="apple-touch-icon">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

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
         <p>At RealtyBridge, we understand that the world of real estate is filled with choices. So, why should you choose us? It's simple: we're more than just a real estate agency. We're your dedicated partners in achieving your property dreams. Our commitment to excellence, deep market knowledge, and unwavering focus on your unique needs set us apart. With us, you're not just a client; you're a valued member of our real estate family. Discover the difference of choosing RealtyBridge.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Explore Your Dream Property: Discover a wide range of homes and properties that fit your unique preferences. Our user-friendly search feature makes finding your dream property a breeze. Whether you're looking for a cozy home, an investment opportunity, or your ideal commercial space, start your property search here.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Connect with Our Expert Agents: Our experienced real estate agents are here to guide you every step of the way. Reach out to our dedicated team for personalized assistance, property information, market insights, or any real estate inquiries you may have. Let's start the conversation.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Experience the Best of Real Estate: At RealtyBridge, we believe that real estate should be an enjoyable journey. From stunning home tours to informative articles about the real estate market, our 'Enjoy Property' section is your gateway to making the most of your real estate experience. Explore, learn, and delight in the world of real estate with us.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>David Culver</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I couldn't be happier with the services provided by RealtyBridge. They helped me find my dream home within my budget, and their expertise made the entire process smooth and stress-free. I highly recommend them to anyone looking to buy or sell a property.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>Sarah Mucha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>I worked with RealtyBridge to sell my property, and they exceeded my expectations. Their marketing strategies attracted multiple offers, and they negotiated a great deal for me. I appreciate their professionalism and dedication.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Josh Campbell</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>As a first-time homebuyer, I was a bit overwhelmed, but RealtyBridge guided me through the entire process. They patiently answered all my questions and found a home that perfectly suited my needs. Their knowledge and commitment are truly commendable.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>Kate Bennett/h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>RealtyBridge not only helped me find a fantastic rental property but also managed it efficiently. Their property management services have saved me time and hassle. I trust them to take care of my investments.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Omar Jimenez</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>RealtyBridge team was outstanding in helping me sell my family home. They had a deep understanding of the local market and were able to secure a quick and profitable sale. I couldn't have asked for better partners in this process.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Sophia Yan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I had the pleasure of working with RealtyBridge to find an office space for my business. Their in-depth knowledge of the commercial real estate market and their commitment to finding the perfect location were instrumental in helping my business thrive.</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>