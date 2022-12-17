<?php $__env->startSection('content'); ?>
    <section id="contact-1" data-scroll-section >
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
                    <div class="col-xl-9 contact-form-container" >
                        
                        <?php
                            echo do_shortcode('[contact-form-7 id="48" title="Contact form"]');
                        ?>
                    </div>
                    <div class="col-xl-3 brief-section">
                        <h2>Brief</h2>
                        <h3>Wiesz po co tu przyszedłeś i chcesz otrzymać szczegółową wycenę? Wypełnij brief a my się odezwiemy!</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">Strona www</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Sklep internetowy</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">identyfikacja wizualna</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Film i animacja</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Logotyp</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Copywriting</a>
                            </li>
                        </ul>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>