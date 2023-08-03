$(function(){
  
$('#J_slide').slick({
    slide: '',
    centerMode: true,
    centerPadding:'20px',
    slidesToShow: 2,
    slideToScroll: 1,
    arrows: false,
    draggable: true,
    dots: false,
    pauseOnHover: true,
    autoplay : true,
    infinite: true,
    responsive : [
      {
        breakpoint: 500,
        settings: {
          centerPadding:'70px',
          slidesToShow: 1,
          slideToScroll: 1,
        }
      }
    ]
  } );


  $(document).ready(function(){
    $("#J_slider_all").slick({
      slidesToShow:1,
      slideToScroll:1,
      fade: true,
      arrows:true,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      });    
    });
  });
