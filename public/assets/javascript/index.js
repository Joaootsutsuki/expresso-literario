function addGlobalEventListener(type, selector, callback, options) {
  selector.addEventListener(
    type,
    (e) => {
      callback(e);
    },
    options
  );
}

// Cria os slides no Header.
let headerSlider = new Swiper(".header-slider", {
  wrapperClass: "header-slider-wrapper",
  slideClass: "header-slider-slide",
  slidesPerView: 1,
  loop: true,
  allowTouchMove: false,
  speed: 500,
  autoplay: {
    delay: 4500,
    disableOnInteraction: true,
  },

  pagination: {
    el: ".header-slider-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".header-slider-button-next",
    prevEl: ".header-slider-button-prev",
  },
});

// Cria os slides dos produtos no Main.

let productSlider = new Swiper(".product-slider", {
  wrapperClass: "product-slider-wrapper",
  slideClass: "product-slider-slide",
  slidesPerView: 3,
  slidesPerGroup: 2,
  spaceBetween: 60,
  loop: true,
  allowTouchMove: false,
  speed: 500,
  navigation: {
    nextEl: ".product-slider-button-next",
    prevEl: ".product-slider-button-prev",
  },
});

function updateProductSlider() {
  let slidesPerView = 3;
  let spaceBetween = 60;
  let slidesPerGroup = 2;

  if (window.innerWidth < 1530 && window.innerWidth > 800) {
    slidesPerView = 2;
    spaceBetween = 60;
    slidesPerGroup = 1;
  } else if (window.innerWidth < 800) {
    slidesPerView = 1;
    spaceBetween = 0;
    slidesPerGroup = 1;
  }

  //   productSlider.forEach((element) => {
  //     updateSlider(element, slidesPerView, spaceBetween, slidesPerGroup);
  //   });

  updateSlider(productSlider, slidesPerView, spaceBetween, slidesPerGroup);
}

function updateSlider(slider, slidesPerView, spaceBetween, slidesPerGroup) {
  slider.params.slidesPerView = slidesPerView;
  slider.params.spaceBetween = spaceBetween;
  slider.params.slidesPerGroup = slidesPerGroup;
  slider.update();
}

function closeFlashMessage() {
  const flashMessageBox = document.querySelector("#flashMessageBox");
  flashMessageBox.classList.add("hide");
  console.log("asd");
}

const userIcon = document.querySelector(".userIcon");
const dropDown = document.querySelector(".drop-down");

if (userIcon) {
  userIcon.addEventListener("click", function () {
    dropDown.classList.toggle("show");

    document.addEventListener("click", function hideDropDownOutside(event) {
      if (!userIcon.contains(event.target) && !dropDown.contains(event.target)) {
        dropDown.classList.remove("show");
        document.removeEventListener("click", hideDropDownOutside);
      }
    });
  });
}
window.addEventListener("resize", updateProductSlider);
window.addEventListener("load", updateProductSlider);
