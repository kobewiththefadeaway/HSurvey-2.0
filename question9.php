<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 8</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question10.php" method="post">
      <h1>Question 8</h1>
      <p>Do you have any food allergies?</p>
      <input type="text" name="food_allergies" required>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
