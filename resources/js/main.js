/**
 * Slider partners
 */
$(document).ready(function () {
    $(".customer-logos").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                setting: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 529,
                settin: {
                    slidesToShow: 3,
                },
            },
        ],
    });
});

/**
   * Preloader
   */
let preloader = select('#preloader');
if (preloader) {
  window.addEventListener('load', () => {
    preloader.remove()
  });
}

  /**
   * Initiate glightbox
   */
  const glightbox = glightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate gallery lightbox
   */
  const galleryLightbox = glightbox({
    selector: '.gallery-lightbox'
  });
