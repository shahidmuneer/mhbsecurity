export class home{
    
    constructor(){
   
    }
    init_carousal(item){
      item.slick( { dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
    autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        dots: true,
        autoplay: true,
  autoplaySpeed: 2000,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
          autoplay: true,
  autoplaySpeed: 2000,
      }
    }
    ,
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
          autoplay: true,
  autoplaySpeed: 2000,
      }
    }
   
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
    }
    
};