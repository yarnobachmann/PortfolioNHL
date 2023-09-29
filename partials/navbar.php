<body>
    <!-- Navbar with the logo and menu -->
    <nav>
        
        <ul>
            <li>
                <a href='index.php' class="logo"><img src="img/logo/logoSmall.svg" alt="logo">Yarno Bachmann</a>
            </li>
            <li>
            <?php
                // Arrays with all the nav items
                $navName = ["Home", "Php"];
                $className = ["$homeClass", "$phpClass"];
                $link = ["index.php", "opdrachten.php"];
                // Loops through the array and displays the values in the right places
                $navItems = count($navName);
                for($i = 0; $i < $navItems; $i++) {
                echo "<a href='$link[$i]' class='$className[$i]'>$navName[$i]</a>";
                }
            ?>
            </li>
        </ul>
    </nav>

    