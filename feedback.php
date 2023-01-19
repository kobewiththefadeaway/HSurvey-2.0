
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Feedback</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
    </nav>
  </header>
  <main>
    <h1>Feedback</h1>
    <p>Thank you for completing the survey! Here is a summary of your responses:</p>
    <ul>
      <li>Name: <?php echo $_SESSION["name"]; ?></li>
      <li>Age: <?php echo $_SESSION["age"]; ?></li>
      <li>Gender: <?php echo $_SESSION["gender"]; ?></li>
      <li>Overall health rating: <?php echo $_SESSION["health_rating"]; ?></li>
      <li>Servings of fruits and vegetables per day: <?php echo $_SESSION["servings"]; ?></li>
      <li>Health conditions: 
      <?php
        if(!empty($_SESSION["health_conditions"])) {
            foreach($_SESSION["health_conditions"] as $condition) {
                echo $condition . ", ";
            }
        }else {
          echo "None";
        }
       ?>
      </li>
      <li>Smokes: <?php echo $_SESSION["smokes"]; ?></li>
      <li>Hours of sleep per night: <?php echo $_SESSION["sleep_hours"]; ?></li>
      <li>Food allergies: <?php echo $_SESSION["food_allergies"]; ?></li>
      <li>Physical activity satisfaction: <?php echo $_SESSION["activity_satisfaction"]; ?></li>
    </ul>
  </main>
</body>
</html>
