// *******************navbar tracker*****************
var nav = document.querySelectorAll("nav ul li");

nav[3].classList.add("active"); // On the page opening, we show that we are on home

for(i=0; i<nav.length; i++){
	nav[i].addEventListener("click", function(){
		for(i=0; i<nav.length; i++){
			nav[i].classList.remove("active");
		}
		this.classList.add("active");
	})
}
//*****************************************************
