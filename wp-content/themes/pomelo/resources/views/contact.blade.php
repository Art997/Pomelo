{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    <section id="contact-1" data-scroll-section>
        <div class="container-fluid contact-sticky" data-scroll data-scroll-sticky data-scroll-target="#contact-1">
            <div class="row">
                <div class="col-xl-10" >
                    <h2 class="contact-first-text"  >
                        <span data-scroll  >Kontakt</span> 
                        <span data-scroll  >z</span> 
                        <span data-scroll >nami</span>
                        <br>
                        <span data-scroll  >to </span>
                        <span data-scroll  >pierwszy</span> 
                        <span data-scroll   >krok</span> 
                        <span data-scroll  >do</span> 
                        <span class="span-contact-last-child" data-scroll >sukcesu</span> 
                 </h2>
                </div>
                <div class="col-xl-2" >
                    <h2 class="contact-vertical-text" >Kontakt kontakt</h2>
                    <h2 class="contact-vertical-text" >Kontakt kontakt</h2>
                    <h2 class="contact-vertical-text" >Kontakt kontakt</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="container-contact-2" data-scroll-section >
        <section id="contact-2" data-scroll-direction="horizontal"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 contact-form-container" >
                        
                        @php
                            echo do_shortcode('[contact-form-7 id="48" title="Contact form"]');
                        @endphp
                    </div>
                    <div class="col-lg-3 brief-section">
                        <h2>Brief</h2>
                        <h3>Jesteś zdecydowany na współpracę? Od razu opowiedz nam o swoim projekcie.</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">Strona www</a><br>
                                <span>(strona www, sklep internetowy, droppshiping)</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">Identyfikacja wizualna</a><br>
                                <span>
                                    (logo, kreacja, DTP, księga znaku)
                                </span>
                            </li>
                            <li>
                                <a href="#" target="_blank">Reklama do druku</a><br>
                                <span>(wizytówki, banery, ulotki, plakaty, rollupy)</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">Fotografia i film</a><br>
                                <span>(zdj. biznesowe, biura, produktowe, nieruchomości, filmy reklamowe, relacje, montaż, edycja)</span>
                            </li>
                        </ul>
                        <h3>Wypełnienie briefu zajmie Ci nie więcej niż 10 minut, po wypełnieniu otrzymasz od razu na maila wycenę swojego projektu.</h3>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="contact-3" data-scroll-section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6" >
                    <h2 data-scroll data-scroll-speed="2.4">Artur</h2>
                    <h4 data-scroll data-scroll-speed="2.1">Strony i sklepy internetowe</h4>
                    <h2 data-scroll data-scroll-speed="1.7">
                        <a href="tel:">
                            123 123 123
                            </a>
                        </h2>
                </div>
                <div class="col-xl-6">
                    <h2  data-scroll data-scroll-speed="1.8">Karol</h2>
                    <h4  data-scroll data-scroll-speed="2.4">Grafika, video, copywriting</h4>
                    <h2  data-scroll data-scroll-speed="2.9">
                        <a href="tel:"> 123 123 123</a>
                       </h2>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
