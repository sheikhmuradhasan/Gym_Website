// Carousel
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".testimonial-slider");
  const items = document.querySelectorAll(".testimonial-item");
  const pagination = document.querySelector(".testimonial-pagination");
  const prevButton = document.querySelector(".slider-arrow.prev");
  const nextButton = document.querySelector(".slider-arrow.next");
  const totalItems = items.length;

  let currentIndex = 0;

  // Create pagination dots
  for (let i = 0; i < totalItems; i++) {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    pagination.appendChild(dot);
  }

  const dots = document.querySelectorAll(".testimonial-pagination span");

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === currentIndex);
    });
  }

  function autoSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateSlider();
  }

  function goToSlide(index) {
    currentIndex = index;
    updateSlider();
  }

  // Arrow Navigation
  prevButton.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateSlider();
  });

  nextButton.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % totalItems;
    updateSlider();
  });

  // Pagination Dots Navigation
  dots.forEach((dot, index) => {
    dot.addEventListener("click", function () {
      goToSlide(index);
    });
  });

  // Auto-slide
  setInterval(autoSlide, 4000);
});

// Sidebar 
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('toggleSidebar');

toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('show');
});


// Stats 

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number");
  const duration = 2000; // Total countdown duration in milliseconds

  counters.forEach(counter => {
    const target = +counter.getAttribute("data-target");
    const startTime = performance.now();

    const updateCount = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1); // Clamp progress to [0, 1]
      const currentValue = Math.ceil(progress * target);

      counter.innerText = currentValue;

      if (progress < 1) {
        requestAnimationFrame(updateCount); // Continue animation
      }
    };

    requestAnimationFrame(updateCount); // Start animation
  });
});


// Popup

// // Selecting Elements
// const subscribeButton = document.getElementById('subscribe');
// const popupModal = document.getElementById('popupModal');
// const closePopupButton = document.getElementById('closePopup');



// // Login and Registration with validation 
// // Access elements
// const subscribeButton = document.getElementById("subscribe");
// const loginForm = document.getElementById("loginForm");
// const signupForm = document.getElementById("signupForm");
// const showLoginFormLink = document.getElementById("showLoginForm");
// const showSignupFormLink = document.getElementById("showSignupForm");

// // Validation regex patterns
// const regexPatterns = {
//   username: /^([a-z0-9]+)$/,
//   email: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z_\-\.]+)\.([a-zA-Z]{2,})$/,
//   password: /^(?=.*[0-9])(?=.*[A-Z])(?=.*[@$!#%&?*&])[A-Za-z\d@$!#%&?*&]{8,20}$/,
// };

// // Function to validate input
// function validateInput(value, regex) {
//   return regex.test(value);
// }

// // Validate Login Form
// loginForm.addEventListener("submit", (event) => {
//   event.preventDefault();

//   const email = document.getElementById("email").value;
//   const password = document.getElementById("password").value;

//   if (!validateInput(email, regexPatterns.email)) {
//     alert("Invalid email. Please use a valid email format.");
//     return;
//   }

//   if (!validateInput(password, regexPatterns.password)) {
//     alert(
//       "Invalid password. It must contain at least one uppercase letter, one number, one special character, and be 8-20 characters long."
//     );
//     return;
//   }

//   alert("Login successful!");
// });

// // Validate Signup Form
// signupForm.addEventListener("submit", (event) => {
//   event.preventDefault();

//   const signupUsername = document.getElementById("signupUsername").value;
//   const signupEmail = document.getElementById("signupEmail").value;
//   const signupPassword = document.getElementById("signupPassword").value;

//   // Validate inputs
//   if (!validateInput(signupUsername, regexPatterns.username)) {
//     alert("Invalid username. It must be lowercase and contain only letters and numbers.");
//     return;
//   }

//   if (!validateInput(signupEmail, regexPatterns.email)) {
//     alert("Invalid email format. Please use a valid email format.");
//     return;
//   }

//   if (!validateInput(signupPassword, regexPatterns.password)) {
//     alert(
//       "Invalid password. It must contain at least one uppercase letter, one number, one special character, and be 8-20 characters long."
//     );
//     return;
//   }

//   alert("Signup successful!");
// });

// // Hide Popup
// closePopupButton.addEventListener('click', () => {
//     popupModal.classList.add('hidden');
// });

// // Hide Popup on Outside Click
// popupModal.addEventListener('click', (event) => {
//     if (event.target === popupModal) {
//         popupModal.classList.add('hidden');
//     }
// });

// Login and Registration without validation
// Get elements
// const subscribeButton = document.getElementById('subscribe');
// const loginForm = document.getElementById('loginForm');
// const signupForm = document.getElementById('signupForm');
// const showLoginFormLink = document.getElementById('showLoginForm');
// const showSignupFormLink = document.getElementById('showSignupForm');

// // Event: Show Modal on Button Click
// subscribeButton.addEventListener('click', () => {
//     const popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
//     popupModal.show();
// });


// // Show Popup
// subscribeButton.addEventListener('click', () => {
//     popupModal.classList.remove('hidden');
// });

// Event: Show Modal on Button Click
subscribeButton.addEventListener("click", () => {
  const popupModal = new bootstrap.Modal(document.getElementById("popupModal"));
  popupModal.show();
});

// Event: Switch to Signup Form
showSignupFormLink.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent default link behavior

  // Add fade animation while switching
  loginForm.classList.add("d-none");
  signupForm.classList.remove("d-none");
});

// Event: Switch to Login Form
showLoginFormLink.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent default link behavior

  // Add fade animation while switching
  signupForm.classList.add("d-none");
  loginForm.classList.remove("d-none");
});