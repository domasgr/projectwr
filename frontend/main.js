$(document).ready(function(){
	//variables which is needed from multiple funcstions
	var scrollLink = $('.scroll');
	var titleOffset = $('header').offset().top-120;
	var cardOffset = $('.card').offset().top;
	var aboutOffset = $('.about-section-slide').offset().top;
	//navigation scrolling
	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});


	// Active lane switching
	 $(window).scroll(function() {
	 	var scrollbarLocation = $(this).scrollTop();

	 	var homeOffset = $('#first').offset().top;
	 	var projectsOffset = $('#second').offset().top-60;
	 	var aboutOffset = $('#third').offset().top-60;
	 	var contactOffset = $('#fourth').offset().top-60;

	 		if( scrollbarLocation >= homeOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(0).addClass('active');
	 		} 
	 		if( scrollbarLocation >= projectsOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(1).addClass('active');
	 		}
	 		if( scrollbarLocation >= aboutOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(2).addClass('active');
	 		}
	 		if( scrollbarLocation >= contactOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(3).addClass('active');
	 		}
	});
});
$(document).ready(function () {
	if($(window).width()>1000) {
        var titleOffset = $('header').offset().top - 120;
        var cardOffset = $('.card').offset().top;
        var aboutOffset = $('.about-section-slide').offset().top;

        // header toggle fading on exit/entry
        $(window).scroll(function () {
            var scrollbarLocation = $(this).scrollTop();

            if (scrollbarLocation > titleOffset) {
                $('header').fadeOut(350);
            } else if (scrollbarLocation < titleOffset) {
                $('header').fadeIn(600);
            }
        });

        // header animation after using navbar
        $('li a').eq(1).click(function () {
            $('header').animate({
                top: "+=200",
                opacity: 0
            }, 650, function () {
                $('header').offset({top: titleOffset + 120})
                $('header').css("opacity", "100");
            });
        });
        // cards animation
        $('li a').eq(2).click(function () {
            $('.card').animate({
                top: "+=200",
                opacity: 0.3
            }, 800, function () {
                $('.card').offset({top: cardOffset})
                $('.card').css("opacity", "100");
            });
        });
        // about section animation
        $('li a').eq(3).click(function () {
            $('.about-section-slide').animate({
                top: "+=300",
                opacity: 0.3
            }, 800, function () {
                $('.about-section-slide').offset({top: aboutOffset});
                $('.about-section-slide').css("opacity", "100");
            });
        });
    }
    });

// $(document).ready(function () {
//     $("a.iframe").fancybox({
//         'width': 800,
//         'height': 500,
//         'transitionIn': 'elastic',
//         'transitionOut': 'elastic',
//         'type': 'iframe'
//     });
// });




// COMING SOON FUNCTION FOR SMOOTH MOUSE WHEEL
// $(window).on('wheel', function(event){
// 	if(event.originalEvent.deltaY < 0){
// 		console.log("up");
// 	} else{
// 		event.preventDefault();
// 		$('body,html').animate({
// 			scrollTop: $('#second').offset().top
// 		}, 1000);
// 	}
// })




