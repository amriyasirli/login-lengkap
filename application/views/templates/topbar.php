<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

  <nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

      <div class="navbar-logo">
        <a class="mobile-menu" id="mobile-collapse" href="#!">
          <i class="feather icon-menu"></i>
        </a>
        <a href="index-1.htm">
          <img class="img-fluid" src="<?= base_url(); ?>vendor/files/assets/images/logo.png" alt="Theme-Logo">
        </a>
        <a class="mobile-options">
          <i class="feather icon-more-horizontal"></i>
        </a>
      </div>

      <div class="navbar-container container-fluid">
        <ul class="nav-left">
          <li>
            <a href="#!" onclick="javascript:toggleFullScreen()">
              <i class="feather icon-maximize full-screen"></i>
            </a>
          </li>
        </ul>
        <ul class="nav-right">
          <li class="user-profile header-notification">
            <div class="dropdown-primary dropdown">
              <div class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-radius" alt="User-Profile-Image">
                <span><?= $user['name']; ?></span>
                <i class="feather icon-chevron-down"></i>
              </div>
              <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                <li>
                  <a href="user-profile.htm">
                    <i class="feather icon-user"></i> Profile
                  </a>
                </li>
                <li>
                  <a href="<?= base_url('auth/logout'); ?>">
                    <i class="feather icon-log-out"></i> Logout
                  </a>
                </li>
              </ul>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar chat start -->

  <!-- Sidebar inner chat start-->

  <!-- Sidebar inner chat end-->
  <div class="pcoded-main-container">
    <div class="pcoded-wrapper">