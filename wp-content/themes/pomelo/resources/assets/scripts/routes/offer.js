import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/dist/ScrollTrigger';
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

    const offerTimelineFirst = gsap.timeline({ delay:1, ease: 'power2.out' });
   
    offerTimelineFirst.from('.element-scale', {
      scrollTrigger: {
        trigger: '.container-content-offer-scale',
        start: 'top center',
        end: () => innerHeight * 3.8,
        scrub: 1,
      },
      scale: 3.3333,
      ease: 'none',
    })
    .to('.element-scale-heading',{
      scrollTrigger: {
        trigger: '.container-content-offer-scale',
        start: 'top -=200%',
        end: () => innerHeight * 3.8,
        scrub: 1,
      },
      rotate: '-90dag',
      translateX: '-100%',
    })
    .from('.container-offer-scale-text',{
      scrollTrigger:{
        trigger: '.container-offer-scale-text',
        start: 'top -=150%',
        end: () => innerHeight * 3.8,
        scrub: 1,
      },
      translateX: '200%',
      opacity: 0,
    })

    .from('.offer-webpage-transform', {
      scrollTrigger:{
        trigger: '.offer-webpage-transform',
        scrub: 1,
        start: 'top bottom',
        end: 'top 20%',
      },
      opacity: 0, 
    });

    const socialScales = document.querySelectorAll('.scale-social');
    socialScales.forEach(socialScale =>{
      gsap.from(socialScale, {
        scrollTrigger:{
          // trigger: '.offer-sticky-socialmedia',
          trigger: '#offer-archive-4',
          scrub: true,
          start: 'top bottom',
          // end: () => innerHeight * 2.8,
          end: 'bottom +=110%', 
        },
        scale: 0.2, 
      })
    })
    
    ScrollTrigger.addEventListener( 'refresh', () => scrollNav.update() );
    ScrollTrigger.refresh();
  },
};

