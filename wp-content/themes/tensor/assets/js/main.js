document.addEventListener('DOMContentLoaded', () => {
  const swiperClients = new Swiper('#swiper-clients', {
    slidesPerView: 5,
    spaceBetween: 15,
    loop: true,
    autoplay: {
      delay: 2500,
    },
    navigation: {
      nextEl: '.client-swiper-button-next',
      prevEl: '.client-swiper-button-prev',
    },
  });
  const swiperReviews = new Swiper('#swiper-reviews', {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: '.review-swiper-button-next',
      prevEl: '.review-swiper-button-prev',
    },
  });
});
