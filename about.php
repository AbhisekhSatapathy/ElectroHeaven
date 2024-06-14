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
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Welcome to ElectroHeaven!</h3>
         <p>
At ElectroHeaven, we believe in bringing the latest and greatest electronic gadgets right to your fingertips. Whether you're a tech enthusiast, a casual user, or a professional, we're here to provide you with a seamless shopping experience for all your electronic needs. Our journey began with a passion for innovation and a commitment to customer satisfaction. With a team of dedicated professionals, we've curated a diverse range of products from leading brands around the globe. From smartphones to smart home devices, from cutting-edge wearables to high-performance gaming gear, we have something for everyone.
What sets ElectroHeaven apart is our relentless focus on quality, authenticity, and affordability. We understand that technology should enhance your life, not break the bank. That's why we work tirelessly to offer competitive prices without compromising on excellence.
But ElectroHeaven is more than just a marketplace. It's a community of like-minded individuals who share a love for all things electronic. Whether you're seeking advice, exploring the latest trends, or discovering hidden gems, our platform is your go-to destination.
Join us on this exciting journey as we strive to redefine the way you shop for electronics. Your satisfaction is our top priority, and we're here to make your experience with ElectroHeaven nothing short of exceptional.

Thank you for choosing ElectroHeaven – where technology meets convenience, and shopping becomes an experience worth cherishing.
         </p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>


<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>