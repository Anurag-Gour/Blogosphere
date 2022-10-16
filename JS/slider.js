
const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 'auto',
    autoplay: {
        delay:4000,
        disableOnInteraction: true
    },
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});

