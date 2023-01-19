<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 6</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question8.php" method="post">
      <h1>Question 6</h1>
      <p>Do you smoke?</p>
      <input type="radio" id="yes" name="smokes" value="yes">
      <label for="yes">Yes</label>
      <input type="radio" id="no" name="smokes" value="no">
      <label for="no">No</label>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
