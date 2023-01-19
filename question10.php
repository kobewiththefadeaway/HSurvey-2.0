<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 9</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="feedback.php" method="post">
      <h1>Question 9</h1>
      <p>How satisfied are you with your current level of physical activity?</p>
      <input type="range" min="0" max="5" value="3" class="slider" id="activity_satisfaction" name="activity_satisfaction">
      <p>Value: <span id="value"></span></p>
      <script>
        var slider = document.getElementById("activity_satisfaction");
        var value = document.getElementById("value");
        value.innerHTML = slider.value;
        slider.oninput = function() {
          value.innerHTML = this.value;
        }
      </script>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
