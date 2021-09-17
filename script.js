const button = document.querySelector(".submit-btn");
const button2 = document.querySelectorAll(".buy-btn");
const wrapper = document.querySelector(".wrapper");
const container = document.querySelector(".container");

button.addEventListener("click", () => {
  event.preventDefault();

  wrapper.classList.toggle("hide");
  container.classList.toggle("hide");
});

button2[0].addEventListener("click", () => {
  event.preventDefault();

  container.classList.toggle("hide");
  wrapper.classList.toggle("hide");
});

button2[1].addEventListener("click", () => {
  event.preventDefault();

  container.classList.toggle("hide");
  wrapper.classList.toggle("hide");
});

button2[2].addEventListener("click", () => {
  event.preventDefault();

  container.classList.toggle("hide");
  wrapper.classList.toggle("hide");
});

button2[3].addEventListener("click", () => {
  event.preventDefault();

  container.classList.toggle("hide");
  wrapper.classList.toggle("hide");
});
