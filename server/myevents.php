<?php
session_start(); // Start the session

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html'); // Change 'login.php' to your actual login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file here -->
</head>

<body>

    <section class="products">
        <div class="product-container">
            <div class="pro">
                <img src="./images/Pimage1.jpg" alt="" width="350px" height="256px">
                <div class="des">
                    <button class="outingEvent"><span>OUTINGS</span></button>
                    <h3>Let us organize fun outings for you</h3>
                </div>
            </div>
            <div class="pro">
                <img src="./images/Pimage3.jpg" alt="" width="350px" height="256px">
                <div class="des">
                    <button class="weddingEvent"><span>WEDDINGS</span></button>
                    <h3>Let this one time event be memorable</h3>
                </div>
            </div>
            <div class="pro">
                <img src="images/graduation.jpg" alt="" width="350px" height="256px">
                <div class="des">
                    <button class="graduationEvent"><span>GRADUATIONS</span></button>
                    <h3>Graduation day is a one-time special day</h3>
                </div>
            </div>
            <div class="pro">
                <img src="./images/funeral.jpg" alt="Weuh" width="350px" height="256px">
                <div class="des">
                    <button class="funeralEvent"><span>FUNERALS</span></button>
                    <h3>A send-off that is custom-made</h3>
                </div>
            </div>
            <div class="pro">
                <img src="images/Birthday.jpg" alt="Weuh" width="350px" height="256px">
                <div class="des">
                    <button class="birthdayEvent"><span>BIRTHDAYS</span></button>
                    <h3>Birthday party with friends and family</h3>
                </div>
            </div>
        </div>
    </section>
    <script src=".index.js"></script> <!-- Include your JavaScript file here -->
</body>

</html>
