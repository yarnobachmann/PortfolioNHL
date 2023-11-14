<?php
/* 
* Filename      : index.php
* Assignment    : portfolio
* Created       : mid september
* Description   : dit is de portfolio van de portfolio opdracht
* Programmer    : Yarno Bachmann
*/
?>
<?php
// Calling the head tag with the default values 
include 'partials/head.php';
// Override the active class in the include 
$contactClass = ' ';
$phpClass = ' ';
$homeClass = 'active';
// Calling the navbar from a seperate file
include 'partials/navbar.php';
// Set the values inside the header
$title = 'Yarno Bachmann';
$subTitle = 'Web/Game developer';
// Calling the header from a seperate file
include 'partials/header.php'; 
 ?>    
        <main>  
            <h1 class="titlePage">Projecten</h1>
            <!-- A bundle of cards with all the Projects -->
            <div class="cards">
                <?php 
                    $projects[0] = array(
                        "link" => "./projecten/circle-solutions/index.php",
                        "title" => "circle solutions",
                        "beschrijving" => "In periode 1 heb ik dit project mogen maken samen met mijn projectleden van groep INF1A.
                        Dit is een website die we hebben gebouwt voor de fictionele opdrachtgever circle solutions.
                        circle solutions is een bedrijfje dat intranetten maakt voor iedereen.",
                        "image" => "./img/circleSolutions/logo.png"
                    );
                    $projects[1] = array(
                        "link" => "#",
                        "title" => "Project 2",
                        "beschrijving" => "Dit project is nog niet van toepassing.",
                        "image" => "./img/placeholder.png"
                    );
                    $projects[2] = array(
                        "link" => "#",
                        "title" => "Project 3",
                        "beschrijving" => "Dit project is nog niet van toepassing.",
                        "image" => "./img/placeholder.png"
                    );
                    $projects[3] = array(
                        "link" => "#",
                        "title" => "Project 4",
                        "beschrijving" => "Dit project is nog niet van toepassing.",
                        "image" => "./img/placeholder.png"
                    );

                    foreach ($projects as $project) {
                        echo '<a href="' . $project["link"] . '" target="_blank">
                        <div class="card">
                            <div class="cardHead circleSolution">
                                <img src="' . $project["image"] . '" alt="project afbeelding">
                            </div>
                            <div class="cardText">
                                <h2> ' . $project['title'] . '</h2>
                                <p> ' . $project['beschrijving'] . '</p>
                            </div>
                        </div>
                    </a> ';
                    }
                ?>
            </div>
            <?php
                $name = $email = $subject = $message = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = input($_POST["name"]);
                    $email = input($_POST["email"]);
                    $subject = input($_POST["subject"]);
                    $message = input($_POST["message"]);
                  }

                function input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    function_alert($data);
                    return $data;
                }  
            ?>
            <div class="contactForm">
            <h1 class="titleContact">Contact</h1>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="name">Naam:</label>
                    <input type="text" name="name" placeholder="Jhon Dhoe" required>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="jhondhoe@jhon.com" required>
                    <label for="subject">Onderwerp:</label>
                    <input type="text" name="subject" placeholder="Contact" required>
                    <label for="message">Bericht:</label>
                    <textarea name="message" cols="30" rows="10" placeholder="Hier je bericht" required></textarea>
                    <label for="submit"></label>
                    <input class="submit" type="submit" name="submit" value="Verstuur">
                </form>
                <?php
                    function function_alert($message) { 
                        
                        // Display the alert box  
                        echo "<script>alert('$message');</script>"; 
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