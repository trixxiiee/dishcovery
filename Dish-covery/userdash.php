<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="userdash.css">
  <script src="script.js" defer></script>
</head>
<body>
  <aside class="sidebar">
    <h2>Dish-covery</h2>
    <div class="horizontal-line"></div>
  <main>
    <!-- Search Bar -->
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Type to search...">
      <button onclick="search()">Search</button>
    </div>
  </main>
  <!-- Sidebar -->
  <div class="btnn-container">
    <button class="btnn btnn-color-2" onclick="window.location.href='nutridash.php'"> Nutrition Tracker</button>
    <button class="btnn btnn-color-3" onclick="window.location.href='mealplan.php'"> Meal Planning</button>      
    </div>
  <div class="btn1-container">
    <button class="btn1 btn1-color-4" onclick="window.location.href='upload.php'"> Upload Recipe</button>
    <button class="btn1 btn1-color-5" onclick="window.location.href='profile.php'"> Profile</button>
  </div>
  </a>
 <script src="userdash.js"></script>
</body>
</html>
