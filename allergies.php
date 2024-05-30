<?php
session_start();
// Calling the head tag with the default values 
include 'partials/head.php';
// Override the active class in the include 
$contactClass = ' ';
$phpClass = 'active';
$homeClass = ' ';
// Calling the navbar from a seperate file
include 'partials/navbar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['allergies'] = $_POST['allergies'];
    $_SESSION['reservations'] = $_POST['reservations'];
    $_SESSION['contacts'] = $_POST['contacts'];
}

// Retrieve the number of guests from the session
$numGuests = isset($_SESSION['guests']) ? $_SESSION['guests'] : 0;
?> 
        <main>  
            <a class="cardButton backButton" href="./php.php#guests"><< Back</a>
            <h1 class="titlePage">Assignment Details</h1>
            <div class="assignments">
                <?php
                // Display submitted details
                if (isset($_SESSION['allergies']) && is_array($_SESSION['allergies'])) {
                    echo "<h2>Submitted Details:</h2>";
                    for ($i = 0; $i < $numGuests; $i++) {
                        echo "<h3>Guest " . ($i + 1) . ":</h3>";
                        echo "<p>Allergies: " . htmlspecialchars($_SESSION['allergies'][$i]) . "</p>";
                        echo "<p>Reservation Type: " . htmlspecialchars($_SESSION['reservations'][$i]) . "</p>";
                        echo "<p>Contact Info: " . htmlspecialchars($_SESSION['contacts'][$i]) . "</p>";
                    }
                } else {
                    // Display the form if details have not been submitted
                    echo "<form id='feedbackForm' method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
                    for ($i = 1; $i <= $numGuests; $i++) {
                        echo "<h3>Guest $i Details:</h3>";
                        echo "Allergies: <input type='text' name='allergies[]'>";
                        echo "Reservation Type: <input type='text' name='reservations[]'>";
                        echo "Contact Info: <input type='text' name='contacts[]'>";
                    }
                    echo "<input type='submit' value='Submit'>";
                    echo "</form>";
                }
                ?>
            </div>    
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>

</html>