<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 5</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question7.php" method="post">
      <h1>Question 5</h1>
      <p>Which of the following health conditions do you have?</p>
      <input type="checkbox" id="diabetes" name="health_conditions[]" value="diabetes">
      <label for="diabetes">Diabetes</label>
      <input type="checkbox" id="heart_disease" name="health_conditions[]" value="heart_disease">
      <label for="heart_disease">Heart Disease</label>
      <input type="checkbox" id="none" name="health_conditions[]" value="none" checked>
      <label for="none">None</label>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
