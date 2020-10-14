/* main js */

const hamburger = document.querySelector('.menu-wrapper');
const navigation = document.querySelector('.navigation');
const hamburgerMenu = document.querySelector('.hamburger-menu');

hamburger.addEventListener('click', () => {

	navigation.classList.toggle('open');
	hamburgerMenu.classList.toggle('animate');

});

