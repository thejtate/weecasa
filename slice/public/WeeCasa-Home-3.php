<!DOCTYPE html>
<html>
<?php $title = 'WeeCasa-Home-3'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="front">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <section class="section section-top">
<!--    <div class="bg-wrap">-->
<!--      <div class="bg" style="background-image: url('theme/images/tmp/WeeHomeHeader.jpg')"></div>-->
<!--      <div class="bg-style-a">-->
<!--      </div>-->
<!--    </div>-->
    <div class="video" >
      <video loop="loop" autoplay="autoplay" width="100%" muted="muted" preload="auto" poster="theme/video/poster-1.jpg" >
        <source src="theme/video/WeeCasaOV.mp4" type="video/mp4">
        <source src="theme/video/WeeCasaOV.webm" type="video/webm">
        <img src="theme/video/poster-1.jpg" alt=""/>
      </video>
    </div>
    <div class="container">
      <div class="title-a">
          <div class="img">
              <img src="theme/images/logo-c.png" alt=""/>
          </div>
          <h1>The World’s <span>Largest</span> Tiny House Resort.</h1>
      </div>
    </div>
  </section>
  <section class="section section-book-now">
    <div class="container">
      <div class="inner-wrap">
        <div class="parts-wrap">
          <div class="left-part">
<!--            <div>-->
<!--              THE WORLD’S-->
<!--            </div>-->
<!--            <h3>Largest</h3>-->
<!--            <div class="sub-title">-->
<!--              TINY HOUSE RESORT-->
<!--            </div>-->
              <img src="theme/images/tmp/largesttinyhouseresort-a.png" alt=""/>
          </div>
          <div class="right-part">
            <p>
              <strong>WeeCasa is a tiny house resort</strong> in Lyons, Colorado. In keeping with the belief that life should be a balance of freedom and sustainability, we strive to express a new vision of the “American Dream”, one you can experience here. We believe autonomy is born of simplicity and it is our mission to help people experience comfortable, high quality spaces that liberate them from clutter, debt and stress. WeeCasa is an expression of possibility you can enjoy in a beautiful setting and provides respite from the urban sprawl.  Live Wee, Live Free!
            </p>
          </div>
        </div>
        <div class="mobile-only">
          <p>
            In keeping with the belief that life should be a balance of freedom and sustainability, <strong>WeeCasa</strong> strives to express a new vision of the “American Dream”, it is our mission to help people experience comfortable, high quality spaces that liberate them from clutter, debt and stress. WeeCasa is an expression of possibility you can enjoy in a beautiful setting and provides respite from the urban sprawl.  Live Wee, Live Free!
          </p>
        </div>
        <a class="btn style-b" href="#">
          <span class="hex">
            <svg width="150" height="100%">
              <polygon points="75 0,150 54, 150 122,75 176, 0 122, 0 54"></polygon>
            </svg>
          </span>
           <span class="hex-hover">
            <svg width="150" height="100%">
              <polygon points="75 0,150 54, 150 122,75 176, 0 122, 0 54"></polygon>
            </svg>
          </span>
          BOOK
          NOW
        </a>
      </div>
    </div>
  </section>
  <section class="section section-weekend-stays" id="rrrr">
    <div class="bg-wrap">
      <div class="bg" style="background-image: url('theme/images/tmp/section-weekend-stays.jpg')">
      </div>
    </div>
    <div class="container">
      <div class="discount">
        <div class="amount"><span>$</span>60 OFF</div>
        WEEKEND STAYS THIS MONTH
      </div>
      <div class="desc">
        Book a weekend stay (two night minimum, new reservations only) at WeeCasa in Lyons, Colorado for a weekend in May, 2017 and enjoy $60 off your stay!
      </div>
      <a class="btn" href="#">
        BOOK A STAY
      </a>
      <div class="discount-code">
        Reserve with code MAY60
      </div>
      <a class="btn" href="#rrrr">
        rrrr
      </a>
    </div>
  </section>

  <section class="section section-locations">
    <div class="container">
      <div class="b-slider">
        <div class="slider">
          <?php $location_slider_item = array(
            array("AUSTIN", "Vast Locations", array(
              array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg", "5"),
              array("Heritage River Birch","theme/images/tmp/locations-item-img-2.jpg", "4"),
              array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg","2"),
              array("Pequod", "theme/images/tmp/locations-item-img-2.jpg","5"),
              array("Nun’s House", "theme/images/tmp/locations-item-img-3.jpg", "5"),
            )),
            array("AUSTIN", "Vast Locations", array(
              array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg", "5"),
              array("Heritage River Birch", "theme/images/tmp/locations-item-img-2.jpg", "4"),
            )),
            array("AUSTIN", "Vast Locations", array(
              array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg", "5"),
              array("Heritage River Birch", "theme/images/tmp/locations-item-img-2.jpg", "4"),
              array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg","2"),
              array("Pequod", "theme/images/tmp/locations-item-img-2.jpg", "5"),
              array("Nun’s House", "theme/images/tmp/locations-item-img-3.jpg", "5"),
              array("Nun’s House", "theme/images/tmp/locations-item-img-3.jpg", "5"),
            )),
          )?>
          <?php  foreach ($location_slider_item as $element_1): ?>
            <div class="slide-item">
              <div class="location"><?php print $element_1[1] ?> </div>
              <h2><?php print $element_1[0] ?>, TX</h2>
              <div class="items">
                <?php $location_item = $element_1[2]?>
                <?php  foreach ($location_item as $element): ?>
                  <?php include 'tpl/items/location_item.inc'; ?>
                <?php endforeach; ?>
              </div>
              <a class="btn style-a" href="#">
                SEE ALL <?php print $element_1[0] ?> HOUSES
              </a>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="slide-nav"></div>
      </div>
      <a class="btn btn-all style-a" href="#">
        SEE ALL LOCATIONS
      </a>
    </div>
  </section>

  <section class="section section-slider">
    <script
      type="text/javascript"
      async defer
      src="//assets.pinterest.com/js/pinit.js"
      ></script>
    <div class="b-slider">
      <div class="slider">
        <div class="item">
          <img src="theme/images/tmp/slider-img-1.jpg" alt=""/>
          <div class="pin">
            <div class="inner">
              <a data-pin-do="button_pinit" href="https://www.pinterest.com/pin/create/button/?url=http://www.foodiecrush.com/2014/03/filet-mignon-with-porcini-mushroom-compound-butter/&media=https://s-media-cache-ak0.pinimg.com/736x/17/34/8e/17348e163a3212c06e61c41c4b22b87a.jpg&description=So%20delicious!" data-pin-height="28"></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="theme/images/tmp/slider-img-2.jpg" alt=""/>
        </div>
        <div class="item">
          <img src="theme/images/tmp/slider-img-3.jpg" alt=""/>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-quotes">
    <div class="container">
      <div class="tabs-content">
        <a href="" class="item">
          <span class="item-inner">
            <span class="blockquote">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex” ea commodo consequat.“
            </span>
          </span>
        </a>
<!--        <div class="item">-->
<!--          <div class="item-inner">-->
<!--            <blockquote>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut-->
<!--              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut-->
<!--              aliquip ex” ea commodo consequat.“-->
<!--            </blockquote>-->
<!--          </div>-->
<!--        </div>-->
        <div class="item">
          <div class="item-inner">
            <blockquote>“Lorem ipsum dolor sit amet, “</blockquote>
          </div>
        </div>
        <div class="item">
          <div class="item-inner">
            <blockquote>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex” ea commodo consequat.“
            </blockquote>
          </div>
        </div>
        <div class="item">
          <div class="item-inner">
            <blockquote>“Lorem ipsum dolor sit amet, “</blockquote>
          </div>
        </div>
      </div>
      <div class="tabs-nav">
        <span class="arrow"></span>
        <ul>
          <li class="active">
            <a href="#">
              <span class="ico">
                 <img src="theme/images/tmp/quotes-logo-1.png" alt=""/>
                 <img src="theme/images/tmp/quotes-logo-1-a.png" alt=""/>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico">
                 <img src="theme/images/tmp/quotes-logo-2.png" alt=""/>
                 <img src="theme/images/tmp/quotes-logo-2-a.png" alt=""/>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico">
                 <img src="theme/images/tmp/quotes-logo-1.png" alt=""/>
                <img src="theme/images/tmp/quotes-logo-1-a.png" alt=""/>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico">
                 <img src="theme/images/tmp/quotes-logo-2.png" alt=""/>
                <img src="theme/images/tmp/quotes-logo-2-a.png" alt=""/>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php include 'tpl/layout/section-newsletter.inc'; ?>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>