<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAPROBANA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="css/package.css" />
    <link rel="stylesheet" href="css/about.css" />
</head>

<body>
    <?php include('header.php'); ?>
    <div class="heading" style="background:url(assets/package.jpg) no-repeat">
        <h1>Places</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">top destinatation</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/places/place1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Beddagana Wetland Park</h3>
                    <p>Nestled in Sri Jayawardenepura Kotte, Sri Lanka, Beddagana Wetland Park stands as a tranquil
                        urban oasis, offering a crucial habitat for diverse bird species and a serene retreat for
                        visitors seeking a nature-filled escape within the city.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place2.jpg">
                </div>
                <div class="content">
                    <h3>Colombo National Museum</h3>
                    <p>Colombo National Museum is a place that displays a variety of artifacts and exhibits, giving a
                        glimpse into Sri Lanka's cultural history, covering aspects like archaeology and art. It's a
                        great spot for those interested in exploring the country's rich heritage.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sri Dalada Maligawa</h3>
                    <p>Nestled in Kandy, is a sacred site housing the revered relic of the Buddha's tooth. As a
                        significant pilgrimage destination, it draws visitors to witness its architectural beauty and
                        participate in religious ceremonies.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sigiriya</h3>
                    <p>Situated in central Sri Lanka, is an ancient rock fortress with impressive archaeological
                        significance. Renowned for its stunning frescoes and landscaped gardens, it stands as a
                        testament to the island's rich history and engineering prowess.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Arugam Bay Beach</h3>
                    <p>Located on the east coast of Sri Lanka, is a renowned surfing destination with its long sandy
                        shores and consistent waves. The laid-back atmosphere and vibrant beach culture make it a
                        popular spot for both surf enthusiasts and those seeking a relaxed coastal experience.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kithulgala Water Rafting</h3>
                    <p>Offers an exhilarating adventure along the Kelani River, where participants navigate through
                        rapids amidst the lush rainforest surroundings. This popular destination in Sri Lanka provides
                        an adrenaline-packed experience for thrill-seekers amidst the scenic beauty of the region.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/places/place10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bopath Ella</h3>
                    <p>It is a picturesque waterfall in Sri Lanka, surrounded by lush greenery and accessible through a
                        serene forest trail. The cascading waters and serene ambiance make it a tranquil spot for nature
                        lovers and those seeking a peaceful retreat.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/places/place11.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lipton's Seat</h3>
                    <p>Nestled in the scenic hills of Haputale, Sri Lanka, offers a stunning viewpoint with panoramic
                        vistas of tea plantations and mist-covered landscapes. This elevated vantage point, once a
                        favorite of Sir Thomas Lipton, provides a breathtaking experience for visitors seeking the
                        beauty of the hill country.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/places/place12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Minneriya National Park</h3>
                    <p>It is renowned for its vast reservoir, which serves as a gathering point for large herds of
                        elephants during the dry season. The park's diverse wildlife and scenic landscapes make it a
                        popular destination for safari enthusiasts and nature lovers alike.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><span class="btn">load more </span></div>
    </section>









    <?php include('footer.php'); ?>



    <!-- custom js file link-->
    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            let loadMoreBtn = document.querySelector(".packages .load-more .btn");
            let currentItem = 3;

            loadMoreBtn.onclick = () => {
                let boxes = [...document.querySelectorAll(".packages .box-container .box")];
                for (let i = currentItem; i < currentItem + 3; i++) {
                    if (boxes[i]) {
                        boxes[i].style.display = "inline-block";
                    }
                }
                currentItem += 3;
                if (currentItem >= boxes.length) {
                    loadMoreBtn.style.display = "none";
                }
            };
        });


    </script>


</body>

</html>