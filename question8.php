<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 7</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question9.php" method="post">
      <h1>Question 7</h1>
      <p>How many hours of sleep do you get per night?</p>
      <input type="number" name="sleep_hours" required>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
