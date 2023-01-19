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
    </nav>
  </header>
  <main>
    <form action="question4.php" method="post">
      <h1>Question 1</h1>
      <p>How old are you?</p>
      <input type="number" name="age" required>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
