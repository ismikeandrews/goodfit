const menu = document.querySelector('#menu-burg');
const menuCollapse = document.querySelector('#menu-collapse');

console.log(menu)
console.log(menuCollapse)

menu.addEventListener('click', function() {
    console.log(menu)
    console.log(menuCollapse)
    menuCollapse.classList.toggle('is-active');
});
