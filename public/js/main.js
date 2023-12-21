// -------------------------- Mobile Toggle Button for Nav ------------------------------

document.addEventListener("DOMContentLoaded", () => {
     const mobileMenu = document.getElementById("mobile-menu");
     const mobileMenuButton = document.getElementById("mobile-menu-button");
          mobileMenuButton.addEventListener("click", () => {
               mobileMenu.classList.toggle("hidden");
          });
});

// ----------------------------- Drop Down toggle for mobile (NAVBAR) ----------------------

// document.addEventListener("DOMContentLoaded", () => {
//      const toggleButton = document.getElementById('departments-toggle');
//      const dropdownMenu = document.getElementById('departments-dropdown');

//      // Function to toggle the dropdown on small screens
//      function toggleDropdownOnSmallScreens() {
//           dropdownMenu.classList.toggle('hidden');
//           toggleButton.classList.toggle('open');
//      }

//      // Check screen width and add event listeners accordingly
//      if (window.innerWidth <= 768) {
//           toggleButton.addEventListener('click', toggleDropdownOnSmallScreens);
//      }
// });


// ------------------------------------ Carousel ------------------------------------

document.addEventListener("DOMContentLoaded", () => {
    // JavaScript for automatic image rotation
    let currentSlide = 0;
    const slides = document.querySelectorAll(".carousel-item");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = "block";
            } else {
                slide.style.display = "none";
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function startCarousel() {
        // Hide all slides except the first one initially
        slides.forEach((slide, i) => {
            if (i === 0) {
                slide.style.display = "block";
            } else {
                slide.style.display = "none";
            }
        });

        setInterval(nextSlide, 3000); // Change image every 3 seconds
    }

    // Start the carousel
    startCarousel();
});

// ---------------------------- Accordion --------------------------------
document.addEventListener('DOMContentLoaded', function () {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            accordionButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.nextElementSibling.classList.add('hidden');
                }
            });
            content.classList.toggle('hidden');
        });
    });
});
