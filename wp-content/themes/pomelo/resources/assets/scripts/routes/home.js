import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/dist/ScrollTrigger';
export default {
  init() {
    /* BALL ANIMATION */

    var scene = {
      sphereRadius: 150,
      dots: 1200,
      dotSize: 1.2,
      speed: 3,
      inclination: -0,
      zDist: 700,
      focal: 700,
    };
    
    var c = document.getElementById('c'),
      ctx = c.getContext('2d');
    
    function resize()
    {
      c.width = c.offsetWidth;
      c.height = c.offsetHeight;
      ctx.fillStyle = '#000';
      ctx.globalCompositeOperation = 'lighter';
    }
    window.addEventListener('resize', resize);
    resize();
    
    var angleOffset = 0;
    var angleOffsetGoal = 0;
    c.addEventListener('mousemove', function(e) { angleOffsetGoal = Math.PI * (e.clientX / c.width - .5); });
    
    var baseDots = [];
    // Creating points on the sphere (used http://www.mcadcentral.com/solidworks-modeling/25421-even-distributi-n-points-n-sphere.html#post121272)
    (function()
    {
      var inc = Math.PI * (3 - Math.sqrt(5));
      var off = 2 / scene.dots;
      for(var i = 0; i < scene.dots; i++)
      {
        var y = (i + .5) * off - 1;
        var r = Math.sqrt(1 - y*y);
        var phi = i * inc;
        baseDots.push([
          scene.sphereRadius * r * Math.cos(phi),
          scene.sphereRadius * y,
          scene.sphereRadius * r * Math.sin(phi),
        ]);
      }
    })();
    
    function dup(p) { return [p[0], p[1], p[2]]; }
    function rotateX(p, a)
    {
      var d = Math.sqrt(p[2] * p[2] + p[1] * p[1]),
        na = Math.atan2(p[1], p[2]) + a;
      return [p[0], d * Math.sin(na), d * Math.cos(na)];
    }
    function rotateY(p, a)
    {
      var d = Math.sqrt(p[2] * p[2] + p[0] * p[0]),
        na = Math.atan2(p[2], p[0]) + a;
      return [d * Math.cos(na), p[1], d * Math.sin(na)];
    }
    function projection(p, focal) { return [focal * p[0] / p[2], focal * p[1] / p[2], p[2]]; }
    
    function loop()
    {
      requestAnimationFrame(loop);
      angleOffset += (angleOffsetGoal - angleOffset) * .1;
      ctx.clearRect(0,0,c.width,c.height);
      var m = [c.width *.5, c.height * .5];
      var time = Date.now() * 0.0005 * scene.speed;
      var offset = scene.sphereRadius * (Math.sin(time) + 1);
      ctx.beginPath();
      for(var i = 0, l = baseDots.length; i < l; i++)
      {
        var p = dup(baseDots[i]);
        p[1] += offset;
        if(p[1] > scene.sphereRadius) p[1] = scene.sphereRadius;
        p = rotateX(rotateY(p, angleOffset), scene.inclination);
        p[2] += scene.zDist;
        var size = scene.focal * scene.dotSize / p[2];
        p = projection(p, scene.focal);
        ctx.moveTo(m[0] + p[0], m[1] + p[1]);
        ctx.arc(m[0] + p[0], m[1] + p[1], size, 0, 2 * Math.PI);
      }
      ctx.fill();
    }
    requestAnimationFrame(loop);

    /* END BALL ANIMATION*/

 /* SCROLL TRIGGER, GSAP, LOCO SCROLL REGISTER FOR HOME PAGE */

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

    /* END REGISTER */

    /* ALL PAGE NAVBAR FIXED */

    const header = document.querySelector('#site-header');
    const headerHolder = document.querySelector('.header-holder');
    const headerHeightTop = document.querySelector('.container-logo-hidden-scroll');
    
    const whenColourStart = document.querySelector('#scroll-home-2');
    let heightWhenColourStart = whenColourStart.getBoundingClientRect().top;

    
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

    /* END ALL PAGE NAVBAR FIXED */

    /* HOME COLOR TEXT CHANGE ON SCROLL*/

      const textChangeColourLoop = document.querySelectorAll('#home-3 span');
      
        if(instance.direction === 'down'){
          if(instance.scroll.y >= heightWhenColourStart ){

            for(let textSpanLoop = 0; textSpanLoop < textChangeColourLoop.length; textSpanLoop++){
              textChangeColourLoop[0].classList.add('colour')
              if(instance.scroll.y >= heightWhenColourStart + 70){
                textChangeColourLoop[0].classList.remove('colour')
                textChangeColourLoop[1].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 140){
                textChangeColourLoop[1].classList.remove('colour')
                textChangeColourLoop[2].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 210){
                textChangeColourLoop[2].classList.remove('colour')
                textChangeColourLoop[3].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 280){
                textChangeColourLoop[3].classList.remove('colour')
                textChangeColourLoop[4].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 350){
                textChangeColourLoop[4].classList.remove('colour')
                textChangeColourLoop[5].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 420){
                textChangeColourLoop[5].classList.remove('colour')
                textChangeColourLoop[6].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 490){
                textChangeColourLoop[6].classList.remove('colour')
                textChangeColourLoop[7].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 560){
                textChangeColourLoop[7].classList.remove('colour')
                textChangeColourLoop[8].classList.add('colour')
              }
              if(instance.scroll.y >= heightWhenColourStart + 630){
                textChangeColourLoop[8].classList.remove('colour')
                textChangeColourLoop[9].classList.add('colour')
              }
            }
          }
        }

        if(instance.direction === 'up'){
          if(instance.scroll.y <= heightWhenColourStart){

            for(let textSpanLoopBack = 0; textSpanLoopBack < textChangeColourLoop.length; textSpanLoopBack++){
              textChangeColourLoop[textSpanLoopBack].classList.remove('colour')
            }
          }
        }
    });

    /* END HOME COLOR TEXT CHANGE ON SCROLL*/
 
    /* HOME MEDIA SECTION TRANSFORM FROM BOTTOM*/

      gsap.from('#home-7', {
        translateY: '-100%',
      }) 
      gsap.to('#home-7', {
        scrollTrigger: {
          trigger: '#home-7',
          scrub: true,
          start: 'top bottom',
          end: 'bottom top',
        },
        translateY: '0%',
      })

      /* END HOME MEDIA SECTION TRANSFORM FROM BOTTOM*/

      /* REALIZATION TRANSFORM */

      gsap.from('.offer-1', {
        translateY: 0,
        rotate: 0,
      })
      gsap.to('.offer-1', {
        scrollTrigger: {
          trigger: '.offer-1',
          scrub: true,
          start: 'top bottom',
          end: 'bottom center',
        },
        translateY: '-50%',
        rotate: '30deg',
      })

      /* offer-2*/

      gsap.from('.offer-2', {
        translateY: 0,
        rotate: 0,
      })
      gsap.to('.offer-2', {
        scrollTrigger: {
          trigger: '.offer-2',
          scrub: true,
          start: 'top bottom',
          end: 'bottom center',
        },
        translateY: '-10%',
        rotate: '15deg',
      })

      /* offer-4*/

      gsap.from('.offer-4', {
        translateY: 0,
        rotate: 0,
      })
      gsap.to('.offer-4', {
        scrollTrigger: {
        trigger: '.offer-4',
        scrub: true,
        start: 'top bottom',
        end: 'bottom center',
      },
      translateY: '-10%',
      rotate: '-15deg',
      })

             /* offer-5*/

      gsap.from('.offer-5', {
        translateY: 0,
        rotate: 0,
      })
      gsap.to('.offer-5', {
        scrollTrigger: {
          trigger: '.offer-5',
          scrub: true,
          start: 'top bottom',
          end: 'bottom center',
        },
        translateY: '-50%',
        rotate: '-30deg',
      })
      /* overrlay-offer*/

      gsap.from('.overlay-hr', {
        borderRadius: 0,
      })
      gsap.to('.overlay-hr', {
        scrollTrigger: {
          trigger: '.overlay-hr',
          scrub: true,
          start: 'top bottom',
          end: 'bottom center',
        },
        borderRadius: '50%',
      })
      
    /* END REALIZATION TRANSFORM */

    /* END HOME */


  },

};
 