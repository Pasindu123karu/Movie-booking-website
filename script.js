const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});




const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}


//slider
/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,
  
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
    breakpoints:{
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },
  });

  // Get all the "Book Now" buttons
const bookButtons = document.querySelectorAll(".book-button , #download_main");

// Get the popup and the close button
const popup = document.getElementById("popup");
const closePopup = document.getElementById("close-popup");

// Function to show the popup
function showPopup() {
    popup.style.display = "block";
}

// Function to hide the popup
function hidePopup() {
    popup.style.display = "none";
}

// Attach a click event listener to each "Book Now" button
bookButtons.forEach((button) => {
    button.addEventListener("click", showPopup);
});

// Attach a click event listener to the close button to hide the popup
closePopup.addEventListener("click", hidePopup);
