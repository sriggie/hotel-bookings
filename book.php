<?php 
// Database credentials
$username = "root";
$hostname = "localhost";
$password = "";
$dbName = "hotel-booking";

// connect to the database
$conn = mysqli_connect($hostname, $username, $password, $dbName );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from table
$sql = "SELECT client_id, client_name, no_of_rooms, email FROM bookings";

// Execute query and get results
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Client ID: " . $row["client_id"]. "<br>";
        echo "Client Name: " . $row["client_name"]. "<br>";
        echo "No. of Rooms: " . $row["no_of_rooms"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Booking System</title>
    <link rel="stylesheet" href="book.css">
  </head>
  <body>
  <script type="text/javascript" src="index.js"></script>
    <div class="welcome-message">
      <h1>Book now to get your prefered room reserved by us</h1>
      <p>Book your next stay with us and enjoy top-notch amenities, stunning views, and exceptional service.</p>
    </div>
    <div class="rooms-section">
      <h2>Reserve your room lets cater for the rest </h2>
      <div class="room-card">
        <img src="images/hotel1.jpg" alt="Room 1">
        <div class="room-info">
          <h3>ukunda resort</h3>
          <p>Queen-sized bed, ocean view, accommodates 2 guests</p>
          <form>
            <label for="check-in-date">Check-In Date:</label>
            <input type="date" id="check-in-date" name="check-in-date">
            <label for="check-out-date">Check-Out Date:</label>
            <input type="date" id="check-out-date" name="check-out-date">
            <label for="guests"><?=?>no_of_rooms:</label>
            <input type="number" id="guests" name="guests" min="1" max="2">
            <input type="submit" value="Book Now">
          </form>
        </div>
      </div>
      <div class="room-card">
        <img src="images/hotel2.jpg" alt="maasai">
        <div class="room-info">
          <h3>Maasai Mara</h3>
          <p>King-sized bed, savvannah views , accommodates 2 guests</p>
          <form>
            <label for="check-in-date">Check-In Date:</label>
            <input type="date" id="check-in-date" name="check-in-date">
            <label for="check-out-date">Check-Out Date:</label>
            <input type="date" id="check-out-date" name="check-out-date">
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" max="2">
            <input type="submit" value="Book Now">
          </form>
        </div>
      </div>
    </div>
    <!-- <div class="gallery-section">
      <h2>Gallery</h2>
      <div class="gallery-item">
        <img src="gallery1.jpg" alt="Gallery 1">
        <div class="overlay">
          <h3>View 1</h3>
        </div>
      </div>
      <div class="gallery-item">
        <img src="gallery2.jpg" alt="Gallery 2">
        <div class="overlay">
          <h3>View 2</h3>
        </div>
      </div>
      <div class="gallery-item">
        <img src="gallery3.jpg" alt="Gallery 3">
        <div class="overlay">
          <h3>View 3</h3>
        </div>
      </div>
    </div>
    <div class="full-suite-package"> -->
      <h2>Full Suite Package</h2>
      <p>Book our full suite package and enjoy a luxurious stay with all travel expenses included.</p>
      <form>
        <
