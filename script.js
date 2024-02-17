// JavaScript to toggle the side menu
document.getElementById("menu-btn").addEventListener("click", function() {
    var sideMenu = document.getElementById("side-menu");
    if (sideMenu.style.left === "-250px") {
        sideMenu.style.left = "0";
    } else {
        sideMenu.style.left = "-250px";
    }
});

// JavaScript to control the video popup
function openVideoPopup() {
    document.getElementById("video-popup").style.display = "block";
}

function closeVideoPopup() {
    document.getElementById("video-popup").style.display = "none";
}

// Wrap your JavaScript code within a load event listener to ensure it runs after the HTML has loaded
window.addEventListener('load', function() {
    // Get references to the review container and the "Reviews" button
    const reviewContainer = document.getElementById('reviewContainer');
    const toggleReviewsBtn = document.getElementById('toggleReviewsBtn');

    // Add event listener to the "Reviews" button to scroll to the review container
    toggleReviewsBtn.addEventListener('click', function() {
        reviewContainer.scrollIntoView({ behavior: 'smooth' });
    });
});

