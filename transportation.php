<!DOCTYPE html>
<html>

<head>
    <title>Transportation</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <script src="transportation_javaScript.js" defer></script>
    <style>
        body {
            background-image: url('image.jpg');
            background-size: cover; /* Adjust the sizing of the background image */
            background-position: center center; /* Center the background image */
            background-repeat: no-repeat; /* Ensure the background image doesn't repeat */
        }

        .form-group input[type="name"],
        .form-group input[type="text"] {
            width: 100%; /* Set the width to 100% to make it full width of the container */
            padding: 8px; /* Optional: Add padding for better aesthetics */
            box-sizing: border-box; /* Ensure padding and border are included in the total width */
        }

        #pickup_map,
        #dropoff_map {
            height: 300px;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbank"; // Update to your existing database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Retrieve information from URL parameters
    $id = $_GET['id'] ?? '';
    $email = $_GET['email'] ?? '';
    $time = $_GET['time'] ?? '';
    $shoplocation = $_GET['shoplocation'] ?? '';
    $droplocation = $_GET['droplocation'] ?? '';
    $currentDate = $_GET['currentDate'] ?? '';

    session_start();

    // Check if the user is logged in, if not, redirect to the login page
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    
    // Fetch the username from the session
    $username = $_SESSION['username'];

?>
    <div class="topnav">
        <a href="dashboard_v.php" class="btn">Home</a>
        <a id="homeLink" href="#home" class="active" onclick="handleClick(this)">Transportation</a>
        <a id="displayButtonT" onclick="displayInfoT(); handleClick(this)">🚚 Current Schedule</a>
    </div>

    <div id="infoDisplay"></div>

    <div class="header">
        <h2>Transportation</h2>
    </div>

    <div class="container">
        <form action="process_transportation.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

 <!-- Display username as non-editable text -->
 <div class="form-group">
                <label for="name">Volunteer Name (Username):</label>
                <input type="text" id="name" name="name" value="<?php echo $username; ?>" readonly>
            </div>

<div class="form-group">
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="<?php echo $currentDate; ?>" required>
</div>
<div class="form-group">
    <label for="existingTime">Approximate Time:</label>
    <p id="existingTime"><?php echo $time; ?></p>
</div>
<div class="form-group">
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" value="<?php echo $time; ?>" required>
</div>
<div class="form-group">
    <label for="locationPU">Pick-Up Location:</label>
    <input type="text" id="locationPU" name="locationPU" value="<?php echo $shoplocation; ?>" required>
                <button type="button" onclick="showLocationOnMap('pickup')">Show on Map</button>
                <div id="pickup_map"></div>
            </div>
            <div class="form-group">
    <label for="locationDO">Drop-Off Location:</label>
    <input type="text" id="locationDO" name="locationDO" value="<?php echo $droplocation; ?>" required>
                <button type="button" onclick="showLocationOnMap('dropoff')">Show on Map</button>
                <div id="dropoff_map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Transportation">
        </form>
    </div>

    <div class="footer">
        <p></p>
    </div>

    <script>
    function handleClick(clickedElement) {
        // Check if the "Home" link is clicked
        if (clickedElement.id === 'homeLink') {
            // Reset the page or clear the displayed information
            document.getElementById('infoDisplay').innerHTML = '';
            // You can add additional reset actions if needed
        }

        // Remove the 'active' class from all links
        var links = document.getElementsByClassName('topnav')[0].getElementsByTagName('a');
        for (var i = 0; i < links.length; i++) {
            links[i].classList.remove('active');
        }

        // Add the 'active' class to the clicked link
        clickedElement.classList.add('active');
    }
    </script>

    <script>
        function initMap() {
            // Common initialization code for both pickup and drop-off maps
            window.pickupMap = new google.maps.Map(document.getElementById('pickup_map'), {
                center: { lat: 1.5645, lng: 103.6373 },
                zoom: 14.7
            });

            window.dropoffMap = new google.maps.Map(document.getElementById('dropoff_map'), {
                center: { lat: 1.5645, lng: 103.6373 },
                zoom: 14.7
            });

            var pickupLocationInput = document.getElementById('locationPU');
            var dropoffLocationInput = document.getElementById('locationDO');

            var pickupAutocomplete = new google.maps.places.Autocomplete(pickupLocationInput);
            var dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffLocationInput);

            pickupAutocomplete.bindTo('bounds', window.pickupMap);
            dropoffAutocomplete.bindTo('bounds', window.dropoffMap);

            pickupAutocomplete.addListener('place_changed', function () {
                showLocationOnMap('pickup');
            });

            dropoffAutocomplete.addListener('place_changed', function () {
                showLocationOnMap('dropoff');
            });
        }

        function showLocationOnMap(type) {
            var locationInput = type === 'pickup' ? document.getElementById('locationPU') : document.getElementById('locationDO');
            var map = type === 'pickup' ? window.pickupMap : window.dropoffMap;
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({ 'address': locationInput.value }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    map.setCenter(location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>

    <!-- Load the Google Maps API only once -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlZ4VAT_LmNI0kKqUpPusyXa3BqYclROg&libraries=places&callback=initMap"></script>

</body>

</html>
