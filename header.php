<nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top" id="nav-main">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/morena/"><img src="<?= IMG ?>logo.svg" width="" height="45"
        alt="Microsite"></a>
    <a class="phoneColor mobile" target="_blank" href="tel:" rel="nofollow"><i
        class="fa-solid fa-square-phone"></i></a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="http://localhost/morena/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/morena/">New Projects</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Developers
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="single-developer.php">Emaar Properties</a></li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="developers.php">More Developers</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Communities
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="single-community.php">Dubai</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="communities.php">More Communities</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Explore
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="community-guide.php">Community-guide</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="blog.php">More Blog</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>