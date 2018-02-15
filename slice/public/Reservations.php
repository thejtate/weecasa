<!DOCTYPE html>
<html>
<?php $title = 'Lyons-2-Directions'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <section class="section section-top style-b">
    <div class="bg-wrap">
      <div class="bg" style="background-image: url('theme/images/tmp/section-top-img-2.jpg')">
      </div>
    </div>
    <div class="container">
      <div class="title">
        <div class="inner-wrap">
          <h1>Reservations</h1>
        </div>
      </div>
    </div>
  </section>
  <div class="inner-wrapper">
    <div class="content-wrapper container">
      <IFRAME SRC="https://v2.reservationkey.com/3501/weecasa" name="publicpage" width=100% height=1100 bgcolor=white frameborder=0></IFRAME>
<!--      <IFRAME SRC="https://v2.reservationkey.com/3501/weecasa" name="publicpage" bgcolor=white frameborder=0></IFRAME>-->
    </div>
  </div>

  <?php include 'tpl/layout/section-newsletter.inc'; ?>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>