$('#testimonial-slider').owlCarousel({
  items:4,
  itemsDesktop:[1000,3],
  itemsDesktopSmall:[979,2],
  itemsTablet:[768,2],
  itemsMobile:[ 650,1],
  loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    },
  pagination:true,
  autoPlay:true,
  
  
});