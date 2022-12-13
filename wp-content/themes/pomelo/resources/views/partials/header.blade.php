<div id="mobile-header">
  <div class="logo-container">
    <img src="http://localhost/pomelo/wp-content/uploads/2022/11/pomelo_logo_header.svg" alt="">
  </div>
  <button id="mobilehamburger" class="hamburger hamburger--spring" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <ul>
    <li class="logo-mobile"></li>
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => 'false', 'menu_class' => 'nav d-flex align-items-center']) !!}
  @endif
  </ul>
</div>
<div class="header-margin"></div>
<div class="header-holder" >
  <div class="container-logo-hidden-scroll" data-scroll-section >
    <img src="http://localhost/pomelo/wp-content/uploads/2022/11/pomelo_logo_color.svg" alt="" data-scroll data-scroll-speed="-1.5">
  </div>
  <div class="logo-container" >
    <img src="http://localhost/pomelo/wp-content/uploads/2022/11/pomelo_logo_header.svg" alt="">
  </div>
  <div class="container-wrap-header">
<header class="" id="site-header" data-scroll-section>
  <div class="header-container">
    <button id="desktophamburger" class="hamburger hamburger--spring" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
   
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => 'false', 'menu_class' => 'nav d-flex align-items-center']) !!}
    @endif
    
  </div>
</header>
  </div>

</div>
