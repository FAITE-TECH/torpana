
<?php

$weather = "";
$error = "";

if ($_GET['city']) {
    

    $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . ",&appid=62e6274be21e36c57711129ef7eb9445");

    $weatherArray = json_decode($urlContents, true);

    if ($weatherArray['cod'] == 200) {

        $weather = "The weather in " . $_GET['city'] . " is currently '" . $weatherArray['weather'][0]['description'] . "'. </br>";

        $tempInCelcius = intval($weatherArray['main']['temp'] - 273);

        $weather .= " The temperature is " . $tempInCelcius . "&deg;C and the wind speed is " . $weatherArray['wind']['speed'] . "m/s.";



    } else {

        $error = "Could not find city - please try again.";

    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAPROBANA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/package.css" />
   
</head>

<body>
    <?php include('header.php'); ?>

    <div class="heading" style="background:url(assets/weather.jpg) no-repeat">
        <h1>Weather Forcasting</h1>
    </div>
    <selection class="booking">
        <h1 class="heading-title">Search Global Weather</h1>

        <form action="" method="GET" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span for="city">Enter your city name </span>
                    <input type="text" placeholder="city name" name="city">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="submit">

        </form>
        <style>
       #weather {
        text-align: center;
        font-family: 'Poppins', sans-serif; /* Make sure to include Poppins font in your project */
        font-size: 20px; /* Adjust the size as needed */
        padding-bottom: 2rem;
        color: black;
    }

    .alert-success {
        display: inline-block;
        margin: auto;
        padding: 15px;
        
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .alert-danger {
        display: inline-block;
        margin: auto;
        padding: 15px;
        
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
        box-sizing: border-box;
    }
    </style>
        <div id="weather">
            <?php

            if ($weather) {

                echo '<div class="alert alert-success" role="alert">
  ' . $weather . '
</div>';

            } else if ($error) {

                echo '<div class="alert alert-danger" role="alert">
  ' . $error . '
</div>';

            }

            ?>
        </div>
    </selection>

    <?php include('footer.php'); ?>
    <!-- custom js file link-->
    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</body>

</html>