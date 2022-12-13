
export default {
  init() {

    /* HEADER MOBILE */

    let headerHead = document.querySelector('header')
    let mobileheader = document.getElementById('mobile-header')
    let mobilehamburger = document.getElementById('mobilehamburger')
    let desktophamburger = document.getElementById('desktophamburger')

    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
     

      if(mobileheader.classList.contains('visible')) {

        mobileheader.classList.remove('visible')
        mobilehamburger.classList.remove('is-active');
        desktophamburger.classList.remove('is-active');
       
        headerHead.style.pointerEvents = 'all';
      }
      else {
        mobileheader.classList.add('visible')
        mobilehamburger.classList.add('is-active');
        desktophamburger.classList.remove('is-active');
        headerHead.style.pointerEvents = 'none';
      }
    });

    /* HEADER MOBILE END */
    /* FOOTER ANIMATION EYE */

    let area = document.querySelector('#footer-1');

    area.addEventListener('mousemove', (e) => {
      let eyes = document.querySelectorAll('.eye-container');
      for (var i = 0; i < eyes.length; i++) {
        let mouseX = (eyes[i].getBoundingClientRect().left); 
        let mouseY = (eyes[i].getBoundingClientRect().top);
        let radianDegrees = Math.atan2(e.pageX - mouseX, e.pageY - mouseY);
        let rotationDegrees = (radianDegrees * (180/ Math.PI) * -1) + 180;
        eyes[i].style.transform = `rotate(${rotationDegrees}deg)`;
      }
    });

    /* FOOTER EYE END */

  },
  finalize() {
     // JavaScript to be fired on all pages, after page specific JS is fired
  },
};