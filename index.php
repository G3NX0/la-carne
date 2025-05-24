<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RestoranKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="description" content="Restoran premium spesialis steak di kota Anda.">

  <style>
    html {
      scroll-behavior: smooth;
    }

    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .underline {
      width: 150px;
      height: 4px;
      background-color: gold;
      margin: 0 auto;
      border-radius: 2px;
    }

    
    .hero-section {
      background: url('mnbg.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
    }

    .hero2{
      background: url('Menus.jpg') no-repeat center center;
      background-size: cover;
    }

    .hero3{
      background:linear-gradient(180deg, #00027b, #000);
    }

    .hero4{
      background:linear-gradient(180deg, #000, #00027b);
    }

    .card-img-overlay {
    pointer-events: none;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
    }

    .hero-content h1 {
      font-size: 8rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .custom-modal-bg {
    background-color:rgb(6, 36, 67); 
    color: rgb(212, 175, 55);              
    }

    #btnScrollTop {
      position:fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      pointer-events: auto;
      z-index: 9999;
      transition: opacity 0.4s ease;
      border-radius : 50%;
      width: 40px;
      height: 40px;
      font-size: 18px;
      align-items: center;
      justify-content: center;
      display: flex;
      background-color:rgb(6, 58, 110) ;

    }

    #btnScrollTop.show {
      opacity: 1;
      pointer-events: auto;
    }

    .nav-link, .navbar-brand {
      color: white !important;
      font-weight: bold;
    }

    .navbar-toggler {
      border: none;
      background-color: transparent;
      padding: 0;
      box-shadow: none;
    }

    .navbar-toggler:focus {
    outline: none;
    box-shadow: none;
    }

    .custom-bgcard {
      background-color:rgb(4, 12, 84) ;
      color: white; 
    }

    .text-custom{
      color: rgb(212, 175, 55) ;
    }

    .navbar-custom {
      background-color: transparent !important;
    }

    .offcanvas-custom {
      background-color: rgb(6, 36, 67);
      color: gold; 
    }

    .offcanvas-custom .btn-close {
      filter: invert(1); /* tombol close tetap terlihat */
    }

    .btn-colar{
      background: linear-gradient(180deg, #000, #00027b);
    }


    .dropdown-menu-dark {
      background-color: rgb(6, 36, 67);
      color: white;
    }


    .shiny-text.disabled {
      animation: none;
    }
    

    .hero5{
      background-color:rgb(3, 4, 91);
    }

    .hero7{
      background: linear-gradient(180deg, #000, #00027b);
    }

    .scroll-float {
     overflow: hidden;
    }

    .scroll-float-text {
      display: inline-block;
      font-size: clamp(1.6rem, 8vw, 10rem);
      font-weight: 900;
      text-align: center;
      line-height: 1.5;
    }

    .display-4{
      font-weight: bold;
    }

    .history-text {
      line-height: 1.8;
      font-size: 1.1rem;
    }

    #history-img {
      transition: transform 0.5s ease;
    }

    #history-img:hover {
      transform: scale(1.03);
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 60px;
      height: 4px;
      background-color: #c97b17;
      margin: 10px auto;
      border-radius: 2px;
    }

    .highlight-box {
      background-color:rgb(39, 39, 180);
      color: white;
      border-radius: 10px;
      padding: 20px;
    }

    .hero6{
      background-color:rgb(39, 39, 180);
    }

    .highlight-box h4::after {
      content: "";
      display: block;
      width: 50px;
      height: 3px;
      background-color: #f2c037;
      margin-top: 5px;
      border-radius: 2px;
    }
    

    .award-icon {
      background-color:rgb(231, 177, 0);
      width: 50px;
      height: 50px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-size: 24px;
      color: #c97b17;
    }

    .award-text {
      display: inline-block;
      margin-left: 15px;
    }

    .char {
      display: inline-block;
    }

    .navbar-toggler-icon{
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .dropdown-menu-dark .dropdown-item:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .section-titles {
      font-weight: bold;
      text-align: center;
      margin-bottom: 1rem;
    }
    .section-titles::after {
      content: "";
      display: block;
      width: 60px;
      height: 4px;
      background-color: #ffd700;
      margin: 10px auto 30px;
    }
    .cards {
      background-color: rgb(39, 39, 180);
      border: none;
      border-radius: 10px;
      padding: 20px;
      color: white;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
    }
    .starss {
      color: #ffd700;
      font-size: 1.2rem;
    }
    .review-texts {
      font-size: 1rem;
      margin: 15px 0;
    }
    .reviewers {
      font-weight: bold;
    }
    .roles {
      color: #ffd700;
      font-size: 0.9rem;
    }
    .section-titless {
      font-size: 2.5rem;
      font-weight: bold;
      text-align: center;
    }

    .section-titless::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background-color: #c97300;
      margin: 10px auto;
    }

    .icon-circless {
      width: 50px;
      height: 50px;
      background-color: #ffe9c6;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin-right: 15px;
    }

    .contact-infos i {
      font-size: 1.5rem;
      color: #5a2600;
    }

    .form-containers {
      background-color:rgb(39, 39, 180);
      color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }

    .btn-customs{
      background-color:rgb(6, 6, 118);
      color: white;
    }

    .btn-customs:hover {
      background-color:rgb(26, 0, 255);
    }

    .social-circless {
      width: 45px;
      height: 45px;
      background-color:rgb(31, 51, 228);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin-right: 10px;
    }

    .social-circless i {
      color: white;
      font-size: 1.25rem;
    }
  </style>
</head>

<nav class="navbar fixed-top navbar-custom">
  <div class="container-fluid"> 
    <a class="navbar-brand text-white " href="#" >
      <img src="la-carnew.png" alt="Logo" width="45" height="40" class="me-2" />
      La-carnè 
    </a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">Menu Navigasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="Login.php">Reservations</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">About us</a></li>
              <li><a class="dropdown-item" href="#contacts">Contact</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="developer.php">Our Team Developers</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="hero-section">
  <div class="hero-content">
    <h1 class="display-4">LA CARNE</h1>
    <p class="lead">Experience the finest premium steaks, expertly prepared to perfection<i></i></p>
    <a href="#menu" class="btn btn-outline-light mt-5"><i>Our Menu</i></a> <button type="button" class="btn btn-outline-light mt-5" data-bs-toggle="modal" data-bs-target="#reservationModal">Reserve table</button>
  </div>
</div>

<div class="container-fluid py-5 text-white hero3">
  <h2 class="section-title">Our Story</h2>
  <div class="row align-items-start">
    <!-- Left Column -->
    <div class="col-md-7">
      <h4 class="fw-bold">Premium Steak Experience</h4>
      <p>Founded in 2010, La Carne has been serving the finest quality steaks sourced from premium grass-fed cattle.
        Our commitment to excellence has made us the premier destination for steak lovers.</p>
      <p>Each cut is carefully selected by our expert chefs and aged to perfection to ensure the most flavorful dining
        experience. We take pride in our cooking techniques that bring out the natural flavors of our premium meats.</p>

      <div class="d-flex align-items-center mt-4">
        <div class="award-icon">
          🏅
        </div>
        <div class="award-text">
          <strong>Award-Winning</strong><br>
          <small>Recognized for culinary excellence</small>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-5 mt-4 mt-md-0 ">
      <div class="highlight-box">
        <h4 class="fw-bold">Opening Hours</h4>
        <div class="mt-3">
          <div class="d-flex justify-content-between">
            <span>Monday - Thursday</span>
            <span>12:00 PM – 10:00 PM</span>
          </div>
          <div class="d-flex justify-content-between">
            <span>Friday – Saturday</span>
            <span>12:00 PM – 11:00 PM</span>
          </div>
          <div class="d-flex justify-content-between mb-3">
            <span>Sunday</span>
            <span>12:00 PM – 9:00 PM</span>
          </div>
          <hr style="border-color: rgba(255,255,255,0.3);">
          <strong>Special Events & Private Dining Available</strong><br>
          <small>Contact us for more information</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid hero4 py-5">
    <h2 class="section-titles text-light">What Our Guests Say</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="cards h-100 text-center">
          <div class="starss mb-2">★★★★★</div>
          <p class="review-texts">
            "The best steak I've ever had! the atmosphere was incredible,the chef's team professionality was unmatchable,Faggots    ."
          </p>
          <div class="reviewers">Ye.</div>
          <div class="roles">Famous Rapper </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cards h-100 text-center">
          <div class="starss mb-2">★★★★★</div>
          <p class="review-texts">
            "La Carne adalah tempat spesial bagi kami, bravo kepada tim La Carne yang sudah mewujudkan pengalaman anniversary kami!."
          </p>
          <div class="reviewers">Sunarko & Evelynn</div>
          <div class="roles">Anniversary Dinner</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cards h-100 text-center">
          <div class="starss mb-2">★★★★★</div>
          <p class="review-texts">
            "The wine selection perfectly complements their steaks. The staff was superb and really professional."
          </p>
          <div class="reviewers">Doni dihcaprio.</div>
          <div class="roles">Famous actor</div>
        </div>
      </div>
    </div>
  </div>

<section id="menu" class="py-5  hero2">
  <div class="container">
    <h2 class="text-center text-custom mb-1">Our Signature</h2>
    <div class="underline mb-4"></div>
    <div class="row justify-content-center">
    
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard" >
          <img src="fillet mignon with bernaise sauce.jpg" class="card-img-top img-fluid" alt="Menu 1" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body p-2 custom-bgcard">
            <h6 class="card-title mb-1">Fillet mignon with bernaise sauce</h6>
            <p class="card-text small mb-2">potongan berkualitas yang dilengkapi dengan saus bernaise</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal1">Lihat Detail</button>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard">
          <img src="grilled a5 wagyu.jpg" class="card-img-top img-fluid" alt="Menu 2" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body p-2 custom-bgcard">
            <h6 class="card-title mb-1">Grilled a5 wagyu with teriyaki sauce</h6>
            <p class="card-text small mb-2">Daging wagyu a5 pilihan yang dilengkapi dengan saus oriental teriyaki.</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal2">Lihat Detail</button>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard">
          <img src="dye aged ribeye with wedges1.jpg" class="card-img-top img-fluid" alt="Menu 3" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body  custom-bgcard">
            <h6 class="card-title mb-1">Dry Aged Ribeye with herbs butter</h6>
            <p class="card-text small mb-2">Ribeye yang di Dry-age selama 30 hari untuk rasa maksimal</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal3">Lihat Detail</button>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard">
          <img src="dry aged t-bone with garlic butter.jpg" class="card-img-top img-fluid" alt="Menu 4" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body p-2 custom-bgcard">
            <h6 class="card-title mb-1">Grilled T-bone with garlic butter</h6>
            <p class="card-text small mb-2">Steak T-Bone berkualitas dengan mentega bawang putih spesial.</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal4">Lihat Detail</button>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard">
          <img src="steak au poivre.jpg" class="card-img-top img-fluid" alt="Menu 4" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body p-2 custom-bgcard">
            <h6 class="card-title mb-1">Steak au poivre</h6>
            <p class="card-text small mb-2"> hidangan Perancis yang terdiri dari steak, dan disajikan dengan saus brandy.</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal5">Lihat Detail</button>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
        <div class="card h-100 costum-bgcard">
          <img src="wagyu with gravy and mashed.jpg" class="card-img-top img-fluid" alt="Menu 4" style="height:130px; object-fit:cover;">
          <div class="card-img-overlay p-1">
            <a class="navbar-brand" href="#">
              <img src="la-carnew.png" alt="Logo" width="65" height="60" class="me-2" />
            </a>
          </div>
          <div class="card-body p-2 custom-bgcard">
            <h6 class="card-title mb-1">Tenderloin with gravy and mash</h6>
            <p class="card-text small mb-2">Daging tenderloin pilihan yang disajikan dengan saus dan mashed potato.</p>
            <button class="btn btn-sm btn-primary btn-colar w-100" data-bs-toggle="modal" data-bs-target="#modal6">Lihat Detail</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Modal untuk Menu 5 -->
<div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel4">Detail Menu: Steak au poivre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp2.950.000</p>
        <p><strong>Kualitas:</strong> Steak au poivre adalah hidangan klasik Prancis dengan rasa yang kuat dan berani. Hidangan ini biasanya menggunakan potongan daging sapi berkualitas tinggi yang dilapisi dengan lada hitam yang dihancurkan kasar.
</p>
        <p><strong>Asal:</strong> French grass-fed charolais beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Menu 5 -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel4">Detail Menu: Steak au poivre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp2.950.000</p>
        <p><strong>Kualitas:</strong> Steak au poivre adalah hidangan klasik Prancis dengan rasa yang kuat dan berani. Hidangan ini biasanya menggunakan potongan daging sapi berkualitas tinggi yang dilapisi dengan lada hitam yang dihancurkan kasar.
</p>
        <p><strong>Asal:</strong> French grass-fed charolais beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Menu 4 -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel4">Detail Menu: T-Bone Garlic Butter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp2.500.000</p>
        <p><strong>Kualitas:</strong> Daging T-Bone dry-aged 30 hari, dibakar sempurna diatas campuran kayu apel dan cinnamon dan disajikan dengan garlic butter khas.</p>
        <p><strong>Asal:</strong> Wisconsin's grain-fed black angus beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal untuk Menu 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel3">Detail Menu: Dry aged ribeye with herbs butter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp1.950.000</p>
        <p><strong>Kualitas:</strong> Ribeye potongan pilihan yang di Dry-age selama 30 hari, dipasangkan dengan potato wedges untuk mengeluarkan cita rasa natural daging.</p>
        <p><strong>Asal:</strong> Australian grass-fed black angus beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal untuk Menu 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel2">Detail Menu: Grilled a5 wagyu with teriyaki sauce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp3.000.000</p>
        <p><strong>Kualitas:</strong> Wagyu Jepang dari wilayah Kobe pilihan yang disajikan dengan cara pemasakan tradisional dengan saus oriental.</p>
        <p><strong>Asal:</strong> 100% Japanese Wagyu beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
  <!--Modal untuk Menu 1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content custom-modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel1">Detail Menu: Fillet mignon with bernaise sauce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Harga:</strong> Rp900.000</p>
        <p><strong>Kualitas:</strong> Bagian Fillet mignon pilihan yang disajikan dengan sayuran potong segar dengan saus bernaise yang dijamin memukau cita rasa.</p>
        <p><strong>Asal:</strong> Mexican Angus grass-fed beef</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk reservasi -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content hero5 text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="reservationModalLabel">Form Reservasi Meja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
      <form id="reservationForm" action="reserve.php" method="POST"> <!-- Corrected method here -->
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required />
    </div>

    <div class="mb-3">
        <label for="email" class="form-label" placeholder="@gmail.com">Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Nomor Telepon</label>
        <input type="tel" class="form-control" id="phone" name="phone" required />
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" required />
        </div>
        <div class="mb-3 col-md-6">
            <label for="time" class="form-label">Waktu</label>
            <input type="time" class="form-control" id="time" name="time" required />
        </div>
    </div>

    <div class="mb-3">
        <label for="notes" class="form-label">Catatan Pesanan</label>
        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Kirim Reservasi</button>
    </div>
</form>

      </div>
    </div>
  </div>
</div>
<div class="container-fluid py-5 hero7" id="contacts">
  <h2 class="section-titless text-light">Contact Us</h2>

  <div class="row mt-5 ">
    <!-- Left Side: Info -->
    <div class="col-md-6 mb-4 ">
      <h4 class="mb-4 text-light">Visit La Carne</h4>

      <div class="d-flex align-items-start mb-4 contact-info">
        <div class="icon-circless">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <div class="text-light">
          <strong>Address</strong><br>
          123 Steak Avenue, Culinary District<br>
          Gourmet City, GC 12345
        </div>
      </div>

      <div class="d-flex align-items-start mb-4 contact-info">
        <div class="icon-circless">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="text-light">
          <strong>Phone</strong><br>
          +1 (555) 123-4567
        </div>
      </div>

      <div class="d-flex align-items-start mb-4 contact-info">
        <div class="icon-circless">
          <i class="bi bi-envelope-fill"></i>
        </div>
        <div class="text-light">
          <strong >Email</strong><br>
          info@lacarne.example
        </div>
      </div>

      <h5 class="mt-4 text-light">Follow Us</h5>
      <div class="d-flex mt-2">
        <div class="social-circless"><i class="bi bi-facebook"></i></div>
        <div class="social-circless"><i class="bi bi-instagram"></i></div>
        <div class="social-circless"><i class="bi bi-twitter"></i></div>
      </div>
    </div>

    <!-- Right Side: Form -->
    <div class="col-md-6 ">
      <div class="form-containers ">
        <h4 class="mb-4">Send Us a Message</h4>
        <form>
          <div class="mb-3 ">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-customs w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">

      
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">La carne</h5>
        <p>Kami menyajikan makanan terbaik dengan bahan berkualitas dan pelayanan terbaik untuk Anda.</p>
      </div>

     
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Kontak</h5>
        <p><i class="fas fa-home mr-3"></i> Jalan Makanan No. 123, Jakarta</p>
        <p><i class="fas fa-envelope mr-3"></i> lacarne@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> +62 812 3456 7890</p>
      </div>

      
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Dont Be late News</h5>
        <p>Daftar untuk mendapatkan berita terbaru dan penawaran spesial dari kami.</p>
        <form action="">
          <div class="form-outline form-white mb-4">
            <input type="email" id="emailNewsletter" class="form-control" />
            <label class="form-label" for="emailNewsletter"></label>
          </div>
          <button type="submit" class="btn btn-outline-warning btn-block mb-4 mt-1">Daftar</button>
      </div>
    </div>

    
    <div class="row d-flex justify-content-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-center text-white mt-4">&copy; 2025 La carne. All Right Reserved.</p>
      </div>
    </div>
  </div>
</footer>




<button onclick="scrollToTop()" id="btnScrollTop" class="btn btn-primary">
  ↑
</button>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.onscroll = function() {
    const btn = document.getElementById("btnScrollTop");
    if(document.body.srollTop > 200 || document.documentElement.scrollTop>200) {
      btn.style.display = "flex" ;
    } else {
      btn.style.display = "none";
    }
  };

  function scrollToTop(){
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
// Inisialisasi observer untuk gambar sejarah
const historyImg = document.getElementById('history-img');
new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      historyImg.classList.add('animate__fadeInLeft');
    }
  });
}).observe(historyImg);
</script>
</body>
</html>
