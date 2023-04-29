<!-- CSS styling -->
<style>
  .form-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }

  .form-container input[type=text], .form-container input[type=email], .form-container input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .form-container input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .form-container input[type=submit]:hover {
    background-color: purple;
  }

  .form-container a {
    text-decoration: none;
    color: orange;
    margin-right: 20px;
  }

  .form-container a:hover {
    color: red;
  }

  .form-container p {
    margin: 10px 0;
    font-size: 18px;
  }
</style>

<!-- HTML form -->
<div class="form-container">
  <h2>Create Customer</h2>
  <form method="post" action="">
    <label for="id">Id:</label>
  <form method="post" action="">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Submit">
  </form>
  <br>
  <a href="/">Home</a>
  <a href="contact.php">Contact Us</a>
  <?php
  // Check if the form has been submitted
  if (isset($_POST["email"]) && isset($_POST["password"])) {
    // Get the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "hotel-booking";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Insert the new customer into the database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "<p>You have been added successfully.</p>";
    } else {
      echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
  }
  ?>
</div>
