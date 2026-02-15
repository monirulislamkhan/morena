<?php
include("include/var.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <? include('common-part.php') ?>
  <title>Morena Real Estates</title>
  <meta name="description" content="" />
  <link rel="canonical" href="http://localhost/morena/webroot/" />
  <link href="<?= WEBROOT ?>css/developers.css" rel="stylesheet" />
</head>

<body>
  <? include('header.php') ?>
  <main>
    <section class="hero-banner"
      style="background-image: url('https://topultraluxury.com/wp-content/uploads/beachfront.avif'); background-size: cover; background-position: center; min-height: 340px; padding: 80px 0 100px 0;">
      <div class="overlay"></div>
      <div class="container position-relative z-1">
        <h1 class="display-4 fw-bold mb-3" style="color: #fff; text-shadow: 0 2px 16px rgba(0,0,0,0.25);">Real Estate Developers in UAE</h1>
        <p class="lead mb-0" style="text-shadow: 0 1px 8px rgba(0,0,0,0.18);">Discover premium off-plan homes from iconic UAE developers</p>
      </div>
    </section>
  </main>
  
  <? include('footer.php') ?>
  <script src="<?= WEBROOT ?>js/swiper-bundle.min.js"></script>
  <script>
    const benefitsSlider = new Swiper(".top-projects", {
      spaceBetween: 20,
      slidesPerView: 1,
      // loop: true,
      parallax: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        }
      },
    });

    const priceSlides = new Swiper(".developer__slides", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 24
        }
      }
    });
  </script>
</body>

</html>