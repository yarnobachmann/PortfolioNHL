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

 // Default values
 $defaultBackgroundColor = "#ffffff"; 
 $defaultFontType = "Arial, sans-serif"; 
 $defaultFontSize = "16px"; 

 $backgroundColor = $defaultBackgroundColor;
 $fontType = $defaultFontType;
 $fontSize = $defaultFontSize;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_guests'])) {
        $_SESSION['guests'] = $_POST['guests'];
        header('Location: ./allergies.php');
        exit();
    }
    if (isset($_POST['submit_custom'])) {
        $selectedBackgroundColor = $_POST["background-color"];
        $selectedFontType = $_POST["font-type"];
        $selectedFontSize = $_POST["font-size"] . 'px';

        // Set and save cookies for amount of time
        setcookie("background-color", $selectedBackgroundColor, time() + (10 * 60));
        setcookie("font-type", $selectedFontType, time() + (10 * 60));
        setcookie("font-size", $selectedFontSize, time() + (10 * 60));

        // set for this session
        $backgroundColor = $selectedBackgroundColor;
        $fontType = $selectedFontType;
        $fontSize = $selectedFontSize;
        header('Location: #guests');
    }
}else {
    // check if correctly saved in cookies
    $backgroundColor = isset($_COOKIE["background-color"]) ? $_COOKIE["background-color"] : $defaultBackgroundColor;
    $fontType = isset($_COOKIE["font-type"]) ? $_COOKIE["font-type"] : $defaultFontType;
    $fontSize = isset($_COOKIE["font-size"]) ? $_COOKIE["font-size"] : $defaultFontSize;
};
 ?>    
        <main>  
            <a class="cardButton backButton" href="./assignments.php"><< Back</a>
            <h1 class="titlePage">Assignments</h1>
            
            <div class="assignments">
                <h2>1.1.1</h2>
                <p>
                    <?php
                        // Changed some syntax errors till it works
                        echo "<h1>Califoria Occuptional Guide</h2>"; 
                        echo "<h2>Locksmiths</h2>"; 
                        echo "<p>A locksmith installs, services, and repairs varioustypes of locks and ... .";
                    ?>
                </p>
                <hr>
                <p>
                    <?php
                        // Calculate the given number till it end up in 24
                        $a = (6 * 4) + (4 % 1);
                        $b = 8 * 6 / 2 * 1;
                        $c = 6 + 8 + 8 + 2;
                        // Displays the values
                        echo "<p>$a</p>";
                        echo "<p>$b</p>";
                        echo "<p>$c</p>";
                    ?>
                </p>
                <hr>
                <?php
                    // Values
                    $a = 2;
                    $b = 6;
                    // Calculate values to make them equal
                    $a= $a + $b;
                    $b= $a - $b;
                    $a= $a - $b;
                    // Displays the values
                    echo "<p>$a</p>";
                    echo "<p>$b</p>";
                ?>
            </div>
            <div class="assignments">
                <h2>1.1.2</h2>
                <p>
                    <?php
                        // User input
                        $number = 10;
                        // Checks conditions of the if statement and displays text that corrospont with the user input
                        if($number == 1 || $number == 2 || $number == 3) {
                            echo "Complete failure";
                        }
                        elseif($number == 4 || $number == 5) {
                            echo "Not good";
                        }
                        elseif ($number == 6 || $number == 7) {
                            echo "Fine";
                        }
                        elseif ($number == 8) {
                            echo "Good";
                        }
                        elseif ($number == 9) {
                            echo "Pretty good";
                        }
                        elseif ($number == 10) {
                            echo "Amazing";
                        }
                        else {
                            echo "Not a valid number";
                        }
                    ?>    
                </p>
                <p>
                    <?php
                        // User input
                        $number2 = 1;
                        // Checks the number in the case till a break point and shows the result
                        switch ($number2) {
                        case 1:
                        case 2:
                        case 3:    
                            echo "Complete failure";
                            break;
                        case 4:
                        case 5:
                            echo "Not good";
                            break;
                        case 6:
                        case 7:
                            echo "Fine";
                            break;
                        case 8:
                            echo "Pretty good";
                            break;
                        case 9:
                            echo "Amazing";
                            break;    
                        case 10:
                            echo "Amazeballs";
                        break;      
                        default:
                            echo "Not a valid number";
                        }
                    ?>
                </p>
                
                <hr>

                <p>
                    <?php
                        // Input for the user
                        $age = 20;
                        $color = "pink";
                        $pet = "cat";
                        // if statement that checks per age and then specifies the other variables
                        if ($age >= 11 && $age <= 20) {
                            if ($color == "blue") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune: 11 - 20, Blue, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 11 - 20, Blue, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            } elseif ($color == "pink") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune 11 - 20, Pink, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 11 - 20, Pink, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            }
                        } elseif ($age >= 21 && $age <= 30) {
                            if ($color == "blue") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune 21 - 30, Blue, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 21 - 30, Blue, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            } elseif ($color == "pink") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune 21 - 30, Pink, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 21 - 30, Pink, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            }
                        } elseif ($age >= 31 && $age <= 40) {
                            if ($color == "blue") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune 31 - 40, Blue, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 31 - 40, Blue, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            } elseif ($color == "pink") {
                                if ($pet == "dog") {
                                    $fortune = "Fortune 31 - 40, Pink, Dog";
                                } elseif ($pet == "cat") {
                                    $fortune = "Fortune 31 - 40, Pink, Cat";
                                } else {
                                    $fortune = "Rest of the fortunes";
                                }
                            }
                        } else {
                            $fortune = "Sorry, I can't tell your fortune.";
                        }

                        // Shows the future of the user
                        echo $fortune;
                    ?>
                </p>
            </div>
            <div class="assignments">
                <h2>1.1.3</h2>
                <p>
                    <?php
                        //functions
                        function calculateFahrenheit($c){
                            echo "<p>";
                            echo $f = $c * 9 / 5 + 32;
                            echo "</p>";
                        }

                        function calculateCelsius($f){
                            echo "<p>";
                            echo $c= ($f - 32) * 5 / 9;
                            echo "</p>";
                        }

                        function calculateMile($km){
                            echo "<p>";
                            echo $m = $km * 0.6214;
                            echo "</p>";
                        }

                        function calculateDiameter($s){
                            echo "<p>";
                            echo $o = (2 * $s) * 3.1415;
                            echo "</p>";
                        }

                        //Calling the functions with the user input
                        calculateFahrenheit(18);
                        calculateCelsius(44);
                        calculateMile(35);
                        calculateDiameter(20);
                    ?>
                </p>

                <hr>

                <p>
                    <?php
                        // Function that compares input
                        function compareDefault($number = 100) {
                            if ($number > 100) {
                                echo "The number you gave is higher than 100.";
                            } elseif ($number < 100) {
                                echo "The number you gave is lower than 100.";
                            } else {
                                echo "This is the default echo";
                            }
                        }
                        // Function calling with the default by leaving it empty
                        compareDefault(); 
                    ?>
                </p>

                <hr>

                <p>
                    <?php
                        // User input
                        $age = 16; 
                        $sex = "female"; 
                        $recentVisit = true; 

                        // Checks conditions of user input as short as posible
                        if ($age < 18 && $sex != "female" && !$recentVisit) {
                            echo "You are getting redirected to the children section.";
                        } elseif ($sex == "female") {
                            echo "There will be a lady's night event soon.";
                        } elseif ($recentVisit) {
                            echo "You have coupons!";
                        } else {
                            echo "Something went wrong :c.";
                        }
                    ?>
                </p>
            </div>
            <div class="assignments">
                <h2>1.1.4</h2>
                <p>
                    <?php
                        // Array of movies
                        $genres = ["horror", "comedy", "sci-fi", "romance", "action"];
                        // Loop through the genres and display them on screen 
                        $gLength = count($genres);
                        for($i = 0; $i < $gLength; $i++) {
                        echo "$genres[$i] ";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        // Array of movies
                        $genres = ["horror", "comedy", "sci-fi", "romance", "action"];
                        // Sort the array in alfabetical order
                        sort($genres);
                        // Loop through the genres and display them on screen 
                        $gLength = count($genres);
                        for($i = 0; $i < $gLength; $i++) {
                        echo "$genres[$i] ";
                        }
                    ?>
                </p>

                <hr>

                <p>
                    <?php
                        // A loop that loops 0 till it equals 9
                        for ($i = 0; $i <= 9; $i++) {
                            echo "*";
                        }                           
                    ?>
                </p>
                <p>
                    <?php
                        // A loop that loops the loop from 0 till it equals 3
                        for ($y = 0; $y <= 3; $y++) {
                        // A loop that loops 0 till it equals 9
                        for ($i = 0; $i <= 9; $i++) {
                            echo "*";
                        }
                        echo "<br>"; // Add a line break to display each row below the other don't see another way then use a break
                            }
                    ?>
                </p>
                <p>
                    <?php
                        // A loop that loops the loop from 0 till it equals 9
                        for ($i = 0; $i <= 9; $i++) {
                            // Increments the stars each time till the loop stops
                            for ($y = 0; $y <= $i; $y++) {
                                echo "*";
                            }
                            echo "<br>"; // Add a line break to display each row below the other don't see another way then use a break
                        }
                    ?>
                </p>
                <p>
                    <?php
                        // A loop that loops the loop from 9 till it equals 0
                        for ($i = 9; $i >= 0; $i--) {
                            // Increments the stars each time till the loop stops
                            for ($y = 0; $y <= $i; $y++) {
                                echo "*";
                            }
                            echo "<br>"; // Add a line break to display each row below the other don't see another way then use a break
                        }
                    ?>
                </p>

                <hr>

                <p>
                    <?php
                        // Arrays with the same amount of items
                        $socialImg = ["img/socials/facebook.png", "img/socials/twitter.png", "img/socials/instagram.png", "img/socials/linkedin.png"];
                        $socialName = ["Facebook", "Twitter", "Instagram", "LinkedIn"];
                        $socialURL = ["www.facebook.com", "www.twitter.com", "www.instagram.com", "www.linkedin.com"];
                        // Loops through the array and displays the values in the right places
                        $socials = count($socialName);
                        for($i = 0; $i < $socials; $i++) {
                        echo "<a href='$socialURL[$i]' target='_blank'> <img class='socialAssignment' src='$socialImg[$i]' alt='$socialName[$i]'> </a>";
                        }
                    ?>
                </p>

                <hr>

                <p>
                    <?php
                        // Var with function inside
                        function testScope() {
                            $x = 5;
                            echo "Inside the function: x = $x<br>";
                        }
                        // Calls function that knows the var so it would expectitly print 5
                        testScope();
                        // Echo the var but doesn't what it is so it would throw an error
                        if(@$x == NULL) { echo "Outside the function: Value is null <br>"; }else { echo "Outside the function: Value is $x <br>";};                            
                    ?>
                </p>
                <p>
                    <?php
                        // Var outside of the function
                        $x = 5; 
                        function testScope2() {
                            if(@$x == NULL) { echo "Inside the function: Value is null <br>"; }else { echo "Inside the function: Value is $x <br>";};     
                        }
                        // Calls function but doesn't what it is so it would throw an error
                        testScope2();
                        // Echo that knows the var so it would expectitly print 5
                        echo "Outside the function: x = $x <br>";                            
                    ?>
                </p>
            </div>
            <div class="assignments">
                <h2>1.2.1</h2>
                <?php
                    $distances = 
                    array("Berlin" => 
                        array(
                            "Berlin" => 0,
                            "Moscow" => 1607.99,
                            "Paris" => 876.96,
                            "Prague" => 280.34,
                            "Rome" => 1181.67
                        ),
                        "Moscow" => array(
                            "Berlin" => 1607.99,
                            "Moscow" => 0,
                            "Paris" => 2484.92,
                            "Prague" => 1664.04,
                            "Rome" => 2374.26
                        ),
                        "Paris" => array(
                            "Berlin" => 876.96,
                            "Moscow" => 641.31,
                            "Paris" => 0,
                            "Prague" => 885.38,
                            "Rome" => 1105.76
                        ),
                        "Prague" => array(
                            "Berlin" => 280.34,
                            "Moscow" => 1664.04,
                            "Paris" => 885.38,
                            "Prague" => 0,
                            "Rome" => 922
                        ),
                        "Rome" => array(
                            "Berlin" => 1181.67,
                            "Moscow" => 2374.26,
                            "Paris" => 1105.76,
                            "Prague" => 922,
                            "Rome" => 0
                        )
                    );
                    // If there is an post request it sets the values from the select an checks the distance between them
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        if ($_POST["city1"] ?? $_POST["city2"] ?? false) {
                            $city1 = $_POST["city1"];
                            $city2 = $_POST["city2"];

                            // Checks if there is a value and then checks the second city in the assosciated array
                            if (isset($distances[$city1][$city2])) {
                                $distance = $distances[$city1][$city2];
                            } elseif (isset($distances[$city2][$city1])) {
                                $distance = $distances[$city2][$city1];
                            } else {
                                $distance = null;
                            }
                            // Displays the distance and catches the error 
                            if ($distance !== null) {
                                echo "<p>Distance between $city1 and $city2: $distance km</p>";
                            } else {
                                echo "<p>Distance can't be calculated.</p>";
                            }
                        } else {
                            echo "<p>Distance can't be calculated.</p>";
                        }
                        
                    }
                ?>

                <form method="post" id="cityForm" action="#cityForm">
                    <label for="city1">City:</label>
                    <select name="city1" id="citySelect1">
                        <?php
                        // Gets each value from the array distances
                        foreach ($distances as $city => $distancesFromCity) {
                            // Checks if the post value equels the the value in the array, if it does it adds the string, if not leaves it empty
                            $selected = ($city1 === $city) ? 'selected' : '';
                            echo '<option value="' . $city . '" ' . $selected . '>' . $city . '</option>';
                        }
                        ?>
                    </select>

                    <label for="city2">Second city:</label>
                    <select name="city2" id="citySelect2">
                        <?php
                        foreach ($distances as $city => $distancesFromCity) {
                            $selected = ($city2 === $city) ? 'selected' : '';
                            echo '<option value="' . $city . '" ' . $selected . '>' . $city . '</option>';
                        }
                        ?>
                    </select>

                    <input class="cardButton" type="submit" value="Calculate Distance">
                </form>

                <hr>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ($_POST["name"] ?? $_POST["email"] ?? $_POST["feedback"] ?? $_POST["user"] ?? false) {
                            // Set input in variables
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $user = $_POST["user"];
                            $feedback = $_POST["feedback"];
                            $userEmail = isset($_POST["userEmail"]) ? "All user will me notified" : "Not all users will be notified";

                            $errors = array();

                            // Validate the name and checks if it is 2 characters
                            if (strlen($name) < 2) {
                                $errors[] = "Name has to be atleas 2 characters.";
                            }

                            // Validate if email is a email
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $errors[] = "Not a valid email.";
                            }

                            // Validate feedback if it is atleas 5 words
                            if (str_word_count($feedback) < 5) {
                                $errors[] = "Feedback needs to be atleast 5 words.";
                            }

                            // Error handling
                            if (!empty($errors)) {
                                foreach ($errors as $error) {
                                    echo "<p>$error</p>";
                                }
                            } else {
                                echo "<p>Dear $name,</p>";
                                echo "<p>You are placing feedback as a $user with the following email: $email.</p>";
                                echo "<p>This is your feedback: $feedback.</p>";
                                echo "<p>$userEmail.</p>";
                            }
                        }else {
                                echo "<p>Form was not filled in on submit.</p>";
                        }
                    }
                ?>
                <form action="#feedbackForm" method="post" id="feedbackForm">
                    <label for="name">Name: </label>
                    <input type="text" name="name" required minlength="2">
                    Emailadress: 
                    <input type="email" name="email" required>
                    Student or teacher:
                    <select name="user" required>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                    feedback: 
                    <textarea name="feedback" required minlength="5"></textarea>
                    Send mail to all user:
                    <input type="checkbox" name="userEmail">
                    <input class="cardButton" type="submit" value="Submit">
                </form>
            </div>
            <div class="assignments" id="upload">
                <h2>1.2.2</h2>
                <?php

                    // Folder with the uploads
                    $uploadDir = './uploads/';
                    $files = scandir($uploadDir);

                    // Group the files based on there extension
                    $fileGroups = array(
                        'png' => array(),
                        'jpeg' => array(),
                        'jpg' => array(),
                        'gif' => array()
                    );

                    foreach ($files as $file) {
                        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        if (array_key_exists($extension, $fileGroups)) {
                            $fileGroups[$extension][] = $file;
                        }
                    }

                    // Shows the files
                    echo '<h1>Gallery</h1>';
                    foreach ($fileGroups as $fileType => $fileList) {
                        echo "<h2>" . strtoupper($fileType) . " Files:</h2>";
                        echo "<ul>";
                        foreach ($fileList as $file) {
                            echo "<li> <img class='upload' src='./uploads/$file' alt='upload img'> $file <a href='./assignment/delete1-2-2.php?file=$file'>Remove</a></li>";
                        }
                        echo "</ul>";
                    }
                  
                ?>

                <form id="feedbackForm"  action="./assignment/upload1-2-2.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" accept=".png, .jpeg, .jpg, .gif" required>
                    <input class="cardButton" type="submit" value="Uploaden">
                </form>
            </div>
            <div class="assignments" id="guests">
                <h2>1.2.3</h2>
                <form id="feedbackForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="guests">Amount of guests:</label>    
                    <input type="number" name="guests" required>
                    <input type="submit" name="submit_guests" value="submit">
                </form>
                <hr>
                <style>
                    #guests {
                        background-color: <?php echo $backgroundColor; ?>;
                        font-family: <?php echo $fontType; ?>;
                        font-size: <?php echo $fontSize; ?>;
                    }
                    
                </style>
                <form id="feedbackForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="background-color">Background color:</label>
                    <input type="color" id="background-color" name="background-color" value="<?php echo $backgroundColor; ?>">

                    <label for="font-type">Font type:</label>
                    <select id="font-type" name="font-type">
                        <option value="Arial, sans-serif" <?php if ($fontType == 'Arial, sans-serif') echo 'selected'; ?>>Arial</option>
                        <option value="Verdana, sans-serif" <?php if ($fontType == 'Verdana, sans-serif') echo 'selected'; ?>>Verdana</option>
                        <option value="Times New Roman, serif" <?php if ($fontType == 'Times New Roman, serif') echo 'selected'; ?>>Times New Roman</option>
                    </select>

                    <label for="font-size">Font size:</label>
                    <input type="number" id="font-size" name="font-size" value="<?php echo $fontSize ?>">


                    <input type="submit" name="submit_custom" value="Save">
                </form>

            </div>    
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>

</html>