var navbar = document.getElementById('navbar');
var link = document.getElementsByClassName('nav-link');
var nav1 = document.getElementById('nav1');
var nav2 = document.getElementById('nav2');
var nav3 = document.getElementById('nav3');
var nav4 = document.getElementById('nav4');

//
nav1.style.color = 'white';
nav2.style.color = 'white';
nav3.style.color = 'white';
nav4.style.color = 'white';
window.onscroll = function() {
    navbarWhite()
};

function navbarWhite() {
    if (document.documentElement.scrollTop > 50 || document.body.scrollTop > 50) {
        navbar.className = 'navbar navbar-white';
        nav1.style.color = '#1644ad';
        nav2.style.color = '#1644ad';
        nav3.style.color = '#1644ad';
        nav4.style.color = '#1644ad';
    } else {
        navbar.className = 'navbar';
        nav1.style.color = 'white';
        nav2.style.color = 'white';
        nav3.style.color = 'white';
        nav4.style.color = 'white';

    }
}