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
                <a href="#">
                    <div class="card">
                        <div class="cardHead circleSolution">

                        </div>
                        <div class="cardText">
                            <h2>circle solutions</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Obcaecati omnis optio, voluptates voluptate natus animi 
                                non laboriosam culpa unde maiores, neque cum ratione error 
                                iure eius quidem laudantium, magni quos.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="card">
                        <div class="cardHead">

                        </div>
                        <div class="cardText">
                            <h2>Project 2</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Obcaecati omnis optio, voluptates voluptate natus animi 
                                non laboriosam culpa unde maiores, neque cum ratione error 
                                iure eius quidem laudantium, magni quos.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="card">
                        <div class="cardHead">

                        </div>
                        <div class="cardText">
                            <h2>Project 3</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Obcaecati omnis optio, voluptates voluptate natus animi 
                                non laboriosam culpa unde maiores, neque cum ratione error 
                                iure eius quidem laudantium, magni quos.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="card">
                        <div class="cardHead">

                        </div>
                        <div class="cardText">
                            <h2>Project 4</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Obcaecati omnis optio, voluptates voluptate natus animi 
                                non laboriosam culpa unde maiores, neque cum ratione error 
                                iure eius quidem laudantium, magni quos.
                            </p>
                        </div>
                    </div>
                </a>
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