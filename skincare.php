<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet" />

    <title>Emilite,Emina Versi Lite</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />
    <link rel="stylesheet" href="assets/css/owl-carousel.css" />
    <link rel="stylesheet" href="assets/css/loader.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <link href="assets/images/logo-eminachh.png" rel="icon" />
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
  </head>

  <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.php" class="logo">
                <img src="assets/images/logo emina.png" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="home.php">Home</a>
                </li>
                <li class="submenu">
                  <a href="javascript:;" class="active">Shop</a>
                  <ul>
                    <li><a href="makeup.php">Make Up</a></li>
                    <li><a href="skincare.php">Skincare</a></li>
                  </ul>
                </li>
                <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li>
                <li class="submenu">
                  <a href="javascript:;">Explore</a>
                  <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                  </ul>
                </li>
                <?php if (isset($_SESSION['username'])): ?>
                  <li class="scroll-to-section">
                    <a href="index.php?action=logout">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Logout
                      </span>
                    </a>
                  </li>
                <?php else: ?>
                  <li class="scroll-to-section">
                    <a href="login.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Login
                      </span>
                    </a>
                  </li>
                <?php endif ?>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Banner Skincare Area Start ***** -->
    <section id="skincare-banner">
      <img src="assets/images/bnrskncre.jpg" />
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Skincare Area Starts ***** -->
    <div class="container">
      <div class="row justify-content-left">
        <h2>Emina <span>Skincare</span> Products</h2>
      </div>
      <div class="row justify-content-left">
        <h5>Check out all of our products.</h5>
      </div>
      <hr />
      <!-- Images Filter Buttons Section -->
      <div class="row justify-content-left" id="filter-buttons">
        <div class="col-12">
          <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
          <button class="btn mb-2 mx-1" data-filter="cleanser">cleanser</button>
          <button class="btn mb-2 mx-1" data-filter="mois">moisturizer</button>
          <button class="btn mb-2 mx-1" data-filter="tonser">toner & serum</button>
          <button class="btn mb-2 mx-1" data-filter="sunscreen">sunscreen</button>
        </div>
      </div>
      <!-- Filterable Images / Cards Section -->
      <div class="row justify-content-left" id="filterable-cards">
        <div class="card" data-name="cleanser" preview-name="p-1">
          <img src="assets/images/bright-stuff-fw (1).jpeg" />
          <div class="card-body">
            <h6 class="card-title">BS — Face Wash</h6>
            <p class="card-price">IDR 25,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="cleanser" preview-name="p-2">
          <img src="assets/images/brightstuff-mw.jpg" />
          <div class="card-body">
            <h6 class="card-title">BS — Micellar Water</h6>
            <p class="card-price">IDR 26,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="mois" preview-name="p-3">
          <img src="assets/images/brightstuff-toneup.jpg" />
          <div class="card-body">
            <h6 class="card-title">BS — Tone Up Cream</h6>
            <p class="card-price">IDR 26,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="tonser" preview-name="p-4">
          <img src="assets/images/brightstuff-to.jpg" />
          <div class="card-body">
            <h6 class="card-title">BS — Face Toner</h6>
            <p class="card-price">IDR 24,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="tonser" preview-name="p-5">
          <img src="assets/images/mspmpl-to.jpg" />
          <div class="card-body">
            <h6 class="card-title">Ms Pimple Face Toner</h6>
            <p class="card-price">IDR 33,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="cleanser" preview-name="p-6">
          <img src="assets/images/mspmpl-fw.jpg" />
          <div class="card-body">
            <h6 class="card-title">Ms Pimple Face Wash</h6>
            <p class="card-price">IDR 22,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="mois" preview-name="p-7">
          <img src="assets/images/mspmpl-mois.jpg" />
          <div class="card-body">
            <h6 class="card-title">Ms Pimple Moisturizing</h6>
            <p class="card-price">IDR 28,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="tonser" preview-name="p-8">
          <img src="assets/images/mspmpl-spotgel.jpg" />
          <div class="card-body">
            <h6 class="card-title">Ms Pimple Spot Gel</h6>
            <p class="card-price">IDR 37,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="sunscreen" preview-name="p-9">
          <img src="assets/images/sunbattle-45.jpg" />
          <div class="card-body">
            <h6 class="card-title">SB SPF 45 PA+++</h6>
            <p class="card-price">IDR 40,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="sunscreen" preview-name="p-10">
          <img src="assets/images/sunbattle-30.jpg" />
          <div class="card-body">
            <h6 class="card-title">SB SPF 30 PA+++</h6>
            <p class="card-price">IDR 25,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Preview Start ***** -->
    <div class="products-preview">
      <div class="preview" preview-target="p-1">
        <i class="fa fa-times"></i>
        <img src="assets/images/bs-face-wash.png" alt="" />
        <h3>Bright Stuff face</h3>
        <div class="stars">
          Wash
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 25,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-2">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-bsmw.png" alt="" />
        <h3>Bright Stuff Micellar Water</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 26,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-3">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-toneup.png" alt="" />
        <h3>Bright Stuff Tone Up Cream</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 26,000</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-4">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-bstoner.png" alt="" />
        <h3>Bright Stuff Face Toner</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 24,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-5">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-mstoner.png" alt="" />
        <h3>Ms Pimple Acne Solution Face Toner</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 33,000</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-6">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-msfw.png" alt="" />
        <h3>Ms Pimple Acne Solution Face Wash</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 22,000</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-7">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-msmois.png" alt="" />
        <h3>Ms Pimple Acne Solution Moisturizing Gel</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 28,000</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-8">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-spotgel.png" alt="" />
        <h3>Ms Pimple Acne Solution Spot Gel</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 37,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-9">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-sb45.png" alt="" />
        <h3>Sun Battle SPF 45 PA+++</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 40,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
      <div class="preview" preview-target="p-10">
        <i class="fa fa-times"></i>
        <img src="assets/images/p-sb30.png" alt="" />
        <h3>Sun Battle SPF 30 PA+++</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
        <div class="price">IDR 25,500</div>
        <div class="buttons">
          <a href="#" class="buy">buy now</a>
          <a href="#" class="cart">add to cart</a>
        </div>
      </div>
    </div>
    <!-- ***** Preview End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="first-item">
              <div class="logo">
                <img src="assets/images/logo emina.png" alt="logo emina" />
              </div>
              <ul>
                <li><a href="#">Mal Metropolitan, Jl KH. Noer Ali, RT.008/RW.002, Pekayon Jaya, Bekasi Selatan, Bekasi City, West Java 17148</a></li>
                <li><a href="#">marketing@eminacosmetic.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="foot1">
              <h4>Emina's Category</h4>
              <ul>
                <li><a href="makeup.php">Make Up</a></li>
                <li><a href="skincare.php">Skincare</a></li>
                <li><a href="voucher.php">Voucher</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="foot2">
              <h4>Useful Link</h4>
              <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="under-footer">
              <p>Copyright © 2023 made with love, mala.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Loading Screen -->
    <div class="loading-screen animate_animated animate_fadeInUp">
      <div class="loader"></div>
      <h1>Born to be loved</h1>
          
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/filter.js"></script>
    <script src="assets/js/sort.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/preview.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
      $(function () {
        var selectedClass = "";
        $("p").click(function () {
          selectedClass = $(this).attr("data-rel");
          $("#portfolio").fadeTo(50, 0.1);
          $("#portfolio div")
            .not("." + selectedClass)
            .fadeOut();
          setTimeout(function () {
            $("." + selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
          }, 500);
        });
      });
    </script>
  </body>
</html>
