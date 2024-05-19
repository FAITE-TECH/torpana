<!DOCTYPE html>
<html>

<head>
  <title>TAPROBANA</title>
  <!-- CSS only -->
  <?php require('inc/links.php'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="css/about.css" />

  <link rel="stylesheet" type="text/css" href="css/common.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>

</head>

<body>
  <header>


    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>aprobana</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="book.php">book</a>
      <a href="packages.php">packages</a>
      <a href="room.php">hotels</a>
      <a href="food.php">foods</a>
      <a href="weatherApp.php">weather forcasting</a>
      <a href="about.php">about</a>
    </nav>

    <div class="icons">
      <i class="fas fa-search" id="search-btn"></i>
      <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here..." />
      <label for="search-bar" class="fas fa-search"></label>
    </form>
  </header>



  <div class="heading" style="background:url(assets/about.jpg) no-repeat">
    <h1>about us</h1>
  </div>

  <section class="about">
    <div class="image">
      <img src="assets/aboutUs.webp" alt="">
    </div>
    <div class="content">
      <h3>Why Choose Us?</h3>
      <p>Welcome to the enchanting island of Sri Lanka, a jewel nestled in the Indian Ocean, where ancient ruins and
        golden beaches meet lush tea gardens and wild safaris. This paradise is a tapestry of rich cultural heritage and
        breathtaking natural beauty, offering an array of unforgettable experiences.</p>
      <p>Explore the
        old-world charm of Galle Fort, indulge in the flavors of its exotic cuisine, or find serenity in the hill
        country's rolling mists. Every corner of Sri Lanka is imbued with a magic that beckons to be discovered. Join us
        on a journey of discovery and wonder, where every moment is a story waiting to unfold.</p>
      <div class="icons-container">
        <div class="icons">
          <i class="fas fa-map"></i>
          <span>top destination</span>
        </div>

        <div class="icons">
          <i class="fas fa-hand-holding-usd"></i>
          <span>affordable price</span>
        </div>

        <div class="icons">
          <i class="fas fa-headset"></i>
          <span>24/7 guide service</span>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="assets/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="assets/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="assets/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="assets/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4>
        </div>
      </div>

    </div>
  </div>


  <section class="reviews">

    <h1 class="heading-title">Client Reviews</h1>
    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-1.jpg">

            <h3>John Doe</h3>
            <span>traveler</span>
            <p>My experience with this website was nothing short of amazing! From the easy booking process to the
              well-curated travel packages, I couldn't have asked for a better way to explore Sri Lanka. The attention
              to detail and personalized itineraries made my trip memorable. Highly recommended!</p>

          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-2.png">
            <h3>Jane Smith</h3>
            <span>traveler</span>
            <p>As a frequent traveler, I can confidently say that this website exceeded my expectations. The diverse
              range of packages allowed me to tailor my journey, and the attention to customer service made all the
              difference. The stunning visuals and user-friendly interface added to the overall experience. Can't wait
              for my next adventure with this platform!</p>

          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-3.jpg">
            <h3>Emily</h3>
            <span>traveler</span>
            <p>A breathtaking retreat! Lake Lora's serene beauty was unmatched, and the cozy cabin stay made our
              anniversary unforgettable. Highly recommend!</p>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-5.png">
            <h3>Raj S.</h3>
            <span>traveler</span>
            <p>Walking through history! The guided tours in Old Town were enlightening, and the local cuisine was a
              delightful surprise. A must-visit for culture enthusiasts.</p>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-4.webp">
            <h3>Linda G.</h3>
            <span>traveler</span>
            <p>Sun, sand, and relaxation. The beachside resort offered the perfect escape from our busy lives. Excellent
              service and unforgettable sunsets.</p>
          </div>

          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="assets/person-1.jpg">
            <h3>Derek M.</h3>
            <span>traveler</span>
            <p>Nature at its finest. Camping in Grey Forest was an adventure of a lifetime, with wildlife sightings and
              starry nights. A true back-to-nature experience.</p>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <?php require('footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>