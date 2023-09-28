<!DOCTYPE html>
<html lang="NL">
<?php
// Calling the head tag with the default values 
include 'partials/head.php';
// Override the active class in the include 
$contactClass = ' ';
$phpClass = 'active';
$homeClass = ' ';
// Calling the navbar from a seperate file
include 'partials/navbar.php';
// Set the values inside the header
$title = 'Php';
$subTitle = 'Gemaakte opdrachten php';
// Calling the header from a seperate file
include 'partials/header.php'; 
 ?>    
        <main>  
            <h1 class="titlePage">Opdrachten</h1>
            <div class="assignments">
                <h3>Week 1</h3>
                <p>
                    <?php
                        // Changed some syntax errors till it works
                        echo "<h1>Califoria Occuptional Guide</h2>"; 
                        echo "<h2>Locksmiths</h2>"; 
                        echo "<p>A locksmith installs, services, and repairs varioustypes of locks and ... .";
                    ?>
                </p>
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
                <p>
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
                </p>
                <h3>Week 2</h3>
                <p>
                    <?php
                        // User input
                        $cijfer = 10;
                        // Checks conditions of the if statement and displays text that corrospont with the user input
                        if($cijfer == 1 || $cijfer == 2 || $cijfer == 3) {
                            echo "Zeer slecht";
                        }
                        elseif($cijfer == 4 || $cijfer == 5) {
                            echo "Onvoldoende";
                        }
                        elseif ($cijfer == 6 || $cijfer == 7) {
                            echo "Voldoende";
                        }
                        elseif ($cijfer == 8) {
                            echo "Goed";
                        }
                        elseif ($cijfer == 9) {
                            echo "Zeer goed";
                        }
                        elseif ($cijfer == 10) {
                            echo "Uitmuntend";
                        }
                        else {
                            echo "Ongeldig cijfer";
                        }
                    ?>    
                </p>
                <p>
                    <?php
                        // User input
                        $cijfer2 = 1;
                        // Checks the number in the case till a break point and shows the result
                        switch ($cijfer2) {
                        case 1:
                        case 2:
                        case 3:    
                            echo "Zeer slecht";
                            break;
                        case 4:
                        case 5:
                            echo "Onvoldoende";
                            break;
                        case 6:
                        case 7:
                            echo "Voldoende";
                            break;
                        case 8:
                            echo "Goed";
                            break;
                        case 9:
                            echo "Zeer goed";
                            break;    
                        case 10:
                            echo "Uitmuntend";
                        break;      
                        default:
                            echo "Ongeldig cijfer";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        // Input for the user
                        $leeftijd = 20;
                        $kleur = "roze";
                        $huisdier = "kat";
                        // if statement that checks per age and then specifies the other variables
                        if ($leeftijd >= 11 && $leeftijd <= 20) {
                            if ($kleur == "blauw") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 11 - 20, Blauw, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 11 - 20, Blauw, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            } elseif ($kleur == "roze") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 11 - 20, Roze, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 11 - 20, Roze, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            }
                        } elseif ($leeftijd >= 21 && $leeftijd <= 30) {
                            if ($kleur == "blauw") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 21 - 30, Blauw, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 21 - 30, Blauw, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            } elseif ($kleur == "roze") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 21 - 30, Roze, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 21 - 30, Roze, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            }
                        } elseif ($leeftijd >= 31 && $leeftijd <= 40) {
                            if ($kleur == "blauw") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 31 - 40, Blauw, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 31 - 40, Blauw, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            } elseif ($kleur == "roze") {
                                if ($huisdier == "hond") {
                                    $voorspelling = "Voorspelling 31 - 40, Roze, Hond";
                                } elseif ($huisdier == "kat") {
                                    $voorspelling = "Voorspelling 31 - 40, Roze, Kat";
                                } else {
                                    $voorspelling = "Overige voorspelling";
                                }
                            }
                        } else {
                            $voorspelling = "Sorry, ik kan geen voorspelling doen voor jouw.";
                        }

                        // Shows the future of the user
                        echo "Voorspelling voor de toekomst: " . $voorspelling;
                    ?>
                </p>
                <h3>Week 3</h3>
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
                <p>
                    <?php
                        // Function that compares input
                        function vergelijkGetalMetStandaard($getal = 100) {
                            if ($getal > 100) {
                                echo "Het gegeven getal is hoger dan 100.";
                            } elseif ($getal < 100) {
                                echo "Het gegeven getal is lager dan 100.";
                            } else {
                                echo "Dit is de default echo";
                            }
                        }
                        // Function calling with the default by leaving it empty
                        vergelijkGetalMetStandaard(); 
                    ?>
                </p>
                <p>
                    <?php
                        // User input
                        $leeftijd = 16; 
                        $geslacht = "vrouw"; 
                        $recentBezocht = true; 

                        // Checks conditions of user input as short as posible
                        if ($leeftijd < 18 && $geslacht != "vrouw" && !$recentBezocht) {
                            echo "Je wordt doorgestuurd naar de kinderafdeling.";
                        } elseif ($geslacht == "vrouw") {
                            echo "Binnenkort zal er een lady's night evenement starten.";
                        } elseif ($recentBezocht) {
                            echo "Je hebt recht op een korting!";
                        } else {
                            echo "Er is een fout opgetreden.";
                        }
                    ?>
                </p>
                <h3>Week 4</h3>
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
                <p>
                    <?php
                        // Var with function inside
                        function testScope() {
                            $x = 5;
                            echo "Binnen de functie: x = $x<br>";
                        }
                        // Calls function that knows the var so it would expectitly print 5
                        testScope();
                        // Echo the var but doesn't what it is so it would throw an error
                        echo "Buiten de functie: x = $x<br>";                            
                    ?>
                </p>
                <p>
                    <?php
                        // Var outside of the function
                        $x = 5; 
                        function testScope2() {
                            echo "Binnen de functie: x = $x<br>";
                        }
                        // Calls function but doesn't what it is so it would throw an error
                        testScope2();
                        // Echo that knows the var so it would expectitly print 5
                        echo "Buiten de functie: x = $x<br>";                            
                    ?>
                </p>
            </div>
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>

</html>