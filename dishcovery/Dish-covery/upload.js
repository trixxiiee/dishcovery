// script.js
document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const title = document.getElementById('photoTitle').value;
    const description = document.getElementById('photoDescription').value;
    const photo = document.getElementById('photo').files[0];

    // Perform an action with the title, description, and photo
    console.log('Title:', title);
    console.log('Description:', description);
    console.log('Photo:', photo);

    // Here, you would typically send the data to the server
    // using FormData or similar approach

    // Reset the form
    this.reset();
});