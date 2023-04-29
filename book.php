<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "hotel-booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/i.jpg" type="image/x-icon">
    <link rel="icon" href="images/i.jpg" type="image/x-icon">
  <title>bookings</title>
</head>
<body>
?>
<form method="POST" action="process_booking.php">
    <label for="premium_rooms">Premium Rooms:</label>
    <input type="number" id="premium_rooms" name="premium_rooms" min="0" max="10">
    
    <label for="deluxe_rooms">Deluxe Rooms:</label>
    <input type="number" id="deluxe_rooms" name="deluxe_rooms" min="0" max="10">
    
    <label for="check_in">Check-in Date:</label>
    <input type="date" id="check_in" name="check_in">
    
    <label for="check_out">Check-out Date:</label>
    <input type="date" id="check_out" name="check_out">
    
    <button type="submit" name="submit">Book Now</button>
</form>
<?php
$premium_rooms = $_POST['premium_rooms'];
$deluxe_rooms = $_POST['deluxe_rooms'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

$sql = "INSERT INTO bookings (premium_rooms, deluxe_rooms) VALUES ('$premium_rooms', '$deluxe_rooms')";
if ($conn->query($sql) === TRUE) {
  echo "You have successfully booked!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

</body>
</html>

$conn->close();
?>
