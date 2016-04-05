jQuery(document).ready(function($){
  
  
  	$("#email_signup").submit(function(e){
		e.preventDefault();

		var fname =  $("input#FirstName").val();
		var lname =  $("input#LastName").val();
		var zip =  $("input#ZipCode").val();
		var	email = $("input#Email").val();
 
		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: {
				email:email,
				fname:fname,
				lname:lname,
				zip:zip,
				action:'email_signup'
			},
			success: function(response) {
			 var test = response;
			  if(test.indexOf('wild')>-1){
			    $('#thank-you').hide();
			     $('#thank-you').html(response);
			    $("#email_signup").fadeOut().next('#thank-you').delay(500).fadeIn();
			   
			  }
			  else{
			    $('#thank-you').hide();
			    $('#thank-you').html(response);
  			  $('#thank-you').fadeIn();
  		  }
			}
 
		});
	});
  
  $('#bottom-carousel').waitForImages(function() {
     jQuery("#bottom-carousel").smoothDivScroll({
      hotSpotScrolling: false,
      autoScrollingMode: "always",
      autoScrollingDirection: "endlessLoopRight",
			touchScrolling: true
    });

     $("#bottom-carousel").bind("mouseover", function(){
      $("#bottom-carousel").smoothDivScroll("stopAutoScrolling");
  });
  });


  
 

  //vimeo video controls
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
    $('.video-social').fadeOut();
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


    
    var width = $( window ).width();
    if(width > 600){
      jQuery(document).scroll(function(){
        if(jQuery(this).scrollTop() > 5) {
          jQuery('.interior-header').show();
          jQuery('.interior-header').addClass('slideInDown');
          jQuery('.interior-header').removeClass('slideOutUp');
        } else {
         // jQuery('.interior-header').removeClass('slideInDown');
         // jQuery('.interior-header').addClass('slideOutUp');
        }
      });
    }
  
    $('#menu-toggle').click(function(){
        jQuery('.interior-header').show();
        jQuery('.interior-header').addClass('slideInDown');
        jQuery('.interior-header').removeClass('slideOutUp');
        $('#menu-toggle').hide();
        $('#menu-close').show();
    });
    
     $('#menu-close').click(function(){
        jQuery('.interior-header').removeClass('slideInDown');
        jQuery('.interior-header').addClass('slideOutUp');
        $('#menu-close').hide();
        $('#menu-toggle').show();
    });
    
    
  

  var iframe = document.getElementById('video');

  // $f == Froogaloop
  var player = $f(iframe);
  
  var playButton = document.getElementById("home-play-btn");
  playButton.addEventListener("click", function() {
    player.api("play");
  });
  
  var playButtonSoc = document.getElementById("home-play-btn-soc");
  playButtonSoc.addEventListener("click", function() {
    $('.video-social').fadeOut();
    player.api("play");
  });
 
    // When the player is ready/loaded, add a finish event listener
    player.addEvent('ready', function() {
        //Adds an event 'finish' that executes a function 'onFinish' when the video has ended.
        player.addEvent('finish', onFinish);
    });

    //Define the onFinish function that will be called
    function onFinish(id) {
         $('.video-social').fadeIn();
    }
 

});


