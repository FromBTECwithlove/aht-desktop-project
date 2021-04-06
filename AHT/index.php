<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đề 04 - Trương Văn Tỉnh</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="150"> -->
    <link rel="icon" href="img/pf-px/icon-title.jpg">
    <!-- font-awesome/5.15.1/css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/gym.less" />
    <script type="text/javascript" src="js/less.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap');
    </style>
</head>

<body>
    <?php include('interface/header.html'); ?>
    <?php include('interface/body.html'); ?>
    <?php include('interface/footer.html'); ?>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("myslide");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>
</body>

</html>