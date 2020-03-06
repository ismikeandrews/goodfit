const slide = document.querySelector('.slide');
const slideWrapper = document.querySelector('.slide-wrapper');
const slideItem = document.querySelectorAll('.slide-item');
const slideNext = document.querySelector('.slide-next');
const slidePrev = document.querySelector('.slide-prev');
const vagaImage = document.querySelector('.vagas-empresa-logo');
const vagasBtn = document.querySelector('.vagas-btn');

let slideLength = slideItem.length;
let slideItemWidth = slideItem[0].clientWidth;
let vagaItemHeight = slideItem[0].clientHeight;
let idx = 0;
let position = 0;

slideWrapper.style.width = `${slideItemWidth * slideLength}px`;

slideItem[0].classList.add('is-active');


slideNext.addEventListener('click', () => {
    if (idx + 1 < slideLength) {
        slideItem[idx].classList.remove('is-active');
        idx++;
        slideItem[idx].classList.add('is-active');
        position += slideItemWidth;
        slideWrapper.style.transform = `translateX(-${ position }px)`;
        vagasBtn.style.transform = `top:${ vagaItemHeight - 15 }px`;
    }
});


slidePrev.addEventListener('click', () => {
    if (idx > 0) {
        slideItem[idx].classList.remove('is-active');
        idx--;
        slideItem[idx].classList.add('is-active');
        position -= slideItemWidth;
        slideWrapper.style.transform = `translateX(-${ position }px)`;
    }
});