<footer data-scroll-section>

  <section id="footer-1" data-scroll>
    <div class="container-fluid" >
      <div class="row footer-list-container">
        <div class="col-xl-6">
          <div class="row footer-list">
            <div class="col-xl-6 footer-form">
            @php 
              echo do_shortcode('[contact-form-7 id="38" title="Footer form"]');
            @endphp
            </div>
            <div class="col-xl-6">
              <div class="elipse-footer">
                <svg width="155" height="113" viewBox="0 0 155 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 12.8027C58 -7.5306 168 -16.0973 152 112.303" stroke="black"/>
                </svg>
                <div class="eye-1-cont eye-container">
                  <div class="eye-1 eye"></div>
                </div>
                <div class="eye-2-cont eye-container">
                  <div class="eye-2 eye"></div>
                </div>
                  
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="image-1">
            <svg width="184" height="184" viewBox="0 0 184 184" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_i_122_175)">
              <circle cx="92" cy="92" r="92" fill="#F2E9E1"/>
              </g>
              <defs>
              <filter id="filter0_i_122_175" x="0" y="0" width="184" height="184" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dx="-7" dy="11"/>
              <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0.6875 0 0 0 0 0.638802 0 0 0 0 0.638802 0 0 0 1 0"/>
              <feBlend mode="normal" in2="shape" result="effect1_innerShadow_122_175"/>
              </filter>
              </defs>
              </svg>              
          </div>
          <div class="image-2">
            <svg width="184" height="184" viewBox="0 0 184 184" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_i_122_175)">
              <circle cx="92" cy="92" r="92" fill="#F2E9E1"/>
              </g>
              <defs>
              <filter id="filter0_i_122_175" x="0" y="0" width="184" height="184" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dx="-7" dy="11"/>
              <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0.6875 0 0 0 0 0.638802 0 0 0 0 0.638802 0 0 0 1 0"/>
              <feBlend mode="normal" in2="shape" result="effect1_innerShadow_122_175"/>
              </filter>
              </defs>
              </svg>
              
          </div>
        </div>
        <div class="col-xl-3 footer-media-section" >
          <div class="footer-single-media">
              <a href="#">Behance</a>
              <div class="rope"></div>
          </div>
          <div class="footer-single-media">
              <a href="#">Youtube</a>
              <div class="rope"></div>
          </div>
          <div class="footer-single-media">
              <a href="#">Facebook</a>
              <div class="rope" ></div>
          </div>
          <div class="footer-single-media">
              <a href="#">Instagram</a>
              <div class="rope" ></div>
          </div>
      </div>
      <div class="col-xl-2 logo-footer">
        <p>pomelo<br>
        _visual</p>
      </div>
      <div class="col-xl-3 contact-a-footer">
        <a href="tel:799257469">799 257 469</a>
        <a href="mailto:hello@pomelovisual.pl">hello@pomelovisual.pl</a>
      </div>
      <div class="col-xl-7">
        
        @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'container' => 'false', 'menu_class' => 'nav d-flex']) !!}
        @endif
      </div>
      <div class="overlay-footer">
        <img src="https://pomelovisual.pl/wp-content/uploads/2022/12/footer-pomelo.png" alt="Pomelo Logo">
      </div>
      
      </div>
    </div>
  </section>
  
  <section id="footer-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <p>2022C pomelo visual</p>
        </div>
      </div>
    </div>
  </section>
</footer>
