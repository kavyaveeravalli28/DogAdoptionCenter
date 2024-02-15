<!DOCTYPE html>
<html>
<head>
  <style>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $Username = $_POST['Username'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

  // Validate form data
  // ...

  // Database connection
  $host = 'localhost'; // Your database host
  $dbUsername = 'root'; // Your database username
  $dbPassword = ''; // Your database password
  $dbName = 'dogadop'; // Your database name

  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

  // Check the database connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }// Prepare and bind the SQL statement
  $stmt = $conn->prepare('INSERT INTO sign (Username, Email, Password) VALUES (?, ?, ?)');
  $stmt->bind_param('sss', $Name, $Email, $Password);

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
if (isset($_POST['submit'])) {
  // Retrieve form data
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  // Connect to the database
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'dogadop';

  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and bind the SQL statement
  $stmt = $conn->prepare('SELECT * FROM sign WHERE Username = ? AND Password = ?');
  $stmt->bind_param('ss', $Username, $Password);

  // Execute the statement
  $stmt->execute();

  // Get the result
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    // Sign-in successful
    echo 'Sign-in successful!';
  } else {
    // Sign-in failed
    echo 'Invalid username or password!';
  }

  // Close the statement and the database connection
  $stmt->close();
  $conn->close();
}

?>

 /*Insert data into the database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Registration successful.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?> */

    table {
      margin: auto;
      border-collapse: collapse;
      border: 1px solid black; /* Add border style */
    }

    td {
      padding: 10px;
      
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 200px;
    }

    input[type="submit"] {
      padding: 5px 10px;
      background-color: plum;
      color: white;
      border: none;
      cursor: pointer;
    }

    body {
      background-image: url('images/login.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body align="center">
  <h2>Registration</h2>
  <table>
    <form action="" method="">
      <tr>
        <td>Username:</td>
        <td><input name="Username" type="text" required></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="email" name="Email"required></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="Password"required></td>
      </tr>
      
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Register" formaction="index.php">
        </td>
      </tr>
    </form>
  </table>
 
  </script>
</body>
</html>
