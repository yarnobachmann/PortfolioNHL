<?php
// Calling database connection
include 'partials/databaseConnection.php';
// Calling the head tag with the default values 
include 'partials/head.php';
// Override the active class in the include 
$contactClass = ' ';
$phpClass = 'active';
$homeClass = ' ';
// Calling the navbar from a seperate file
include 'partials/navbar.php';

 ?>    
        <main>  
            <h1 class="titlePage">Subjects</h1>
            <div class="cards">
                <?php 
                    $stmt = $conn->query("SELECT * FROM assignments");

                    $assignments = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach ($assignments as $assignment) {
                        echo '<a href="' . $assignment["link"] . '">
                        <div class="card">
                            <div class="cardHead circleSolution">
                                <img src="data:image/jpeg;base64,'.base64_encode( $assignment['image'] ).'" alt="opdracht afbeelding"> 
                            </div>
                            <div class="cardText">
                                <h2> ' . $assignment['name'] . '</h2>
                                <p> ' . $assignment['description'] . '</p>
                            </div>
                        </div>
                    </a> ';
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