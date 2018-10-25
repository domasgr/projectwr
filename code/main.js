
// *******************navbar tracker*****************

var nav = document.querySelectorAll("nav ul li");

for(i=0; i<nav.length; i++){
	nav[i].addEventListener("click", function(){
		for(i=0; i<nav.length; i++){
			nav[i].classList.remove("active");
		}
		this.classList.add("active");
	})
}
//*****************************************************
