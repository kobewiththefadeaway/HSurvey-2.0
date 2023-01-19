<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Start Survey</title>
</head>
<body>
  <header>
    <nav>
      <button onclick="window.location.href='start.php'">Start Survey</button>
    </nav>
  </header>
  <main>
    <form action=" question1.php" method="post">
      <h1>Personal Health Survey</h1>
      <p>Welcome to our survey about personal health. Your feedback is important to us and will be used to improve our services.</p>
      <input type="submit" value="Start Survey">
    </form>
  </main>
</body>
</html>
