// Navigation toggle
window.addEventListener('load', function () {
    let main_navigation = document.querySelector('#primary-menu');
    document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
        e.preventDefault();
        main_navigation.classList.toggle('hidden');
    });
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            750: {
                slidesPerView: 2.5,
            }
        }
    });

    // Dynamically Inject Navigation Items
    const navUl = document.querySelector('#menu-header-navigation');
    const sections = document.querySelectorAll('section');
    const footerUl = document.querySelector('#menu-header-navigation-1');

    function populateNavigation(ul) {
        ul.innerHTML = '';
        sections.forEach((section) => {
            let dataId = section.dataset.id;
            let elId = section.id;
            let cleanTitle = dataId.replace(/-/g, ' ');
            let newLiEl = document.createElement('li');
            let newAnchorEl = document.createElement('a');
            newAnchorEl.href = `#${elId}`;
            newAnchorEl.innerText = cleanTitle;
            newLiEl.appendChild(newAnchorEl);
            newLiEl.classList.add('lg:mx-4');
            ul.appendChild(newLiEl);
        });
    }
    
    populateNavigation(navUl);
    populateNavigation(footerUl);
});