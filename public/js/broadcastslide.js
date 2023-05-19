// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function () {
    // Get the slideshow container
    var slideshow = document.getElementById("slideshow");

    // Get all the images within the slideshow container
    var images = slideshow.getElementsByTagName("img");
    var imageCount = images.length;
    var currentIndex = 0;

    // Function to change the image every 5 seconds
    function slideImage() {
        // Hide the current image
        images[currentIndex].style.display = "none";

        // Move to the next image
        currentIndex = (currentIndex + 1) % imageCount;

        // Show the next image
        images[currentIndex].style.display = "block";
    }

    // Initial setup
    images[currentIndex].style.display = "block";

    // Start the slideshow
    setInterval(slideImage, 5000);
});
