document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slideshow-item");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let currentIndex = 0;
    const totalSlides = slides.length;

    // Function to show the current slide
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
            }
        });
    }

    // Show the initial slide
    showSlide(currentIndex);

    // Show the next slide
    nextBtn.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % totalSlides; // Loop back to first slide
        showSlide(currentIndex);
    });

    // Show the previous slide
    prevBtn.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Loop back to last slide
        showSlide(currentIndex);
    });
});
