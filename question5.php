<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 4</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question6.php" method="post">
      <h1>Question 4</h1>
      <p>How many servings of fruits and vegetables do you eat per day?</p>
      <input type="number" name="servings" required>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
