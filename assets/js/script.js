document.addEventListener("DOMContentLoaded", () => {
  const sliderEl = document.querySelector(".portfolio-activ");
  if (!sliderEl) return;

  let allowPageScroll = false;

  const swiper = new Swiper(".portfolio-activ", {
    slidesPerView: 1,
    loop: false,
    speed: 1200,
    parallax: true,

    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },

    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },

    navigation: {
      nextEl: ".portfolio__slider__arrow-next",
      prevEl: ".portfolio__slider__arrow-prev",
    },

    pagination: {
      el: ".portfolio-pagination",
      clickable: true,
    },

    on: {
      reachEnd() {
        allowPageScroll = true;
      },
      reachBeginning() {
        allowPageScroll = false;
      }
    }
  });

  /* ===== SCROLL → SLIDE CONTROL ===== */
  window.addEventListener(
    "wheel",
    (e) => {
      const rect = sliderEl.getBoundingClientRect();
      const inView =
        rect.top <= 0 && rect.bottom >= window.innerHeight;

      if (!inView) return;

      if (!allowPageScroll) {
        e.preventDefault();

        if (e.deltaY > 0) swiper.slideNext();
        else swiper.slidePrev();
      }
    },
    { passive: false }
  );
});

document.addEventListener("DOMContentLoaded", () => {
  const toolsSlider = document.querySelector(".niit-tools-slider");
  if (!toolsSlider) return;

  new Swiper(".niit-tools-slider", {
    slidesPerView: "auto",
    spaceBetween: 40,
    loop: true,
    allowTouchMove: false,

    speed: 6000, // controls smoothness
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },

    freeMode: true,
    freeModeMomentum: false,
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const button = item.querySelector(".faq-question");

    button.addEventListener("click", () => {
      // close others
      faqItems.forEach(i => {
        if (i !== item) i.classList.remove("active");
      });

      // toggle current
      item.classList.toggle("active");
    });
  });
});
