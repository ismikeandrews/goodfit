const menu = document.querySelector('#menu-burg');
const menuCollapse = document.querySelector('#menu-collapse');
const menuItems = document.querySelectorAll('.menu-nav-list-link-item');

if (menu) {
    menu.addEventListener('click', function() {
        menuCollapse.classList.toggle('is-active');

        if (menuCollapse.classList.contains('is-active')) {
            menuItems.forEach((elem, idx) => {
                setTimeout(function(){
                    elem.classList.add('is-active');
                }, idx * 250);
            });
        } else {
            menuItems.forEach(elem => {
                elem.classList.remove('is-active');
            });
        }
    });
}
