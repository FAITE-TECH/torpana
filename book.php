<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TAPROBANA</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- custom css file link-->
  <link rel="stylesheet" href="css/style.css" />
 
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/package.css" />
</head>

<body>
  <?php include('header.php'); ?>

  <div class="heading" style="background:url(assets/contact1.jpg) no-repeat">
    <h1>book now</h1>
  </div>
  <selection class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="POST" class="book-form">
      <div class="flex">
        <div class="inputBox">
          <span>name: </span>
          <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
          <span>email: </span>
          <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
          <span>phone: </span>
          <input type="number" placeholder="enter your phone number" name="phone">
        </div>
        <div class="inputBox">
          <span>address: </span>
          <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
          <span>where to: </span>
          <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
          <span>how many: </span>
          <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
          <span>arrivals: </span>
          <input type="date" placeholder="arrivals">
        </div>
        <div class="inputBox">
          <span>leaving: </span>
          <input type="date" placeholder="leaving">
        </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
      
    </form>
  </selection>

  <?php include('footer.php'); ?>
  <!-- custom js file link-->
  <script src="js/script.js"></script>
  <script src="js/login.js"></script>
</body>

</html>