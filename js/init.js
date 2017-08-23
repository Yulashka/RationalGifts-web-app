(function($){
  $(function(){


      // Initialize collapse button
      $(".button-collapse").sideNav();
      // Initialize collapsible (uncomment the line below if you use the dropdown variation)
      //$('.collapsible').collapsible();

    // Detect touch screen and enable scrollbar if necessary
    function is_touch_device() {
      try {
        document.createEvent("TouchEvent");
        return true;
      } catch (e) {
        return false;
      }
    }

    if (is_touch_device()) {
      $('#nav-mobile').css({ overflow: 'auto'});
    }

    var offset = 220;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });
    
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    })



  }); // end of document ready
})(jQuery); // end of jQuery name space


  function contact()
    {
        jQuery("#contactProgress").openModal();

        var data = jQuery("#contactForm").serialize();
    
        jQuery.ajax(
        {
            type: "POST",
            url: "http://rationalgifts.com/email.php",
            data: data
        }).done(function( msg ) {
            jQuery("#contactProgress").closeModal();
            jQuery("#contactSuccess").openModal();
            jQuery('#contactForm')[0].reset();
        }).fail(function( jqXHR, textStatus ) {
            jQuery("#contactProgress").closeModal();
            jQuery("#contactFail").openModal();
            jQuery('#contactForm')[0].reset();
            console.log(jqXHR.status) 
        });
        return false;
    };