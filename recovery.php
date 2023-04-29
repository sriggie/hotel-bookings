<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  
  // Connect to the MySQL database
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "hotel-booking";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Check if the username exists in the database
  $sql = "SELECT id, password FROM users WHERE username='$username'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $password = $row["password"];
    
    // Send an email to the user with their password
    $to = $username;
    $subject = "Password recovery";
    $message = "Your password is: $password";
    $headers = "From: reagandesigns@gmail.com";
    
    if (mail($to, $subject, $message, $headers)) {
      // Password recovery email sent successfully
      echo "An email has been sent to your email address with your password.";
    } else {
      // Error sending email
      echo "There was an error sending the email. Please try again later.";
    }
  } else {
    // Username not found in database
    echo "Username not found in database.";
  }
  
  $conn->close();
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">
  <button type="submit">Recover Password</button>
</form>
