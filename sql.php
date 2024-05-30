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
                <h2>1.2.1</h2>
                <h3>Songs</h3> 
                <p>1 SELECT `name` FROM `songs`;</p>
                <p>2 SELECT `name` FROM `songs` ORDER BY `tempo`;</p>
                <p>3 SELECT `name` FROM `songs` ORDER BY `duration_ms` DESC LIMIT 5;</p>
                <p>4 SELECT `name` FROM `songs` WHERE danceability > 0.75 AND energy > 0.75 AND valence > 0.75;</p>
                <p>5 SELECT AVG(energy) FROM `songs`;</p>
                <p>6 SELECT `name` FROM `songs` WHERE `name` LIKE '%feat%';</p>
                <h3>Movies</h3>
                <p>1 SELECT `title`  FROM `movies` WHERE `year` = 2014;</p>
                <p>2 SELECT `birth` FROM `people` WHERE `name` LIKE '%Emma Stone%';</p>
                <p>3 SELECT `title` FROM `movies` WHERE `year` >= 2018 ORDER BY `title`;</p>
                <p>4 SELECT count(rating) as aantalfilms FROM ratings WHERE rating = 8.4;</p>
            </div>

            <div class="assignments">
                <h2>1.2.2</h2>
                <p>INSERT INTO movies (id, title, year)</p>
                <p>VALUES ('80684', 'Star Wars: Episode V - The Empire Strikes Back', '1980'),</p>
                <p>('86190', 'Star Wars: Episode VI - Return of the Jedi', '1983'),</p>
                <p>('120915', 'Star Wars: Episode I - The Phantom Menace', '1999'),</p>
                <p>('121765', 'Star Wars: Episode II - Attack of the Clones', '2002'),</p>
                <p>('121766', 'Star Wars: Episode III - Revenge of the Sith', '2005');</p>
                <p></p>
                <p>INSERT INTO people (id, name, birth)</p>
                <p>VALUES ('191', 'Ewan Gordon McGregor', '1971'),</p>
                <p>('204', 'Natalie Portman', '1981'),</p>
                <p>('159789', 'Hayden Christensen', '1981'),</p>
                <p>('184', 'George Lucas', '1944');</p>
                <p></p>
                <p>INSERT INTO stars (movie_id, person_id)</p>
                <p>SELECT m.id AS movie_id, p.id AS person_id</p>
                <p>FROM movies m, people p</p>
                <p>WHERE (m.id = '121766') AND (p.id IN ('191', '204', '159789'));</p>
                <p></p>
                <p>INSERT INTO directors (movie_id, person_id)</p>
                <p>SELECT m.id AS movie_id, p.id AS person_id</p>
                <p>FROM movies m, people p</p>
                <p>WHERE (m.title LIKE '%Star Wars%' ) AND (p.id = '148');</p>
                <p></p>
                <p>UPDATE ratings</p>
                <p>SET rating = 8.0</p>
                <p>WHERE movie_id IN (</p>
                    <p>SELECT id</p>
                    <p>FROM movies</p>
                    <p>WHERE title LIKE '%Star Wars%'</p>
                <p>);</p>
                <p></p>
                <p>UPDATE ratings</p>
                <p>SET rating = 10.0</p>
                <p>WHERE movie_id IN (</p>
                    <p>SELECT id</p>
                    <p>FROM movies</p>
                    <p>WHERE id = '86190'</p>
                <p>) AND rating = 8.0;</p>
            </div>
            
        </main>
        <!-- Calling the footer from a seperate file -->
        <?php
        include 'partials/footer.php'; 
        ?>  
    </body>

</html>