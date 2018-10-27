$(document).ready(function(){
	var scrollLink = $('.scroll');
	var titleOffset = $('header').offset().top-120;
	
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
	 			$('li a').eq(3).addClass('active');
	 		} 
	 		if( scrollbarLocation >= projectsOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(2).addClass('active');
	 		}
	 		if( scrollbarLocation >= aboutOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(1).addClass('active');
	 		}
	 		if( scrollbarLocation >= contactOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(0).addClass('active');
	 		}

	 	
	 		// if(scrollbarLocation <= titleOffset){
	 		// 	$('header').fadeIn();
	 		// }
    // var scrollbarLocation = $(this).scrollTop();
    
    // scrollLink.each(function() {
      
    //   var sectionOffset = $(this.hash).offset().top;
      
    //   if ( sectionOffset <= scrollbarLocation ) {
    //   	console.log("now");
    //   	$('nav ul li').removeClass('active');
    //   	// console.log($('nav ul li').removeClass('active'));
    //     $(this).parent().addClass('active');
    //     // console.log($(this).parent().addClass('active'));
        
    //   }
    // })
    
  });

	 $(window).scroll(function(){
	 var scrollbarLocation = $(this).scrollTop();
	 // var titleOffset = $('header').offset().top-100;
	 		if( scrollbarLocation > titleOffset){
	 			$('header').fadeOut(300);
	 		} else if( scrollbarLocation < titleOffset){
	 			$('header').fadeIn();
	 		}


  });
});





// *******************navbar tracker*****************
// var nav = document.querySelectorAll("nav ul li");

// nav[3].classList.add("active"); // On the page opening, we show that we are on home

// for(i=0; i<nav.length; i++){
// 	nav[i].addEventListener("click", function(){
// 		for(i=0; i<nav.length; i++){
// 			nav[i].classList.remove("active");
// 		}
// 		this.classList.add("active");
// 	});
// }
//*****************************************************
