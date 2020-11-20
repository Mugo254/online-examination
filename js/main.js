// jQuery(document).ready(function($){
// 	//open-close submenu on mobile
// 	$('.cd-main-nav').on('click', function(event){
// 		if($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
// 	});
// });

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click',function(){
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click',function(){
	container.classList.remove("right-panel-active");
});
