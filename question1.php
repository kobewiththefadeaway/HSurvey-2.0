<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 1</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question2.php" method="post">
      <h1>Question 1</h1>
      <label>How often do you exercise per week?</label>
      <input type="number" name="exercise_frequency" required>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
