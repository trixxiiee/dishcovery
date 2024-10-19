<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css"> <!-- Link to your CSS file -->
    <title>Upload Recipe</title>
</head>
<body>
    <div class="upload-container">
        <h2>Upload Recipe</h2>
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photoTitle">Dish name:</label>
                <input type="text" id="photoTitle" name="photoTitle" required>
            </div>

            <div class="form-group">
                <label for="photoDescription">Recipe and Procedure:</label>
                <textarea id="photoDescription" name="photoDescription" required></textarea>
            </div>


            <div class="form-group">
            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="appetizer">Appetizer</option>
                <option value="main_course">Main Course</option>
                <option value="dessert">Dessert</option>
                <option value="snack">Snack</option>
                <option value="Salads">Salads</option>
                <option value="Side Dishes">Side Dishes</option>
               </select> 
 </div>

            <div class="form-group">
                <label for="photo">Select Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>
            
            <button type="submit">Upload</button>
        </form>
    </div>

    <script src="upload.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>