<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 3</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question5.php" method="post">
      <h1>Question 3</h1>
      <p>What type of exercise do you prefer?</p>
      <input type="radio" id="cardio" name="exercise_type" value="cardio">
      <label for="cardio">Cardio</label>
      <input type="radio" id="strength" name="exercise_type" value="strength">
      <label for="strength">Strength Training</label>
      <input type="radio" id="both" name="exercise_type" value="both">
      <label for="both">Both</label>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
