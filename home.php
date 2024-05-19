<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TAPROBANA</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- custom css file link-->
  <link rel="stylesheet" href="css/style.css" />
  
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/package.css" />
</head>

<body>

  <?php include('header.php'); ?>
  <!-- login form container -->
  <!-- <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>

    <form action="myForm" action="signin.php" method="POST">
      <h3>Login</h3>
      <input type="email" class="box" placeholder="Enter your email" />
      <input type="password" class="box" placeholder="Enter your password" />
      <input type="submit" value="login now" class="btn" />
      ,<input type="checkbox" id="remember" />
      <label for="remember">remember me</label>
      <p>forget password? <a href="#">Click here</a></p>
      <p>don't have an account? <a href="#">Register now</a></p>
    </form>
  </div> -->



  <!-- home section starts -->
  <section class="home">
    <div class="home-slider">
      <div class="slide" style="background:url(assets/home-bg.jpg) no-repeat">
        <div class="content">
          <span>expolre, discover, travel</span>
          <h3>travel around the world</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- home section ends -->

  <!-- home about section starts -->
  <section class="home-about">
    <div class="images">
      <img src="assets/aboutUs.webp" alt="">
    </div>
    <div class="content">
      <h3>about us</h3>
      <p>Discover Sri Lanka, an island of untold beauty, where ancient wonders and modern vibes converge amidst lush
        landscapes and pristine beaches. From the awe-inspiring Sigiriya Rock to the serene beaches of Unawatuna, every
        step is an adventure. Taste the rich flavors of its cuisine, dive into its vibrant culture, and wander through
        tea-covered hills that seem to touch the sky. Sri Lanka is not just a destination; it's a myriad of experiences
        waiting to captivate your soul. Start your journey here.</p>
      <a href="about.php" class="btn">read more</a>
    </div>
  </section>
  <!-- home about section ends -->


  <!-- home about packages starts -->
  <section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="assets/places/place6.jpg" alt="">
        </div>
        <div class="content">
          <h3>Galle Dutch Fort</h3>
          <p>A UNESCO World Heritage Site, is a well-preserved colonial-era fortress on the southwestern coast of Sri
            Lanka. Its historic ramparts, charming cobblestone streets, and mix of European and South Asian architecture
            make it a captivating destination for history enthusiasts and casual strollers alike.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="assets/places/place7.jpg" alt="">
        </div>
        <div class="content">
          <h3>Polonnaruwa Vatadageya</h3>
          <p>An ancient structure in Polonnaruwa, Sri Lanka, is a circular relic shrine with intricately carved stone
            pillars and guardstones. Serving as a testament to the architectural and artistic achievements of the
            Polonnaruwa Kingdom, it stands as a sacred site and a symbol of the region's historical significance.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="assets/places/place8.jpg" alt="">
        </div>
        <div class="content">
          <h3>Ella Rock</h3>
          <p>Situated in the picturesque town of Ella, Sri Lanka, is a popular hiking destination known for its
            breathtaking panoramic views of the surrounding hills and tea plantations. The trail leading to the summit
            offers both nature enthusiasts and adventure seekers a rewarding experience amidst the lush landscapes of
            the central highlands.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
    </div>
  </section>
  <!-- home about packages ends -->







  <!-- services section starts -->

  <section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">

      <div class="box">
        <img src="assets/adventure.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="assets/travel.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="assets/trekking.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="assets/campfire.png" alt="">
        <h3>camp fire</h3>
      </div>
      <div class="box">
        <img src="assets/offroad.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="assets/camping.png" alt="">
        <h3>camping</h3>
      </div>

    </div>
  </section>

  <!-- services section ends -->












  <!-- custom js file link-->
  <script src="js/script.js"></script>
  <script src="js/login.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <?php include('footer.php'); ?>
</body>

</html>