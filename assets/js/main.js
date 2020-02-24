/** =======================================================================================
    Owl Carousel javascript and properties defined
========================================================================================= */

$(document).ready(function() {
    // First owl carousel - for people section
    let owl = $("#owl-people");

    owl.owlCarousel({
        loop: false,
        rewind: true,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        autoplay: false,
        autoplayHoverPause: false,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items : 1,
            },

            769: {
                items : 2,
            },
            1025: {
                items : 3
            },
            1350: {
                items : 3.5,
            }
        }
    });

    $('.people-next').click(function() {
        owl.trigger('next.owl.carousel', [500]);
    })
    $('.people-prev').click(function() {
        owl.trigger('prev.owl.carousel', [500]);
    })


    // Second owl carousel - for gallery section
    $("#owl-gallery").owlCarousel({
        loop: true,
        autoplay: false,
        autoplayHoverPause: false,
        dots: false,
        nav: false,
        video: true,
        margin:10,
        responsive: {
            0: {
                items : 1,
            },
            1025: {
                items : 1,
                stagePadding: 250,
                center: true
            },
            1350: {
                items : 1,
                stagePadding: 350,
                center: true
            },
            1600: {
                items : 1,
                stagePadding: 450,
                center: true
            }
        }
    });

    $('.gallery-next').click(function() {
        $('#owl-gallery').trigger('next.owl.carousel', [500]);
    })
    $('.gallery-prev').click(function() {
        $('#owl-gallery').trigger('prev.owl.carousel', [500]);
    })
   
});

/** ==================================================================================================
 Hide / show the master navigation menu only after scrolling up - will need jquery library as written
==================================================================================================== */   

const nav = document.querySelector("#masthead");
const visible = "is-visible";
const hidden = "is-hidden";
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll == 0) {
    nav.classList.remove(hidden);
    return;
    }
    
    if (currentScroll > lastScroll && !nav.classList.contains(hidden)) {
    // down
    nav.classList.remove(visible);
    nav.classList.add(hidden);

    } else if (currentScroll < lastScroll && nav.classList.contains(hidden)) {
    // up
    nav.classList.remove(hidden);
    nav.classList.add(visible);

    const contentStart = document.getElementById("content");
    const distanceToContent = contentStart.offsetTop;
    if(document.getElementById('scroll')) {
        document.getElementById('scroll').style.opacity = 0;
    }

    }
    lastScroll = currentScroll;
});

/** ==================================================================================================
 Enable smooth scrolling for anchor link navigation
==================================================================================================== */   


$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                scrollTop: target.offset().top
                }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
            });
        }
    }
});


/** ==================================================================================================
                            Bio pop-up and blur main
==================================================================================================== */ 


const main = document.querySelector('.main');
const bioOverlay = document.querySelector('.bio-overlay');
const bios = document.querySelector('.bio-container').children;
const openBioButtons = document.querySelectorAll('.view-bio');
const closeBioButtons = document.querySelectorAll('.close-bio');

// whenever a bio button is clicked, blur background, overlay and no scroll should all toggle
function bioButtonClick() {
    main.classList.toggle('blur-filter');
    bioOverlay.classList.toggle('active')
    document.body.classList.toggle('no-scroll');
}

// give all buttons on the home page a click function and find index of target child we want to display


for (let i = 0; i < openBioButtons.length; i++) {
    openBioButtons[i].addEventListener("click", (e) => {
        bioButtonClick();
        bios[i].classList.add('active');
        nav.classList.remove(visible);
        nav.classList.add(hidden);
    })
}


// give all buttons on the bio overlay a click function to remove active class from active profile and hide overlay
for (let i = 0; i < closeBioButtons.length; i++) {
    closeBioButtons[i].addEventListener("click", (e) => {
        const person = openBioButtons[i].id;
        bioButtonClick(person);
        const openProfile = document.querySelector('.bio.active');
        openProfile.classList.remove('active');
        nav.classList.remove(hidden);
        nav.classList.add(visible);
    })
}


/** ==================================================================================================
                            Preloader
==================================================================================================== */ 

document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        return;
    } else if (state == 'complete') {
        setTimeout(function(){
            $('body').addClass('loaded');
        },1000);
    }
}

/** ==================================================================================================
                            fade-in animation
==================================================================================================== */ 
document.addEventListener("DOMContentLoaded", function() {

    const faders = document.querySelectorAll('.fade-in');

    if ("IntersectionObserver" in window) {

        const appearOptions = {
            threshold: 0,
            rootMargin: "0px 0px 60px 0px"
        };

        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if(!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnScroll.unobserve(entry.target);
                }
            })
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });


        const sliders = document.querySelectorAll(".slide-up");

        sliders.forEach(slider => {
            appearOnScroll.observe(slider);
        });

    } else {
        while(faders.length > 0) {
            faders[0].classList.add('appear');
        }
    }

})

/** =======================================================================================
    Fade hero text and change position of dude on scroll
========================================================================================= */

document.addEventListener('scroll', function() {
    let currScrollPos2 = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    if (currScrollPos2 > 1) {
        document.querySelector('.hero-text').style.opacity = -currScrollPos2 / 350 + 1.1;
    }
    }
);

function background_image_parallax($object, multiplier){
    multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.15;
    multiplier = 1 - multiplier;

    $object.css({"background-attatchment" : "fixed"});
        $(window).scroll(function(){
        let from_top = $(document).scrollTop(),
        translateY = '0' +(multiplier * from_top).toFixed(2);
        translateX = 0;
        $object.css({'transform': 'translate3d(' + translateX +'px, ' +   translateY + 'px, 0)' }); 
    });
};

background_image_parallax($(".dude"));

background_image_parallax($(".hero-text"), .4);