import gsap from 'gsap'
import $ from 'jquery'

import Scroll from '../utils/scroll'

const pageurl = document.querySelector('body').id

if(pageurl == 'xl-door'){
    const scroll = new Scroll()

    // gsap.ticker.add(() => { 
    //     gsap.to('h2', {
    //       y: -scroll.screenPosition/2,
    //       autoAlpha: scroll.screenPosition/500,
    //       ease: 'power2.out',
    //       duration: 1.6
    //     })
    // })

    gsap.ticker.add(() => { 
        if(scroll.screenPosition > 150){
            $('header').addClass('active')
        } else {
            $('header').removeClass('active')
        }
    })

    $('.button-scroll').on('click', function(){
       
        const scroll = $(this).data('scroll')
        const position = $('#' + scroll).offset().top

        $("body,html").animate(
        {
            scrollTop : position
        }, 600);
    })
}