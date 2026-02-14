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
  <link href="<?= WEBROOT ?>css/home.css" rel="stylesheet" />
</head>

<body>
  <? include('header.php') ?>
  <main>
    <section class="banner-section lazy" data-bg="http://localhost/morena/webroot/images/home-bg.webp">
      <div class="banner-inner">
        <div class="right"><img src="http://localhost/morena/webroot/img/home-right.webp"
            class="img-fluid" alt=""></div>
      </div>
      <div class="banner-content">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-6">
              <h1>Dynamically Grow Your Business</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio provident quos praesentium optio,
                nihil sunt?</p>
              <div class="h6">Top projects</div>
              <div class="top-projects swiper">
                <div class="swiper-wrapper">
                  <figure class="top-projects--items swiper-slide">
                    <img
                      src="http://localhost/morena/webroot/img/listing.webp"
                      class="img-fluid" alt="Godrej Astra">
                    <figcaption class="item-details">
                      <div class="">
                        <h2 class="h5"><a href="http://localhost/morena/webroot/project.php"
                            class=" stretched-link">Godrej Astra</a></h2>
                        <div class="location"><i class="fa-regular fa-location-dot"></i>
                          Golf Course Road, Gurgaon </div>
                      </div>
                      <div class="price">
                        <i class="fa-regular fa-indian-rupee-sign"></i>
                        <span>9 Cr.*</span>
                      </div>
                    </figcaption>
                  </figure>
                  <figure class="top-projects--items swiper-slide">
                    <img
                      src="http://localhost/morena/webroot/img/listing.webp"
                      class="img-fluid" alt="Godrej Astra">
                    <figcaption class="item-details">
                      <div class="">
                        <h2 class="h5"><a href="http://localhost/morena/webroot/project.php"
                            class=" stretched-link">Godrej Astra</a></h2>
                        <div class="location"><i class="fa-regular fa-location-dot"></i>
                          Golf Course Road, Gurgaon </div>
                      </div>
                      <div class="price">
                        <i class="fa-regular fa-indian-rupee-sign"></i>
                        <span>9 Cr.*</span>
                      </div>
                    </figcaption>
                  </figure>
                  <figure class="top-projects--items swiper-slide">
                    <img
                      src="http://localhost/morena/webroot/img/listing.webp"
                      class="img-fluid" alt="Godrej Astra">
                    <figcaption class="item-details">
                      <div class="">
                        <h2 class="h5"><a href="http://localhost/morena/webroot/project.php"
                            class=" stretched-link">Godrej Astra</a></h2>
                        <div class="location"><i class="fa-regular fa-location-dot"></i>
                          Golf Course Road, Gurgaon </div>
                      </div>
                      <div class="price">
                        <i class="fa-regular fa-indian-rupee-sign"></i>
                        <span>9 Cr.*</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="city-section">
      <div class="container-xl">
        <h2 class="mb-3">Choose Your City</h2>
        <div class="card-list">
          <div class="card-item">
            <img src="https://topultraluxury.com/wp-content/uploads/abhu-Dhabi.avif" class="img-fluid w-100" alt="Abu Dhabi">
            <div class="card-count">15+ Projects</div>
            <h3 class="h6"><a href="1" class=" stretched-link">Abu Dhabi</a></h3>
          </div>


          <div class="card-item">
            <img src="https://topultraluxury.com/wp-content/uploads/dubai-2.avif" class="img-fluid w-100" alt="Dubai">
            <div class="card-count">185+ Projects</div>
            <h3 class="h6"><a href="2" class=" stretched-link">Dubai</a></h3>
          </div>


          <div class="card-item">
            <img src="https://topultraluxury.com/wp-content/uploads/ras-al-Khaima-1.avif" class="img-fluid w-100" alt="Ras Al Khaimah">
            <div class="card-count">13+ Projects</div>
            <h3 class="h6"><a href="3" class=" stretched-link">Ras Al Khaimah</a></h3>
          </div>


          <div class="card-item">
            <img src="https://topultraluxury.com/wp-content/uploads/Sharjah-1.avif" class="img-fluid w-100" alt="Sharjah">
            <div class="card-count">5+ Projects</div>
            <h3 class="h6"><a href="4" class=" stretched-link">Sharjah</a></h3>
          </div>


          <div class="card-item">
            <img src="https://topultraluxury.com/wp-content/uploads/Umm-Al-Quwain-1.avif" class="img-fluid w-100" alt="Umm Al Quwain">
            <div class="card-count">11+ Projects</div>
            <h3 class="h6"><a href="5" class=" stretched-link">Umm Al Quwain</a></h3>
          </div>

        </div>
      </div>
    </section>


    <section class="projects">
      <div class="container-xl">
        <h2 class="mb-4 fw-bold text-center section-title">Recommended Projects</h2>
        <div class="row">
          <div class="col-lg-6">
            <figure class="projects__items">
              <img src="https://topultraluxury.com/wp-content/uploads/damac-valencia-main-600x400.avif" class="img-fluid" alt="DAMAC Valencia">
              <figcaption>
                <div>
                  <h2 class="mb-0">
                    <a href="https://topultraluxury.com/new-projects/damac-valencia/" class="stretched-link text-dark" style="text-decoration: none;">
                      DAMAC Valencia </a>
                  </h2>
                  <div class="location" style="font-size: 1rem;">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    DAMAC Lagoons, Dubai
                    <div class="price-value mt-2">
                      AED 725,000
                    </div>
                  </div>

                </div>

              </figcaption>
            </figure>
          </div>
          <div class="col-lg-6">
            <figure class="projects__items">
              <img src="https://topultraluxury.com/wp-content/uploads/sobha-sanctuary-main-600x400.avif" class="img-fluid" alt="Sobha Sanctuary">
              <figcaption>
                <div>
                  <h2 class="mb-0">
                    <a href="https://topultraluxury.com/new-projects/sobha-sanctuary/" class="stretched-link text-dark" style="text-decoration: none;">
                      Sobha Sanctuary </a>
                  </h2>
                  <div class="location" style="font-size: 1rem;">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    DubaiLand, Dubai
                    <div class="price-value mt-2">
                      AED 3,800,000
                    </div>
                  </div>

                </div>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="properties">
      <div class="container-xl">
        <div class="h2">Latest Off-Plan Projects </div>
        <div class="row">
          <div class="col-lg-4">
            <figure class="properties__items">
              <img src="http://localhost/morena/webroot/img/listing.webp" class="img-fluid"
                alt="DLF Privana">
              <figcaption>
                <h3 class="mb-0"><a href="http://localhost/morena/webroot/dlf-privana-gurgaon/"
                    class=" stretched-link">DLF Privana</a></h3>
                <div class="location"><i class="fa-regular fa-location-dot"></i>
                  Sector 77 & 76, Gurgaon </div>
                <div class="price">
                  <i class="fa-regular fa-indian-rupee-sign"></i>
                  <span>9.5 Cr.*</span>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4">
            <figure class="properties__items">
              <img src="http://localhost/morena/webroot/img/listing.webp" class="img-fluid"
                alt="Adani Samsara Ivana">
              <figcaption>
                <h3 class="mb-0"><a href="http://localhost/morena/webroot/adani-samsara-ivana-gurgaon/"
                    class=" stretched-link">Adani Samsara Ivana</a></h3>
                <div class="location"><i class="fa-regular fa-location-dot"></i>
                  Sector 63, Gurgaon </div>
                <div class="price">
                  <i class="fa-regular fa-indian-rupee-sign"></i>
                  <span>5.20 Cr*</span>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4">
            <figure class="properties__items">
              <img src="http://localhost/morena/webroot/img/listing.webp" class="img-fluid"
                alt="Birla Navya Avik">
              <figcaption>
                <h3 class="mb-0"><a href="http://localhost/morena/webroot/birla-navya-avik-gurgaon/"
                    class=" stretched-link">Birla Navya Avik</a></h3>
                <div class="location"><i class="fa-regular fa-location-dot"></i>
                  Sector 63A, Gurgaon </div>
                <div class="price">
                  <i class="fa-regular fa-indian-rupee-sign"></i>
                  <span>3.99 Cr.*</span>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4">
            <figure class="properties__items">
              <img src="http://localhost/morena/webroot/img/listing.webp" class="img-fluid"
                alt="Godrej MSR City ">
              <figcaption>
                <h3 class="mb-0"><a href="http://localhost/morena/webroot/godrej-msr-city-bangalore/"
                    class=" stretched-link">Godrej MSR City </a></h3>
                <div class="location"><i class="fa-regular fa-location-dot"></i>
                  Shettigere, Bangalore </div>
                <div class="price">
                  <i class="fa-regular fa-indian-rupee-sign"></i>
                  <span>1.23 Cr*</span>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="communities">
      <div class="container-xl">
        <h2 class="mb-4 text-center section-title">Explore Top Communities</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/abu-dhabi/al-bahiya/">
                <img src="https://via.placeholder.com/500x300?text=Community+Image" class="card-img-top" alt="Al Bahiya">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Bahiya</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/dubai/al-furjan/">
                <img src="https://topultraluxury.com/wp-content/uploads/Al-Furjan-2.avif" class="card-img-top" alt="Al Furjan">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Furjan</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/ras-al-khaimah/al-hamra/">
                <img src="https://topultraluxury.com/wp-content/uploads/Al-Hamra-image.avif" class="card-img-top" alt="Al Hamra">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Hamra</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/ras-al-khaimah/al-hamra-village/">
                <img src="https://topultraluxury.com/wp-content/uploads/Al-Hamra-Village.avif" class="card-img-top" alt="Al Hamra Village">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Hamra Village</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/dubai/al-jaddaf/">
                <img src="https://topultraluxury.com/wp-content/uploads/al-jaddaf-walk-image.avif" class="card-img-top" alt="Al Jaddaf">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Jaddaf</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card community-card h-60">
              <a href="https://topultraluxury.com/communities/abu-dhabi/al-jurf/">
                <img src="https://via.placeholder.com/500x300?text=Community+Image" class="card-img-top" alt="Al Jurf">
              </a>
              <div class="card-body text-center">
                <h4 class="card-title">Al Jurf</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="/communities/" class="btn btn-outline-primary">All Communities in UAE <i>→</i></a>
        </div>
      </div>
    </section>

    <section class="category-section">
      <div class="container-xl">
        <h2 class="mb-4 fw-bold text-center section-title">Explore by Property Type</h2>
        <div class="row g-4">

          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/apartments/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://topultraluxury.com/wp-content/uploads/building-4249846_640.avif'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  231 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Apartments</h4>
                </div>
              </div>

            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/commercial/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://via.placeholder.com/600x400?text=Commercial'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  4 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Commercial</h4>
                </div>
              </div>

            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/duplex/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://topultraluxury.com/wp-content/uploads/duplex.avif'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  32 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Duplex</h4>
                </div>
              </div>

            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/mansion/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://topultraluxury.com/wp-content/uploads/mension-image.avif'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  7 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Mansion</h4>
                </div>
              </div>

            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/penthouse/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://topultraluxury.com/wp-content/uploads/Penthouse-1.avif'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  33 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Penthouse</h4>
                </div>
              </div>

            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="https://topultraluxury.com/property/royal-suites/" class="text-decoration-none text-white">
              <div class="card text-white border-0 shadow-sm h-100 rounded overflow-hidden position-relative"
                style="background-image: url('https://via.placeholder.com/600x400?text=Royal%20Suites'); background-size: cover; background-position: center; min-height: 300px;">


                <span class="position-absolute bottom-0 start-0 m-3 badge bg-warning text-dark px-3 py-2 small shadow" style="z-index: 2;">
                  1 Projects
                </span>

                <div class="card-body d-flex flex-column justify-content-end"
                  style="padding-bottom: 70px; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 70%);">
                  <h4 class="fw-bold mb-0">Royal Suites</h4>
                </div>
              </div>

            </a>
          </div>

        </div>
      </div>
      <div class="text-center mt-4">
        <a href="/property/" class="btn btn-outline-primary">View All Property <i>→</i></a>
      </div>
    </section>

    <section class="why-choose-us py-5 bg-light-subtle">
      <div class="container-xl">
        <div class="text-center mb-5">
          <h2 class="fw-bold section-title">Why Choose Us?</h2>
          <p class="text-muted">Your trusted partner in UAE’s most exclusive investments.</p>
        </div>

        <div class="row g-4 bg-light-subtle">

          <div class="col-md-4">
            <div class="card h-70 text-center p-4 border-0 shadow-sm bg-dark text-white rounded-3">
              <div class="mb-3">
                <i class="bi bi-emoji-smile text-warning big-icon"></i>
              </div>
              <h5 class="fw-bold">Trusted By Thousands</h5>
              <p class="mb-0">
                Built on years of trust, serving buyers, sellers, and investors in Dubai.
              </p>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card h-70 text-center p-4 border-0 shadow-sm bg-dark text-white rounded-3">
              <div class="mb-3">
                <i class="bi bi-calculator text-warning big-icon"></i>
              </div>
              <h5 class="fw-bold">Financing Made Easy</h5>
              <p class="mb-0">
                We aim to simplify the financing process by partnering with leading banks and
                financial institutions.
              </p>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card h-70 text-center p-4 border-0 shadow-sm bg-dark text-white rounded-3">
              <div class="mb-3">
                <i class="bi bi-house text-warning big-icon"></i>
              </div>
              <h5 class="fw-bold">Wide Range Of Properties</h5>
              <p class="mb-0">
                Explore an extensive portfolio of prime properties in UAE’s
                most sought-after locations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="developer">
      <div class="container-xl">
        <div class="h2 mb-0">Our Developers</div>
        <p class="sub">Top most developer.</p>
        <div class="swiper developer__slides">
          <div class="swiper-wrapper">
            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/dlf.svg" class="img-fluid"
                  height="55" width="190" alt="DLF Limited"></a></figure>
            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/adani_realty.svg"
                  class="img-fluid" height="55" width="190" alt="Adani Reality"></a></figure>

            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/godrej-properties.png"
                  class="img-fluid" height="55" width="190" alt="Godrej Properties"></a></figure>
            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/birla-estate-logo.webp"
                  class="img-fluid" height="55" width="190" alt="Birla Estate"></a></figure>
            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/tarc.webp" class="img-fluid"
                  height="55" width="190" alt="Tarc"></a></figure>
            <figure class="swiper-slide"><a href=""><img src="http://localhost/morena/webroot/img/developer/TribecaLogo.svg"
                  class="img-fluid" height="55" width="190" alt="Tribica"></a></figure>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="mt-4">
          <a href="http://localhost/morena/webroot/developers/">More Developers <i class="fa-regular fa-arrow-right-long"></i></a>
        </div>
      </div>
    </section>

    <section class="about-content">
      <div class="container-xl">
        <h2>Heading 2 Lorem ipsum.</h2>
        <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, in.</strong></p>
        <p>Are you a homebuyer in India searching for your perfect abode? Or perhaps an investor seeking lucrative real estate opportunities? Finding the right property can be overwhelming. allcheckdealz.com is here to simplify your journey. We offer exclusive deals on properties from India's most trusted and top-rated developers. This means you gain access to a curated selection of high-quality homes and investment options that you might not find elsewhere.</p>
        <p>For homebuyers, we provide a platform where you can discover your dream home with confidence, knowing you are choosing from the best developers in the country. For investors, allcheckdealz.com opens doors to potentially high-return investments in projects built by reputable names. We cut through the noise, presenting you with clear, concise information and straightforward deals. Say goodbye to complex jargon and endless searching. allcheckdealz.com focuses on making your property selection easy, efficient, and rewarding, connecting you directly with the finest developments India has to offer. Explore allcheckdealz.com today and take the first step towards your property goals.</p>
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