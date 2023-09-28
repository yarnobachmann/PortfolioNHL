<!DOCTYPE html>
<html lang="NL">    
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
            <h1>Projecten</h1>
            <!-- A bundle of cards with all the Projects -->
            <div class="cards">
                <a href="#">
                    <div class="card">
                        <div class="cardHead circleSolution">

                        </div>
                        <div class="cardText">
                            <h2>circle solutions</h2>
                            <hr>
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
                            <hr>
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
                            <hr>
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
                            <hr>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Obcaecati omnis optio, voluptates voluptate natus animi 
                                non laboriosam culpa unde maiores, neque cum ratione error 
                                iure eius quidem laudantium, magni quos.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>
</html>