const burger = document.querySelector(".header__burger");
const header = document.querySelector("header");
const linkHeader = header.querySelectorAll("li");
const slider = document.querySelector(".tenant_slider");
const sliderInner = slider.querySelector(".tenant_slider_inner");
const sliderOver = slider.querySelector(".slider_over");
const sliderDots = slider.querySelector(".tenant_slider_dots");
const previous = slider.querySelector(".tenant_slider_pagination_previous");
const next = slider.querySelector(".tenant_slider_pagination_next");

burger.addEventListener("click", () => {
  header.classList.toggle("active");
  console.log(linkHeader);
});

linkHeader.forEach((el) => {
  el.addEventListener("click", () => {
    el.classList.toggle("active");
  });
});

function updateSliderWidth() {
  if (!sliderOver) {
    console.error("Элемент sliderOver не найден!");
    return;
  }

  const scrollbarWidth =
    window.innerWidth - document.documentElement.clientWidth;
  const width = window.innerWidth - scrollbarWidth - 20;
  sliderOver.style.width = `${width}px`;
  console.log("Ширина обновлена:", width);
}

let resizeTimeout;
function handleResize() {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    updateSliderWidth();
  }, 100);
}

document.addEventListener("DOMContentLoaded", () => {
  updateSliderWidth();
  window.addEventListener("resize", handleResize);
});

if (slider) {
  const numDots = Array.from(sliderInner.children).length;
  for (let i = 0; i < numDots; i++) {
    const dot = document.createElement("div");
    dot.className = "tenant_slider-dot";
    sliderDots.appendChild(dot);
  }

  const dots = Array.from(sliderDots.children);
  dots[0].classList.add("active");
  sliderDots.innerHTML = "";
  console.log(dots);
  dots.forEach((dot) => {
    sliderDots.appendChild(dot);
  });

  previous.addEventListener("click", () => {
    const slides = Array.from(sliderInner.children);

    for (let i = 0; i < dots.length; i++) {
      if (dots[i].classList.contains("active")) {
        dots[i].classList.remove("active");

        const nextIndex = (i + 1) % dots.length;
        dots[nextIndex].classList.add("active");
        break;
      }
    }

    const firstSlide = slides.shift();
    sliderInner.innerHTML = "";
    slides.forEach((slide) => {
      slide.style.animation = "fadeInleft 1s forwards";
      sliderInner.appendChild(slide);
    });
    sliderInner.appendChild(firstSlide);
  });

  next.addEventListener("click", () => {
    const slides = Array.from(sliderInner.children);
    for (let i = 0; i < dots.length; i++) {
      if (dots[i].classList.contains("active")) {
        dots[i].classList.remove("active");

        const nextIndex = (i - 1 + dots.length) % dots.length;
        dots[nextIndex].classList.add("active");
        break;
      }
    }
    const lastSlide = slides.pop();
    sliderInner.innerHTML = "";
    lastSlide.style.animation = "fadeInright 1s forwards";
    sliderInner.appendChild(lastSlide);
    slides.forEach((slide) => {
      slide.style.animation = "fadeInright 1s forwards";
      sliderInner.appendChild(slide);
    });
  });
}
