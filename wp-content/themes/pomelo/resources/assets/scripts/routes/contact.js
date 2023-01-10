import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
export default {
  init() { 

    gsap.registerPlugin(ScrollTrigger);

    const scrollNav = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      getSpeed: true,
      getDirection: true,
      multiplier: 1.0,
      // reloadOnContextChange:true, 
    });

    scrollNav.on('scroll', () => {
      ScrollTrigger.update();
     });

    // tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things

    ScrollTrigger.scrollerProxy('[data-scroll-container]', {
      scrollTop(value) {
        return arguments.length ? scrollNav.scrollTo(value, 0, 0) : scrollNav.scroll.instance.scroll.y;
      }, // we don't have to define a scrollLeft because we're only scrolling vertically.
      getBoundingClientRect() {
        return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
      },
      // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
      pinType: document.querySelector('[data-scroll-container]').style.transform ? 'transform' : 'fixed',
    });

    ScrollTrigger.create({
      scroller: '[data-scroll-container]',
      markers: false,
    });
 

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

    /* contact-slide frol right */
    const tl = gsap.timeline();
    
    ScrollTrigger.matchMedia({

      // desktop
      '(min-width: 1021px)': function() {

        tl.set('#contact-2',{
          translateX: '100%',
        }
        )
    
        .to('#contact-2', {
          scrollTrigger: {
            trigger: '#contact-2',
            scrub: 1,
            start: 'top top',
            end: 'bottom +=150',
          },
          translateX: '0%',
          // translateY: '-100%',
        })
      }, 
      
      // mobile
      '(max-width: 1020px)': function() {

      }, 
      
      // all 
      '(min-width: 620px)': function(){

      },
      'all': function() {
      },
    });

    /* END CONTACT SECOND SECTION TRANSFORM */
  
    ScrollTrigger.addEventListener( 'refresh', () => scrollNav.update() );
    ScrollTrigger.refresh();
  
  },
};
