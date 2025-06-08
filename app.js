const burger = document.querySelector(".header__burger");
const header = document.querySelector("header");
const linkHeader = header.querySelectorAll("li");

burger.addEventListener("click", () => {
  header.classList.toggle("active");
  console.log(linkHeader);
});

linkHeader.forEach((el) => {
  el.addEventListener("click", () => {
    el.classList.toggle("active");
  });
});
