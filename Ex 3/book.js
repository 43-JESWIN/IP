// Get the form element
var form = document.getElementById("bookingForm");

// Function to open the form
function scrollToForm() {
    form.style.display = "block";
    form.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// Function to close the form
function closeForm() {
    form.style.display = "none";
}