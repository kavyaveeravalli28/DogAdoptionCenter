<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $Password = $_POST['Password'];

  // Perform any necessary validation on the form data here

  // Connect to the database
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'tutorial';

  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and bind the SQL statement
  $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?, ?)');
  $stmt->bind_param('sss', $username, $Password);

  // Execute the statement
  if ($stmt->execute()) {
    echo 'Registration successful!';
  } else {
    echo 'Error occurred while registering. Please try again.';
  }
 

  // Close the statement and the database connection
  $stmt->close();
  $conn->close();
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('pic1.jpg');
      background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 150px;
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: plum;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: plum;
    }

    .error-message {
      color: red;
      margin-top: 5px;
      text-align: left;
    }
  </style>
  <script>
    function validateForm() {
      var username = document.forms["loginForm"]["username"].value;
      var password = document.forms["loginForm"]["password"].value;

      if (username === "") {
        document.getElementById("usernameError").innerHTML = "Please enter a username";
        return false;
      } else {
        document.getElementById("usernameError").innerHTML = "";
      }

      if (password === "") {
        document.getElementById("passwordError").innerHTML = "Please enter a password";
        return false;
      } else {
        document.getElementById("passwordError").innerHTML = "";
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form name="loginForm" onsubmit="return validateForm()">
      <input type="text" name="username" placeholder="Username" required><br>
      <span id="usernameError" class="error-message"></span>
      <input type="password" name="password" placeholder="Password" required><br>
      <span id="passwordError" class="error-message"></span>
      <input type="submit" value="Login" formaction="index.html">
    </form>
    <p>Don't have an account? <a href="signup.html">Sign up</a></p>
  </div>
</body>
</html>