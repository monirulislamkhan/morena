<?php
include("include/var.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <? include('common-part.php') ?>
  <title>Godrej Astra Sector 54 Gurgaon - Luxurious Apartments</title>
  <meta name="description" content="Godrej Astra is a luxury residential project in Sector 54, Gurgaon. It offers 3 and 4BHK residences with world-class amenities. Check Reviews and Price" />
  <link rel="canonical" href="<?= WEBROOT ?>godrej-astra-gurgaon/" />
  <link href="<?= WEBROOT ?>css/main.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top gsap-nav" id="nav-main">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0);"><img
          src="<?= WEBROOT ?>logo/godrej-astra-gurgaon_logo.webp" width="107" height="52" alt="Godrej Astra" /></a> <a class="phoneColor mobile" target="_blank" href="tel:+911149500024"
        rel="nofollow"><i class="fa-solid fa-square-phone"></i></a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#overviewId">Overview</a></li>
          <li class="nav-item"><a class="nav-link" href="#highlightId">Highlights</a></li>
          <li class="nav-item"><a class="nav-link" href="#galleryId">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#floorPlan">Floor Plans</a></li>
          <li class="nav-item"><a class="nav-link" href="#amntiesId">Amenities</a></li>
          <li class="nav-item"><a class="nav-link" href="#localitiesId">Localities</a></li>
          <li class="nav-item"><a class="nav-link" href="#questionId">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main data-bs-spy="scroll" data-bs-target="#nav-main">
    <section class="hero-section">
      <picture class="banner">
        <source media="(max-width: 639px)" srcset="<?= IMG ?>project-banner-mobile.webp" />
        <img src="<?= IMG ?>project-banner.webp" width="423" height="650" class="img-fluid"
          alt="alt text" />
      </picture>
      <div class="overlay"></div>
      <div class="hero-content">
        <h1 class="mb-0">Godrej Astra</h1>
        <div class="location"><i class="fa-regular fa-location-dot"></i>
          Golf Course Road, Gurgaon </div>
        <ul class="lists">
          <li>Book at Just <div class="lists__item"> <i class="fa-regular fa-indian-rupee-sign"></i>
              20 Lacs*</div>
          </li>
          <li>Starting Price <div class="lists__item"><i class="fa-regular fa-indian-rupee-sign"></i>
              9 Cr.*</div>
          </li>
          <li>Apartment / Penthouse <div class="lists__item"><i class="fa-regular fa-bed-front"></i>
              3 & 4 BHK
            </div>
          </li>
        </ul>
        <div class="d-none d-lg-block">
          <button class="btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#footerModal">Enquire
            Now</button>
        </div>
      </div>
    </section>

    <section class="highlight" id="highlightId">
      <div class="container-xl">
        <div class="highlight__text">
          <h3 class="h2"><small class="sub-heading">Highlights of</small>
            <div>Godrej Astra</div>
          </h3>
          <!-- <p>Godrej Astra Gurgaon</p> -->
          <h4 class="h5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa accusantium dolorem quidem aut
            rerum nam omnis eum perspiciatis, ipsam dolorum quae ab, ullam sapiente! Quasi!</h4>
        </div>
        <div class="highlight__list">
          <div class="highlight__item item-1">
            <div class="highlight__description">
              <ul class="highlights">
                <li><i class="fa-light fa-location-dot"></i><span>LOCATION </span>Golf Course Road</li>
                <li><i class="fa-light fa-train-subway-tunnel"></i><span>METRO CONNECTIVITY </span>500 Meter : Sector 54 Rapid Metro Station</li>
                <li><i class="fa-light fa-badge-percent"></i><span>AVAILABILTY/ BOOKING AMOUNT </span>3 &amp; 4 BHK Apartments/ 20 Lacs Booking Amount</li>
                <li><i class="fa-light fa-chart-area"></i><span>SITE AREA/TOWER/STRUCTURE </span>2.76 Acres, 2 Towers &amp; G+28 to G+35 Structure</li>
                <li><i class="fa-light fa-key"></i><span>STATUS/POSSESSION </span>New Launch/ Possession 2031</li>
              </ul>
            </div>
          </div>
          <div class="highlight__item  item-2">
            <img data-src="<?= IMG ?>highlight.webp" width="423" height="650"
              class="img-fluid lazy w-100" alt="Godrej Astra Gurgaon Highlight Image" />
          </div>
          <div class="highlight__item item-3">
            <div class="h2">2,970-4,092 <small>Sq.ft. </small>
              <span>Sizes</span>
            </div>

            <div class="">Clubhouse Area of Clubhouse.</div>
          </div>
          <div class="highlight__item  item-4">
            <div class="h2">G+27, G+35 <span>Structure</span></div>
            <div class="">Number of Floors in both the Towers.</div>
          </div>
          <div class="highlight__item  item-5">
            <img data-src="<?= IMG ?>highlight.webp" width="423" height="650"
              class="img-fluid lazy w-100" alt="Godrej Astra Gurgaon Amenity" />
          </div>
        </div>
      </div>
    </section>

    <section class="description" id="overviewId">
      <div class="container-xl">
        <div class="description__text">
          <small class="sub-heading">Overview</small>
          <h2>Godrej Astra Sector 54, Gurgaon</h2>
        </div>
      </div>
      <div class="container-fluid position-relative">
        <div class="description__img">
          <img data-src="<?= IMG ?>project-banner.webp"
            alt="Project Gallery" width="400" height="400" class="img-fluid w-100 lazy" />
        </div>
        <div class="propertyInfo">
          <div class="container-xl px-0">
            <p><strong>Incarnation Of Affluence, Blessing For Seekers Of Real Fortune</strong></p>

            <p>Experience the epitome of modern living at Godrej Properties&#39; prestigious residential paradise in sector 54, Gurgaon. Spread across 2.76 acres of meticulously landscaped grounds, the 2 towers of Godrej Astra offer a diverse range of thoughtfully designed 3, and 4 BHK apartments. This location lies on the Golf course road where urban sophistication meets serene living, it&#39;s a haven for those seeking luxurious and Uber living options. There are many underpasses which supply smooth access to the IGI Airport and also provide easy accessibility to the city&#39;s most sought-after destinations.</p>
            <ul>
              <li>
                Payment Plan <span>25*4</span>
              </li>
              <li>
                Status <span>Coming Soon</span>
              </li>
              <li>
                Completion <span>2031</span>
              </li>
              <li>
                Site Area <span>2.76 Acres</span>
              </li>
              <li>
                Towers <span>2</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div>
      </div>
    </section>

    <section class="gallery" id="galleryId">
      <div class="container-xl">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h3><small class="sub-heading">Gallery of </small>
              <div>Godrej Astra Gurgaon</div>
            </h3>
            <p>Enjoy A Good Enough Look At The Following Images To Attain A Better Understanding Of The Project</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="gallery-slides">
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/01.webp">
            <img data-src="<?= IMG ?>gallery/01.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/02.webp">
            <img data-src="<?= IMG ?>gallery/02.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/03.webp">
            <img data-src="<?= IMG ?>gallery/03.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/04.webp">
            <img data-src="<?= IMG ?>gallery/04.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/05.webp">
            <img data-src="<?= IMG ?>gallery/05.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/06.webp">
            <img data-src="<?= IMG ?>gallery/06.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
          <a class="img-slide" data-fancybox=" gallery" href="<?= IMG ?>gallery/07.webp">
            <img data-src="<?= IMG ?>gallery/07.webp" alt="Project Gallery" width="400"
              height="400" class="img-fluid w-100 lazy" />
          </a>
        </div>
      </div>
    </section>

    <section class="amenities" id="amntiesId">
      <div class="container-xl">
        <h4 class="h3"><small class="sub-heading">Amenities of</small>
          <div>Godrej Astra</div>
        </h4>
        Godrej Astra at Gurgaon Sector-54 redefines luxury living. At Godrej Astra, residents will enjoy world-class amenities like 3 levels of basement Parking, a multi-tier Security System, multiple sports amenities, a 40000 Sq Ft Clubhouse, landscaped gardens, a wellness centre, a gymnasium, an eco-friendly design and more. <ul>
          <li><i class="fa-duotone fa-person-swimming"></i>Swimming Pool</li>
          <li><i class="fa-solid fa-plate-utensils"></i>Dining Outlets</li>
          <li><i class="fa-duotone fa-dumbbell"></i>Fully Equipped Gym</li>
          <li><i class="fa-duotone fa-person-sledding"></i>Kids Play Area</li>
          <li><i class="fa-duotone fa-cart-shopping"></i>Retail Centre</li>
          <li><i class="fa-duotone fa-camera-cctv"></i>Security</li>
          <li><i class="fa-duotone fa-champagne-glasses"></i>Club House</li>
          <li><i class="fa-duotone fa-bench-tree"></i>Green Surrounding</li>
          <li><i class="fa-duotone fa-mug-saucer"></i>Cafes</li>
          <li><i class="fa-duotone fa-cars"></i>Car Parking</li>
          <li><i class="fa-duotone fa-basketball"></i>Sport Court</li>
          <li><i class="fa-duotone fa-pot-food"></i>Restaurants</li>
        </ul>
      </div>
    </section>


    <section class="floor-section" id="floorPlan">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="floor-section__left">
              <h4><small class="sub-heading">Layout and Floor Plans of </small>
                <div>Godrej Astra Gurgaon</div>
              </h4>
              <p>This Grand Project Exhibits A Commendable Layout, Including Well-Lit Spaces, Modular Kitchen, Wide Balconies, Smart Features, And Much More, All Curated With Utmost Precision And Perfection.</p>

              <div class="master-plan">
                <div class="h5">Master Plan</div>
                <figure class="master-plan__inner">
                  <img data-src="<?= WEBROOT ?>images/masterplan1.webp" class="img-fluid w-100 lazy"
                    alt="Master Plan of Godrej Astra Gurgaon" />
                  <figcaption><a data-fancybox="masterPlan" href="<?= WEBROOT ?>images/masterplan1.webp"
                      class=" stretched-link"></a> Click to enlarge</a>
                  </figcaption>
                </figure>

              </div>
            </div>
          </div>
          <div class="col-md-5 offset-md-1">
            <div class="floor-plan">
              <div class="swiper floor-plan__slides">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a data-fancybox="floor-plan" href="<?= IMG ?>floor-plan.webp">
                      <img data-src="<?= IMG ?>floor-plan.webp"
                        class="img-fluid w-100 lazy" alt="3 Bedroom" />
                    </a>
                    <figcaption class="floor-plan__detail">
                      <div class="type h5">3 BHK</div>
                      <div class="floor-plan__price"><i class="fa-regular fa-indian-rupee-sign"></i>
                        9 Cr. * </div>
                      <div class="sizes">
                        <small>Sizes (Sq. Ft.)</small>
                        <span>2,970-3,182</span>
                      </div>
                      <button class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#footerModal">Enquire
                        Now</button>
                    </figcaption>
                  </figure>
                  <figure class="swiper-slide">
                    <a data-fancybox="floor-plan" href="<?= IMG ?>floor-plan.webp">
                      <img data-src="<?= IMG ?>floor-plan.webp"
                        class="img-fluid w-100 lazy" alt="4 Bedroom" />
                    </a>
                    <figcaption class="floor-plan__detail">
                      <div class="type h5">4 BHK</div>
                      <div class="floor-plan__price"><i class="fa-regular fa-indian-rupee-sign"></i>
                        12 Cr. * </div>
                      <div class="sizes">
                        <small>Sizes (Sq. Ft.)</small>
                        <span>3,994-4,092</span>
                      </div>
                      <button class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#footerModal">Enquire
                        Now</button>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="localities" id="localitiesId">
      <div class="container-fluid">
        <div class="row justify-content-lg-center g-0">
          <div class="col-lg-7">
            <div class="localities__images">
              <a data-fancybox="locationMap" href="<?= IMG ?>location-map.webp">
                <img data-src="<?= IMG ?>location-map.webp"
                  class="img-fluid w-100 lazy" alt="Godrej Astra Gurgaon Location Map" />
              </a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="localities__accordion">
              <h5 class="h3"><small class="sub-heading">Locality of</small>
                <div>Godrej Astra Gurgaon</div>
              </h5>
              <p>Godrej Astra is strategically located on Golf Course Road.And it is few minutes drive to rapid metro station (sector 55-56).Closer to Delhi and Faridabad Godrej Astra is also well-connected to Golf Course Road Extension and Sohna Road</p>
              <div class="accordion" id="locationAccordion">
                <div class="accordion-item">
                  <h5 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#location101" aria-expanded="true"
                      aria-controls="location101"><i
                        class="fa-light fa-hospital"></i>
                      <span> Hospital</span></button>
                  </h5>
                  <div id="location101" class="accordion-collapse collapse"
                    data-bs-parent="#locationAccordion">
                    <div class="accordion-focus"></div>
                    <div class="accordion-body">
                      <ol>
                        <li>Paras Hospital<strong> 5 Min</strong></li>
                        <li>Artemis Hospital<strong> 5 Min</strong></li>
                        <li>Fortis Hospital<strong> 10 Min</strong></li>
                        <li>Medanta Medicity<strong> 20 Min</strong></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#location59" aria-expanded="true"
                      aria-controls="location59"><i
                        class="fa-light fa-taxi-bus"></i>
                      <span> Transport</span></button>
                  </h5>
                  <div id="location59" class="accordion-collapse collapse"
                    data-bs-parent="#locationAccordion">
                    <div class="accordion-focus"></div>
                    <div class="accordion-body">
                      <ol>
                        <li>Rapid Metro station at DLF 5<strong> 5 Min</strong></li>
                        <li>HUDA City Centre Metro Station<strong> 10 Min</strong></li>
                        <li>National Highway - 8<strong> 20 Min</strong></li>
                        <li>Gurgaon Railway Station<strong> 32 Min</strong></li>
                        <li>IGI Airport<strong> 32&nbsp;Min</strong></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#location58" aria-expanded="true"
                      aria-controls="location58"><i
                        class="fa-light fa-cart-shopping"></i>
                      <span> Malls</span></button>
                  </h5>
                  <div id="location58" class="accordion-collapse collapse"
                    data-bs-parent="#locationAccordion">
                    <div class="accordion-focus"></div>
                    <div class="accordion-body">
                      <ol>
                        <li>South Point Mall<strong> 3 Min</strong></li>
                        <li>DLF Mega Mall<strong> 8 Min</strong></li>
                        <li>DT City Centre on the Mall Road<strong> 15 Min</strong></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#location57" aria-expanded="true"
                      aria-controls="location57"><i
                        class="fa-light fa-graduation-cap"></i>
                      <span> Education</span></button>
                  </h5>
                  <div id="location57" class="accordion-collapse collapse"
                    data-bs-parent="#locationAccordion">
                    <div class="accordion-focus"></div>
                    <div class="accordion-body">
                      <ol>
                        <li>Lancers International School<strong> 5 Min</strong></li>
                        <li>The Sri Ram School<strong> 15 Min</strong></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#location56" aria-expanded="true"
                      aria-controls="location56"><i
                        class="fa-light fa-plate-utensils"></i>
                      <span> Dining Outlet</span></button>
                  </h5>
                  <div id="location56" class="accordion-collapse collapse"
                    data-bs-parent="#locationAccordion">
                    <div class="accordion-focus"></div>
                    <div class="accordion-body">
                      <ol>
                        <li>The Big Tree Cafe<strong> 2 Min</strong></li>
                        <li>Another Fine Day Cafe<strong> 8 Min</strong></li>
                        <li>California Burrito Mexican Kitchen<strong> 10 Min</strong></li>
                        <li>Roots-Cafe in the Pocket<strong> 17 Min</strong></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-12">
            <div class="about__description">
              <div class="h3">About Godrej Properties</div>
              <p>Godrej Properties one of the oldest and most reputed real estate groups maintains the legacy to keep its buyers fully content where they have been adding exclusive designs and ideas to create something new for the society where development &amp; progress are the key pillars, and today with more than 400 awards they have got worldwide recognition creating a strong niche in the heart of customers.</p>

              <div class="awards">
                <div class="awards__items"><i class="fa-duotone fa-award"></i><span>Golden Peacock Award -</span> CSR in Real Estate</div>

                <div class="awards__items"><i class="fa-duotone fa-award"></i><span>Construction and Infrastructure Award - </span> 15th ICC Environment Excellence Award</div>

                <div class="awards__items"><i class="fa-duotone fa-handshake-angle"></i><span>Authorized Channel Partner - </span> We Are Authorised Channel Partner of Godrej Properties.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="form-right">
              <div class="heading h4">EXPRESS YOUR INTEREST!</div>
              <form class="contactform" role="form" name="form1" method="post">
                <div class="mb-3">
                  <span class="invalid_name">Please enter valid name.</span>
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                  <span class="invalid_email">Please enter valid Email.</span>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <input type="hidden" name="projectname" value="Godrej Astra" />
                <input type="hidden" name="roundrobinstatus" value="no" />
                <input type="hidden" name="propertyId" value="2" />
                <input type="hidden" name="propertyNumber" value="+911149500024">
                <input type="hidden" name="country" id="country" class="country" value="" required>
                <div class="mb-3">
                  <span class="invalid_phone">Please enter valid Phone Number.</span>
                  <input class="form-control phone" name="phone" type="tel" required>
                </div>
                <input type="hidden" name="comment" value="I need to know more about this..">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="clickId" value="">
                <div class="d-grid">
                  <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block addenqsubmit" id="modalcontact-form-btn"> SUBMIT</button>
                </div>
              </form>
              <div class="deliver">
                <div class="deliver__heading"><span>We Deliver</span></div>
                <ul class="deliver__list">
                  <li><i class="fa-regular fa-shield-keyhole"></i><span>Assured<br> Privacy</span></li>
                  <li><i class="fa-regular fa-headset"></i><span>Expert<br> Consultation</span></li>
                  <li><i class="fa-regular fa-car"></i><span>Free<br> Site Visit</span></li>
                  <li><i class="fa-regular fa-indian-rupee-sign"></i><span>Best<br> Price</span></li>
                </ul>
                <small class="pick-drop">Pick & Drop from your location</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about__bg">
        <img data-src="<?= WEBROOT ?>images/bg-form.webp" alt="" class="img-fluid lazy">
      </div>
    </section>
  </main>
  <? include('footer.php') ?>
   <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script>
    "use strict";
    const cYear = new Date().getFullYear();
    document.getElementById('currentYear').textContent = cYear;
    $(".fancybox").fancybox({
      type: "iframe",
      // other API options
    });

    const allLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    $('.nav-link').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  </script>
  <script>
    const asideBtn = document.querySelector('.aside_btn');
    const isMobile = window.matchMedia('(min-width:992px)').matches;
    window.addEventListener('scroll', function() {
      if (!isMobile && scrollY >= 300) {
        asideBtn.classList.add('show')
      } else {
        asideBtn.classList.remove('show')
      }
    })
  </script>
  <script src="<?= WEBROOT ?>node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
  <script src="<?= WEBROOT ?>js/gsap-custom.js"></script>

  <script>
    const floorSlides = new Swiper(".floor-plan__slides", {
      effect: "cards",
      grabCursor: true,
    });

    const footerPrice = document.querySelector('.price--rows span').textContent;

    const footerUpdatePrice = document.querySelector('.price--rows span').textContent = footerPrice.replace(/Cr\.\*/, '').trim();
    console.log(footerUpdatePrice);
  </script>
</body>

</html>