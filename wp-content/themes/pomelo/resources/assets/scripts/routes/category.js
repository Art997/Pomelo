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

    /* BLOG FILTER ACORDEON */

    let buttonFaqContainer = document.querySelectorAll('.container-block-faq button');
 
    function toggleAccordion() {
      const buttonFaq = this.getAttribute('aria-expanded');
      
      for (let i = 0; i < buttonFaqContainer.length; i++) {
        buttonFaqContainer[i].setAttribute('aria-expanded', 'false');
      }
      
      if (buttonFaq == 'false') {
        this.setAttribute('aria-expanded', 'true');
      }
    }
    
    buttonFaqContainer.forEach(buttonFaq => buttonFaq.addEventListener('click', toggleAccordion));
      
    /* END BLOG SECOND SECTION TRANSFORM */

  },
};
