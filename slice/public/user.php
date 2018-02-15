<!DOCTYPE html>
<html>
<?php $title = 'user'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div id="main-wrapper">
    <div id="main" class="clearfix">

      <div id="content" class="column">
        <div class="section">
          <a id="main-content"></a>
          <!--<h1 class="title" id="page-title">-->
          <!--</h1>-->                                <div class="tabs"></div>                      <div class="region region-content">
            <div id="block-system-main" class="block block-system">


              <div class="content">
                <form action="/user" method="post" id="user-login" accept-charset="UTF-8"><div><p class="login-title">Log In</p><div class="form-item form-type-textfield form-item-name">
                      <label for="edit-name">Username or e-mail address <span class="form-required" title="This field is required.">*</span></label>
                      <input autofocus="autofocus" title="Username or e-mail address" placeholder="Username or e-mail address" type="text" id="edit-name" name="name" value="" size="50" maxlength="60" class="form-text required">
                    </div>
                    <div class="form-item form-type-password form-item-pass">
                      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                      <input title="Password" placeholder="Password" type="password" id="edit-pass" name="pass" size="50" maxlength="128" class="form-text required">
                    </div>
                    <input type="hidden" name="form_build_id" value="form-p26HrYCVFegHsYdfZwDxkPoCAps-vc8F3aq5GR5omjo">
                    <input type="hidden" name="form_id" value="user_login">
                    <p class="forgot-password"><a href="/user/password" title="Get a new password">Forgot Password?</a></p><div id="capslockdiv"><p style="display: none;">Caps Lock On</p></div><div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Log in" class="form-submit"></div></div></form>  </div>
            </div>
          </div>
        </div>
      </div> <!-- /.section, /#content -->

    </div>
  </div>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>