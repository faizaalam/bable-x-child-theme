jQuery(document).ready(function($) {

    // 1s- Header color change in blog page

    var MQL = 1170;

    var headerHeight = $('.entry-featured.post').height();
    $(window).on('scroll', {
            previousTop: 0
        },
        function() {
            var currentTop = $(window).scrollTop();
            if (currentTop > 100) {
                $('.x-navbar-inner').addClass('darkblue');
            } else {
                $('.x-navbar-inner').removeClass('darkblue');
            }

        }
    );

    // 1e- Header color change in blog page

    // 2s- Open/Close Primary Menu
    $('.cd-primary-nav-trigger').on('click', function() {
        $('.cd-menu-icon').toggleClass('is-clicked');
        $('.cd-header').toggleClass('menu-is-open');
        $('#menu-bable').toggleClass('hidden');


        //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
        if ($('.cd-primary-nav').hasClass('is-visible')) {
            $('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                $('body').removeClass('overflow-hidden');
            });
        } else {
            $('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                $('body').addClass('overflow-hidden');
            });
        }
    });

    // 2e- Open/Close Primary Menu

    // 3s- Home page post sharing hover effect.

    $('img.share-img').mouseenter(function() {
        console.log('Hover registered.')
        $(this).hide('fast');
        $(this).next('.inner.sharing').show('easeIn').delay(2000).fadeOut(function() {
            $('img.share-img').show();
        });
        //$(this).next().delay(2000).hide()
    });
    // },function(){
    // 	//$(this).show('slow');
    // 	$(this).next('div.inner.sharing').hide('easeOut');
    // 	$(this).show('slow');				
    // });
	
	// 3e- Home page post sharing hover effect

	// 4s- Mobile Categories Menu Click Function

    $('#mobile-menu-button').click(function() {
        $("#hidden-div").slideToggle('slow');
        return false;
    });
    
    
    // 4e- Mobile Categories Menu Click Function

    // 5s- Subcsription Button in Desktop

    $(".Subscribe-Menu-Button").click(function() {
                
        $('.wpmchimpa-overlay-bg').fadeIn( 500, function() {
            
        });
    });   
  
 
    // 5e- Subcsription Button in Desktop


    $( '.outer.sharing a' )
  .mouseenter(function() {
    $( this ).siblings().fadeTo(400, '0.2');
    $(this).fadeTo(100, '1');   
  })
  .mouseleave(function() {
    $( this ).siblings().fadeTo( 0, '1' );
  });
  
});


    
    



