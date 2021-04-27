<!doctype html>
<html lang="en">
<?php
session_start();
require('common.php');
?>

<head>
    <title>Fahasa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn0.fahasa.com/media/favicon/default/favicon4.ico" />
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <?php
    include('loginForm.php');
    include('overlay.php');
    ?>

    <div class="wrapper">
        <?php
        include("./assets/php/Index/IndexHeader.php");
        include("./assets/php/Index/IndexContent.php");
        ?>
        <div class="container swiper mb-4">
            <a href="#" class="swiper__item">
                <img src="./assets/img/oxford.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/hachette.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/Harper-Collins.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/macgrawhill.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/macmillan.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/paragon.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/PearsonLogo_Avatar.png" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/penguin.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/Scholastic-bar-logo.png" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/sterling.jpg" class="w-100" alt="">
            </a>
            <a href="#" class="swiper__item">
                <img src="./assets/img/cambridge.jpg" class="w-100" alt="">
            </a>
        </div>
        <?php
        include("./assets/php/Index/IndexFooter.php");
        ?>
    </div>
    <?php
    include('./assets/php/phpScript/indexJS.php');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $('.carousel__banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // arrows: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true,
        });
        $('.flash__sale__content').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            arrows: false,
        });
        $('.swiper').slick({
            slidesToShow: 9,
            slidesToScroll: 9,
            arrows: false,
            infinite: false,
        });
    </script>
    <script type="text/javascript">
        var countDownDate = new Date("April 30, 2021 15:37:25").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (hours < 10) hours = '0' + hours;
            if (minutes < 10) minutes = '0' + minutes;
            if (seconds < 10) seconds = '0' + seconds;


            // Display the result in the element with id="demo"
            document.getElementById("countDownSale").innerHTML = ` <span class="box__timing">${hours}</span> : 
            <span class="box__timing">${minutes}</span> : <span class="box__timing">${seconds}</span>`;
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countDownSale").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>