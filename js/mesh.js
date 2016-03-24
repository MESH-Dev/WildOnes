jQuery(document).ready(function($){


  $(".home-play-btn").click(function(e) {
    e.preventDefault();
    e.stopPropagation();

    $('.vimeo').fadeIn(1000, function() {
      $('.vimeo iframe').fadeIn("slow");
    });
  });

  $('.vimeo').click(function(e) {
    e.stopPropagation();
  });

  $(document).click(function() {
    $('.vimeo').fadeOut();
  });

    //Function to animate slider captions
    function doAnimations( elems ) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
        $myCarousel.carousel('pause');
    }

    //Variables on page load
    var $myCarousel = $('#home-carousel'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel({interval: false, pause: "hover"});

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Pause carousel
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });


    jQuery("#bottom-carousel").smoothDivScroll({
      hotSpotScrolling: false,
			touchScrolling: true
    });

    jQuery(document).scroll(function(){
      if(jQuery(this).scrollTop() > 5) {
        jQuery('.interior-header').show();
        jQuery('.interior-header').addClass('slideInDown');
        jQuery('.interior-header').removeClass('slideOutUp');
      } else {
        jQuery('.interior-header').removeClass('slideInDown');
        jQuery('.interior-header').addClass('slideOutUp');
      }
    });



});
