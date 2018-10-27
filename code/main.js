$(document).ready(function(){
	var scrollLink = $('.scroll');

	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top
		}, 150);
	});
	// Active lane switching
	 // $(window).scroll(function() {
  //   var scrollbarLocation = $(this).scrollTop();
    
  //   scrollLink.each(function() {
      
  //     var sectionOffset = $(this.hash).offset().top;
      
  //     if ( sectionOffset <= scrollbarLocation ) {
  //     	console.log("now");
  //     	$('nav ul li').removeClass('active');
  //     	// console.log($('nav ul li').removeClass('active'));
  //       $(this).parent().addClass('active');
  //       // console.log($(this).parent().addClass('active'));
        
  //     }
  //   })
    
  // })
  
});




// *******************navbar tracker*****************
var nav = document.querySelectorAll("nav ul li");

nav[3].classList.add("active"); // On the page opening, we show that we are on home

for(i=0; i<nav.length; i++){
	nav[i].addEventListener("click", function(){
		for(i=0; i<nav.length; i++){
			nav[i].classList.remove("active");
		}
		this.classList.add("active");
	});
}
//*****************************************************
