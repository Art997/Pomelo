import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/dist/ScrollTrigger';
import Splide from '@splidejs/splide';
export default {
  init() {
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.defaults({
      scroller: '[data-scroll-container]',
      markers: false,
    });
 
    const scrollNav = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      getSpeed: true,
      getDirection: true,
      // reloadOnContextChange:true, 
    });

    // Update scroll position
    scrollNav.on( 'scroll', ( instance ) => {
        ScrollTrigger.update();
        document.documentElement.setAttribute( 'data-scrolling', instance.direction );
    });

    // Scroll position for ScrollTrigger
    ScrollTrigger.scrollerProxy( '[data-scroll-container]', {
        scrollTop( value ) {
            return arguments.length ? scrollNav.scrollTo( value, 0, 0 ) : scrollNav.scroll.instance.scroll.y;
        },
        getBoundingClientRect() {
            return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
        },
        pinType: document.querySelector( '[data-scroll-container]' ).style.transform ? 'transform' : 'fixed',
    } );


    ScrollTrigger.addEventListener( 'refresh', () => scrollNav.update() );
    ScrollTrigger.refresh();


    const header = document.querySelector('#site-header');
    const headerHolder = document.querySelector('.header-holder');
    const headerHeightTop = document.querySelector('.container-logo-hidden-scroll');
       
    scrollNav.on('scroll',(instance)=>{

      let headerHeight = headerHeightTop.getBoundingClientRect().height;
        if(instance.direction === 'down' ){
          if(instance.scroll.y > headerHeight){
            header.classList.add('sticked');	    
            headerHolder.classList.add('height-sticked');	    
          }
        }
        if(instance.direction === 'up' ){
          if(instance.scroll.y <= headerHeight){
            header.classList.remove('sticked');
            headerHolder.classList.remove('height-sticked');	
          }
        } 
      });

    /* END ALL PAGE NAVBAR FIXED */

    /* ABOUT FIRST SECTION TRANSFORM */

    gsap.from('#about-first-transform', {
      translateY: '-80%',
    })
    gsap.to('#about-first-transform', {
      scrollTrigger: {
        trigger: '#about-first-transform',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top',
      },
      translateY: '0%',
    })

    /* END ABOUT FIRST SECTION TRANSFORM */
    /* ABOUT SECOND SECTION TRANSFORM */

    gsap.from('#about-second-transform', {
      translateY: '-100%',
    })
    gsap.to('#about-second-transform', {
      scrollTrigger: {
        trigger: '#about-second-transform',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top',
      },
      translateY: '0%',
    })

    gsap.from('#about-left-one', {
      translateX: '-100%',
    })
    gsap.to('#about-left-one', {
      scrollTrigger: {
        trigger: '#about-left-one',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top',
      },
      translateX: '0%',
    })

    gsap.from('#about-right-one', {
      translateX: '100%',
    })
    gsap.to('#about-right-one', {
      scrollTrigger: {
        trigger: '#about-right-one',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top ',
      },
      translateX: '0%',
    })

    gsap.from('#about-left-two', {
      translateX: '-100%',
    })
    gsap.to('#about-left-two', {
      scrollTrigger: {
        trigger: '#about-left-two',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top ',
      },
      translateX: '0%',
    })

    gsap.from('#about-right-two', {
      translateX: '100%',
    })
    gsap.to('#about-right-two', {
      scrollTrigger: {
        trigger: '#about-right-two',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top ',
      },
      translateX: '0%',
    })

    gsap.from('#about-left-three', {
      translateX: '-100%',
    })
    gsap.to('#about-left-three', {
      scrollTrigger: {
        trigger: '#about-left-three',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top ',
      },
      translateX: '0%',
    })

    gsap.from('#about-right-three', {
      translateX: '100%',
    })
    gsap.to('#about-right-three', {
      scrollTrigger: {
        trigger: '#about-right-three',
        scrub: true,
        start: 'top bottom',
        end: 'bottom top ',
      },
      translateX: '0%',
    })

    /* END ABOUT SECOND SECTION TRANSFORM */

    /* SLIDER ABOUT PAGE */

    var splideOneAbout = new Splide( '#splide-first-about',{
      type   : 'loop',
      arrows : false,
      pagination : true,
      speed: 900,
      perPage: 1,
      rewind : false,
      autoplay: true, 
      rewindSpeed : 800,
      waitForTransition : false,
      updateOnMove : true,
      trimSpace: false,
      classes: {
        pagination: 'splide__pagination pagination-about-container',
        page      : 'splide__pagination__page pagination-about-item',
      },
    });

    

    var splideTwoAbout = new Splide( '#splide-second-about',{
      type   : 'loop',
      arrows : false,
      pagination : false,
      speed: 900,
      perPage: 1,
      rewind : false,
      autoplay: true, 
      rewindSpeed : 800,
      waitForTransition : false,
      updateOnMove : true,
      trimSpace: false,
    });

    var splideThirdAbout = new Splide( '#splide-third-about',{
      type   : 'loop',
      arrows : false,
      pagination : false,
      speed: 900,
      perPage: 1,
      rewind : false,
      autoplay: true, 
      rewindSpeed : 800,
      waitForTransition : false,
      updateOnMove : true,
    });


    splideOneAbout.sync( splideTwoAbout);
    splideOneAbout.mount();
    splideTwoAbout.sync(splideThirdAbout)
    splideTwoAbout.mount();
    splideThirdAbout.mount();

    /* END SLIDER ABOUT PAGE */

    /* END ABOUT SECOND SECTION TRANSFORM */

  },
};
