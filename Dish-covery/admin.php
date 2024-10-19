<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div id="posts"></div>
    </div>

    <script>
        // Fetch posts from upload.php
        async function fetchPosts() {
            const response = await fetch('upload.php');
            const posts = await response.json();
            const postsContainer = document.getElementById('posts');

            posts.forEach(post => {
                const postDiv = document.createElement('div');
                postDiv.className = 'post';
                postDiv.innerHTML = `
                    <h2>${post.title}</h2>
                    <p>${post.description}</p>
                    <button class="approve" onclick="approvePost(this)">Approve</button>
                    <button class="reject" onclick="rejectPost(this)">Reject</button>
                `;
                postsContainer.appendChild(postDiv);
            });
        }

        // Approve post function
        function approvePost(button) {
            const post = button.parentElement;
            post.style.backgroundColor = "#d4edda"; // Green background for approved
            button.textContent = "Approved";
            button.disabled = true;
            button.nextElementSibling.disabled = true; // Disable reject button
        }

        // Reject post function
        function rejectPost(button) {
            const post = button.parentElement;
            post.style.backgroundColor = "#f8d7da"; // Red background for rejected
            button.textContent = "Rejected";
            button.disabled = true;
            button.previousElementSibling.disabled = true; // Disable approve button
        }

        // Call fetchPosts on page load
        window.onload = fetchPosts;
    </script>
</body>
</html>
