<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Question 2</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
      <button onclick="window.history.back()">Previous</button>
    </nav>
  </header>
  <main>
    <form action="question3.php" method="post" onsubmit="return validateForm()">
      <h1>Question 2</h1>
      <p>How would you rate your overall health?</p>
      <input type="range" min="0" max="5" value="0" class="slider" id="health_rating" name="health_rating" required>
      <p>Value: <span id="value"></span></p>
      <script>
        var slider = document.getElementById("health_rating");
        var value = document.getElementById("value");
        slider.oninput = function() {
          value.innerHTML = this.value;
        }
         function validateForm() {
          var x = document.forms["myForm"]["health_rating"].value;
          if (x == "") {
            alert("Please select a value");
            return false;
          }
        }
      </script>
      <input type="submit" value="Next">
    </form>
  </main>
</body>
</html>
