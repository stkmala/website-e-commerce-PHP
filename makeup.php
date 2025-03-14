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
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <link rel="stylesheet" href="assets/css/loader.css" />
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
    <!-- ***** Banner Make-Up Area Start ***** -->
    <section id="makeup-banner">
      <img src="assets/images/bnrmkup.jpg" />
    </section>

    <!-- ***** Banner Make-Up Area End ***** -->

    <!-- ***** Make Up Area Starts ***** -->
    <div class="container">
      <div class="row justify-content-left">
        <h2>Emina <span>Make Up</span> Products</h2>
      </div>
      <div class="row justify-content-left">
        <h5>Check out all of our products.</h5>
      </div>
      <hr />
      <!-- Images Filter Buttons Section -->
      <div class="row justify-content-left" id="filter-buttons">
        <div class="col-12">
          <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
          <button class="btn mb-2 mx-1" data-filter="face">Face</button>
          <button class="btn mb-2 mx-1" data-filter="eyes">Eyes</button>
          <button class="btn mb-2 mx-1" data-filter="lips">Lips</button>
        </div>
      </div>
      <!-- Filterable Images / Cards Section -->
      <div class="row justify-content-left" id="filterable-cards">
        <div class="card" data-name="face" preview-name="p-1">
          <img src="assets/images/dm-compact.jpg" />
          <div class="card-body">
            <h6 class="card-title">DM — Compact Powder</h6>
            <p class="card-price">IDR 38,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="face" preview-name="p-13">
          <img src="assets/images/dm-bbcream.jpg" />
          <div class="card-body">
            <h6 class="card-title">DM — BB Cream</h6>
            <p class="card-price">IDR 25,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="face" preview-name="p-2">
          <img src="assets/images/dm-cushion.jpg" />
          <div class="card-body">
            <h6 class="card-title">DM — Cushion</h6>
            <p class="card-price">IDR 79,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="face" preview-name="p-3">
          <img src="assets/images/bs-loose.jpg" />
          <div class="card-body">
            <h6 class="card-title">BS — Loose Powder</h6>
            <p class="card-price">IDR 20,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="face" preview-name="p-4">
          <img src="assets/images/pressed-blush.jpg" />
          <div class="card-body">
            <h6 class="card-title">Cheek Lit Pressed Blush</h6>
            <p class="card-price">IDR 35,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="face" preview-name="p-5">
          <img src="assets/images/highlighter.jpg" />
          <div class="card-body">
            <h6 class="card-title">Highlighter Stick</h6>
            <p class="card-price">IDR 35,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="lips" preview-name="p-6">
          <img src="assets/images/glossy-stain.jpg" />
          <div class="card-body">
            <h6 class="card-title">Glossy Stain</h6>
            <p class="card-price">IDR 41,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="lips" preview-name="p-7">
          <img src="assets/images/poppin.jpg" />
          <div class="card-body">
            <h6 class="card-title">Poppin' Matte</h6>
            <p class="card-price">IDR 42,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="lips" preview-name="p-8">
          <img src="assets/images/lip-balm.jpg" />
          <div class="card-body">
            <h6 class="card-title">Tinted Lip Balm Stick</h6>
            <p class="card-price">IDR 24,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="eyes" preview-name="p-9">
          <img src="assets/images/eyeliner.jpg" />
          <div class="card-body">
            <h6 class="card-title">Pencil Eye Liner</h6>
            <p class="card-price">IDR 34,000</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="eyes" preview-name="p-10">
          <img src="assets/images/starmascara.jpg" />
          <div class="card-body">
            <h6 class="card-title">Star Lash Mascara</h6>
            <p class="card-price">IDR 54,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="eyes" preview-name="p-11">
          <img src="assets/images/eyebrow.jpg" />
          <div class="card-body">
            <h6 class="card-title">Top Secret Eyebrow</h6>
            <p class="card-price">IDR 48,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
        <div class="card" data-name="eyes" preview-name="p-12">
          <img src="assets/images/eyeshadow.jpg" />
          <div class="card-body">
            <h6 class="card-title">Pop Rouge Eyeshadow</h6>
            <p class="card-price">IDR 39,500</p>
            <a class="card-btn" href="#">See all</a>
          </div>
        </div>
      </div>
    </div>

            <!-- ***** Preview Start ***** -->
            <div class="products-preview">
              <div class="preview" preview-target="p-1">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-cpowder.png" alt="" />
                <h3>Daily Matte Compact Powder</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 38,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-2">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-cushion.png" alt="" />
                <h3>Daily Matte Cushion</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Emina Daily Matte Cushion adalah satu-satunya cushion dari Emina memiliki keunggulan sebagai berikut:</p>
                <div class="price">IDR 79,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-3">
                <i class="fa fa-times"></i>
                <img src="assets/images/bsloose.png" alt="" />
                <h3>Bright Stuff Loose Powder</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 20,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-4">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-pblush.png" alt="" />
                <h3>Cheek Lit Pressed Blush</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 35,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-5">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-highliter.png" alt="" />
                <h3>Cheek Lit HighlighterStick</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 35,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-6">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-glossystain.png" alt="" />
                <h3>Emina Glossy Stain</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 41,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-7">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-poppinmatte.png" alt="" />
                <h3>Emina Poppin' Matte</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 42,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-8">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-lipbalm.png" alt="" />
                <h3>Tinted Lip Balm Stick</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 24,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-9">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-eyeliner.png" alt="" />
                <h3>Pencil Eye Liner</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 34,000</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-10">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-mascara.png" alt="" />
                <h3>Star Lash Aqua Mascara</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 54,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-11">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-eyebrow.png" alt="" />
                <h3>Top Secret Eyebrow</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 48,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-12">
                <i class="fa fa-times"></i>
                <img src="assets/images/p-eyeshadow.png" alt="" />
                <h3>Pop Rouge Eyeshadow</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 39,500</div>
                <div class="buttons">
                  <a href="#" class="buy">buy now</a>
                  <a href="#" class="cart">add to cart</a>
                </div>
              </div>
              <div class="preview" preview-target="p-13">
                <i class="fa fa-times"></i>
                <img src="assets/images/bb cream.png" alt="" />
                <h3>Daily Matte BB Cream</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span>( 250 )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus doloremque nemo recusandae commodi sit cupiditate consequatur aliquid cumque tempore!</p>
                <div class="price">IDR 25,000</div>
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
