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
// Calling database connection
include 'partials/databaseConnection.php';
// Calling the head tag with the default values 
include 'partials/head.php';
// Override the active class in the include 
$folderStyle = ' ';
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

                    $stmt = $conn->query("SELECT * FROM projects");

                    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($projects as $project) {
                        if($project['button'] == null) {
                            echo '
                            <a href="' . $project["link"] . '" target="_blank">
                                <div class="card">
                                    <div class="cardHead circleSolution">
                                        <img src="data:image/jpeg;base64,'.base64_encode( $project['image'] ).'" alt="project image"> 
                                    </div>
                                    <div class="cardText">
                                        <h2> ' . $project['name'] . '</h2>
                                        <p> ' . $project['description'] . '</p>
                                    </div>
                                </div>
                            </a> ';
                        } else{
                            echo '
                            <a href="' . $project["link"] . '" target="_blank">
                                <div class="card">
                                    <div class="cardHead circleSolution">
                                        <img src="data:image/jpeg;base64,'.base64_encode( $project['image'] ).'" alt="project image"> 
                                    </div>
                                    <div class="cardText">
                                        <h2> ' . $project['name'] . '</h2>
                                        <p> ' . $project['description'] . '</p>
                                        <button class="cardButton" onclick="' . $project['button_link'] . '"> ' . $project['button'] . ' </button>
                                    </div>
                                </div>
                            </a> ';
                    }};
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
                <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Jhon Dhoe" required>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="jhondhoe@jhon.com" required>
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" placeholder="Contact" required>
                    <label for="message">Message:</label>
                    <textarea name="message" cols="30" rows="10" placeholder="Your message..." required></textarea>
                    <label for="submit"></label>
                    <input class="submit" type="submit" name="submit" value="Submit">
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