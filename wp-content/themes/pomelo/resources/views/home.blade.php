{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
<section id="home-1" data-scroll-section>
    <div class="container-fluid"  id="scroll-home-1">
        <div class="row">
            <div class="col-xl-12">
                <h2 data-scroll data-scroll-speed="2" data-scroll-sticky data-scroll-target="#scroll-home-1">
                    wychodzimy z założenia, że wszystko może być sztuką
                </h2>
            </div>
        </div>
    </div>
</section>
<section id="home-2" data-scroll-section> 
    <div class="container-fluid home-2" >
        <div class="row">
            <div class="col-xl-12" >
                <div class="line-decoration" data-scroll data-scroll-speed="3"></div>
            </div>
            <div class="col-xl-6">
                <p data-scroll data-scroll-speed="-2">
                    Na rynku ponad 5 lat, pod <a href="https://pomelovisual.pl/o-nas/">własną marką</a> od roku. Naszym celem jest Twój wyjątkowy projekt w naszym portfolio. Wyróżnijmy się razem, <span style="color: #FDC800">to proste</span>.
                </p>
            </div>
            <div class="col-xl-6">
                <div class="image-container">
                    <div class="image-1">
                        <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/img2.png" alt="" data-scroll data-scroll-speed="1.4">
                    </div>    
                    <div class="image-2">
                        <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/img1.png" alt="" data-scroll data-scroll-speed="-0.5">
                    </div>
                </div>
                <div class="overlay" data-scroll data-scroll-speed="-2.5"></div>
                <div class="elipse-decoration" data-scroll data-scroll-speed="-2"></div>
            </div>
        </div>
    </div>
</section>
<section id="home-3" data-scroll-section>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-12" id="scroll-home-2">
                <h2 data-scroll data-scroll-speed="2" data-scroll-sticky data-scroll-target="#scroll-home-2">Co możemy dla Ciebie zrobić?</h2>
            </div>
            <div class="col-xl-7">
                <h3  data-scroll data-scroll-speed="1" >
                    <span>Strona www</span>, <span>webdesign</span>, <span>sklep internetowy</span>, <span>logo</span>, <span>projekty do druku</span>, <span>reklamę</span>, <span>zdjęcia</span>, <span>film</span>, <span>copywriting</span>, <span>identyfikacja wizualna</span>.
                </h3>
            </div>
            <div class="col-xl-5"></div>
        </div>
    </div>
</section>

<section id="home-4" data-scroll-section>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-8">
                <div class="row home-4-section-project" >
                    <div class="col-md-4" data-scroll data-scroll-speed="-0.5" >
                        <p class="number">01</p>
                        <h2 >Pomysł</h2>
                        <p>>Na początku było słowo ;) 
                            Każdą realizację zaczynamy od rozmowy na temat Twojego projektu, chcemy poznać Twój biznes i przedstawić Ci naszą wizję na zwiększenie sukcesu Twojej marki. </p>
                    </div>
                    <div class="col-md-4" data-scroll data-scroll-speed="0.5">
                        <p class="number ">02</p>
                        <h2 >Projekt</h2>
                        <p>W oparciu o otrzymane wytyczne grafik tworzy koncept i wizualizację Twojego projektu. Każde logo, czy też strona jest indywidualną kreacją  szytą na miarę wyłącznie jednej firmy. </p>
                    </div>
                    <div class="col-md-4"  data-scroll data-scroll-speed="-1">
                        <p class="number ">03</p>
                        <h2 >Relizacja</h2>
                        <p>Proces, w którym strona internetowa zaczyna żyć, a logo nabiera koloru. Po zaakceptowanej wersji, przekazujemy Ci niezbędne pliki i informacje. Teraz jesteś bardziej widoczny na rynku ponad konkurencję. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 image-container-horizontal">
                <div class="image-1 image-horizontal">
                    <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/img3.png" alt="" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal">
                </div>
                <div class="image-2 image-horizontal">
                    <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/img4.png" alt="" data-scroll data-scroll-speed="2.5" data-scroll-direction="horizontal">
                </div>
                <div class="image-3 image-horizontal">
                    <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/img5.png" alt=""data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-5" data-scroll-section>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-5 middle">
                <p data-scroll data-scroll-speed="2.5">Odpowiadamy jak najszybciej jest to możliwe, cały zespół pracuje przy komputerach - więc jak ktoś przyśnie najpóźniej odpowie następnego dnia.
                </p>
            </div>
            <div class="col-xl-1">
                <div class="border-vertical" data-scroll data-scroll-speed="2.5"></div>
            </div>
            <div class="col-xl-6">
                <h3 class="lerp-wrap" data-scroll>
                    <span >Pogadajmy!</span> 
                    <span >Zostaw</span> 
                    <span >swój</span> 
                    <span >mail,</span>
                    <span >lub </span>
                    <span >jeśli</span> 
                    <span >wolisz</span> 
                    <span >zadzwoń</span> 
                </h3>
                <div class="form-container" data-scroll data-scroll-speed="2.7">
                    @php 
                        echo do_shortcode('[contact-form-7 id="28" title="Formularz 1"]');
                    @endphp
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-6" data-scroll-section>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-12">
                <div class="offer"  id="home-offer-sticky">
                    <h2 data-scroll data-scroll-speed="2.8">Kilka wybranych realizacji</h2>
                    <div class="container-oferta" data-scroll data-scroll-speed="2">
                        <div class="single-offer offer-1">
                            <a href="https://notariuszgrybow.pl" target="_blank">
                                <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/realizacje-1.png" alt="">
                            </a>
                        </div>
                        <div class="single-offer offer-2">
                            <a href="https://www.behance.net/gallery/156730331/Movie-poster-Gdy-nadlatuja-bociany" target="_blank">
                            <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/realizacje-2.png" alt="">
                            </a>
                        </div>
                        <div class="single-offer offer-3" >
                            <a href="https://www.behance.net/gallery/156407101/The-Daily-logo-Challenge-%2850%29" target="_blank">
                            <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/realizacje-3.png" alt="">
                            </a>
                        </div>
                        <div class="single-offer offer-4" >
                            <a href="https://alkopasja.pl" target="_blank">
                            <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/realizacje4.png" alt="">
                            </a>
                        </div>
                        <div class="single-offer offer-5" >
                            <a href="https://www.behance.net/gallery/159536575/Landing-page-%28sample%29-Bellyman-oils-aromatherapy" target="_blank">
                            <img src="https://pomelovisual.pl/wp-content/uploads/2023/01/realizacje-5.png" alt="">
                            </a>
                        </div>
                        <div class="overlay-hr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home-7" data-scroll-section>
    <div id="home-contact" >
        <div class="row" >
            <div class="col-md-3" data-scroll data-scroll-speed="1">
                <div class="contact-single-item-container">
                    <a href="https://www.behance.net/pomelovisual"  rel="nofollow" target="_blank">Behance</a>
                    <div class="rope" data-scroll data-scroll-offset="80%"></div>
                </div>
                <div class="contact-single-item-container">
                    <a href="#" rel="nofollow" target="_blank">Youtube</a>
                    <div class="rope" data-scroll data-scroll-offset="85%"></div>
                </div>
                <div class="contact-single-item-container">
                    <a href="https://www.facebook.com/pomelovisual" rel="nofollow" target="_blank">Facebook</a>
                    <div class="rope" data-scroll data-scroll-offset="90%"></div>
                </div>
                <div class="contact-single-item-container">
                    <a href="#" rel="nofollow" target="_blank">Instagram</a>
                    <div class="rope" data-scroll data-scroll-offset="95%"></div>
                </div>
            </div>
            <div class="col-md-9" data-scroll data-scroll-speed="2">
                <p class="p-home-7">Wszystkie realizacje spod naszego szyldu znajdziecie na naszych profilach. Dołącz do naszej małej <a href="https://pomelovisual.pl/realizacje/">galerii sztuki</a> wraz ze swoją stroną i logo.</p>
                <div class="p-home-7-overlay" >Wszystkie realizacje spod naszego szyldu znajdziecie na naszych profilach. Dołącz do naszej małej<a href="https://pomelovisual.pl/realizacje/"> galerii sztuki </a>wraz ze swoją stroną i logo.</div>
            </div>
        </div>
    </div>
</section>
<section id="home-8" data-scroll-section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6" >
                <h2 data-scroll data-scroll-speed="1.4">Odwiedź naszego bloga</h2>
                <p data-scroll data-scroll-speed="2.4">Trochę o sztuce, Twojej firmie, designie, często<br> zadawanych pytaniach, trochę o filozofii, grafice<br> i tym co może Ci sie przydać.</p>
            </div>
            <div class="col-xl-6 blob-container-main">
                <canvas id="c" data-scroll data-scroll-speed="1.5" width="840" height="450"></canvas>
            </div>
        </div>
    </div>
</section>

<section id="home-9" data-scroll-section>
    <div class="container-fluid">
        <div class="row" data-scroll data-scroll-speed="2.4">
            @php
                $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                ); 
                $post = new WP_Query( $args );
                if ( $post->have_posts() ):
                while ( $post->have_posts() ) : $post->the_post(); 
            @endphp
            <div class="col-xl-4" >
                <div class="a-post-image-container">
                    <a href="{!! the_permalink() !!}" class="landing-blog-a">
                        <div class="landing-blog-container">
                            <p class="landing-blog-p">
                                {!! the_title() !!}
                            </p>
                            <div style="background-image: url(' {!! get_the_post_thumbnail_url() !!} ')" class="landing-blog-img"> 
                            </div>
                        </div>  
                    </a>
                </div>         
            </div>
            @php
                endwhile;
                endif;
                wp_reset_postdata(); 
            @endphp            
        </div>
    </div>
</section>
@endsection
