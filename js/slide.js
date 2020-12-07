$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoWidth:true,
        autoHeight:true,
        margin: 10,
        responsiveClass: true,
        nav:false,
        dots:false,
        responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },

        768: {
            items: 2,
            nav: false
        
        }
    }
    })
    })
