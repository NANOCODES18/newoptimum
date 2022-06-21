const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})
// preloader
const loader = document.getElementById('preloader')
window.addEventListener('load', ()=>{
  loader.style.display = "none";
})