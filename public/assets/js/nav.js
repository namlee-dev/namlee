const menu = {

    init: function(){
        // console.log('init loaded');

        // Select the burger button
        const burgerButton = document.querySelector('.nav__icon');
        // console.log(burgerButton);

        // Listen the click on the burger
        burgerButton.addEventListener('click', menu.handleBurgerButtonClick);
    },

    handleBurgerButtonClick: function(event) {
        // console.log("handleburgerButtonClick loaded");

        // Select <nav>
        const nav = document.querySelector('nav');
        // console.log(nav);

        //Clone <div> nav__links and add class copy
        const navClone= document.querySelector('.nav__links').cloneNode(true);
        navClone.classList.add('copy');
        // console.log(navClone);

        // Add as child of <nav>
        nav.appendChild(navClone);

        // Remove the burger button
        const burgerButton = document.querySelector('.nav__icon');
        // console.log(burgerButton);
        burgerButton.classList.add('not-visible');

        // Add the cross button
        const crossButton = document.querySelector('.close-button');
        crossButton.classList.add('visible');
        console.log(crossButton);

        // Listen the click on the crossButton
        crossButton.addEventListener('click', menu.handleCrossButtonClick);

    },

    handleCrossButtonClick: function(event) {
        // console.log("handleCrossButtonClick loaded");

        // Remove the nav__links copy as child of <nav>
        const nav = document.querySelector('nav');
        nav.querySelector('.nav__links.copy').remove();

        // Remove the cross button
        const crossButton = document.querySelector('.close-button');
        crossButton.classList.remove('visible');

        // Add the burger button
        const burgerButton = document.querySelector('.nav__icon');
        burgerButton.classList.remove('not-visible');

    }
}

document.addEventListener("DOMContentLoaded", menu.init);
