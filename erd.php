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
 ?>    
        <main>  
            <a class="cardButton backButton" href="./assignments.php"><< Back</a>
            <h1 class="titlePage">Assignments</h1>

            <div class="assignments">
                <h2>1.2.2</h2>
                <img class="max-width" src="img/erd/erd1.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd2.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd3.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd4.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd5.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd6.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd7.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd8.png" alt="erd">
                <hr>
                <img class="max-width" src="img/erd/erd9.png" alt="erd">
            </div>
            
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>

</html>