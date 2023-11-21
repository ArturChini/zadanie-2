<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <title>Stronka login</title>
</head>
<body>
  <div class="login-container">
    <form method="POST" class="login-form">
      <label for="username">Nazwa użytkownika:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Hasło:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Zaloguj się</button>
    </form>
  </div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
     $login = $_POST["username"];
     $haslo = $_POST["password"];
}
if($login === "admin" && $haslo === "test")
{
  echo "<script type='text/javascript'>alert('Zalogowano');</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Nie zalogowano');</script>";
}
?>
</body>
</html>
