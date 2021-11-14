<!-- 
    ISTE.140 - Project
    Kyoto, Japan - Nintendo
    evolution.php 
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/navigation.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Evolution</title>
    </head>

    <body>
        <img src="images/logo.png" alt="nintendo_logo">

        <?php include "inc/nav.php";?>

        <div class="container">
            <h1>Evolution</h1>
            
            <img src="images/nes.jpg" alt="nes">
            <img src="images/wii.jpg" alt="wii">
            
            <div id="overflow-table">
                <table border = "1" id="evolution">
                    <tr>
                        <th>Console</th>
                        <th>Year Released</th>
                        <th>Price</th>
                        <th>Features</th>
                        <th>Popular Games</th>
                    </tr>
                    <tr>
                        <td>Nintendo Entertainment System</td>
                        <td>1987</td>
                        <td>~$90.00</td>
                        <td>First home game console, sold 60 million units, set the standard for console and business practices, set in motion
                            nintendos most popular games
                        </td>
                        <td>Super Mario Bros, The Legend of Zelda, Metroid, Tetris, Pacman, Megaman</td>
                    </tr>
                    <tr>
                        <td>Nintendo 64</td>
                        <td>1996</td>
                        <td>~$200.00</td>
                        <td>Increased speed, resolution and storage, sold roughly 32 million units, base model came with games, very popular with
                            the international market
                        </td>
                        <td>Super Mario 64, Mario Kart 64, Goldeneye, Donkey Kong 64, Pokemon Snap, Star Wars</td>
                    </tr>
                    <tr>
                        <td>Wii</td>
                        <td>2006</td>
                        <td>~$250.00</td>
                        <td>Handheld motion controls, increased expansion to connect with other devices, internet connection, lower graphics,
                            first of its kind, set to take over the gaming industry
                        </td>
                        <td>Wii sports, Mario Kart, Super Mario Bros III, Super Smash Bros, Wii Fit, Mario Party, Zelda</td>
                    </tr>
                    <tr>
                        <td>Switch</td>
                        <td>2017</td>
                        <td>~$300.00</td>
                        <td>Hybrid device from handheld to home console, wireless controls, increased graphics and resolution, incredibly popular
                            as it only requires internet connection to work
                        </td>
                        <td>Animal Crossing, Pokemon sword and shield, Luigis Mansion 3, Super Mario Odyssey, Mario Kart 8, Zelda: Breath of the Wild</td>
                    </tr>
                </table>
            </div>
            
            <img src="images/switch.jpg" alt="switch">
            <img src="images/n64.jpg" alt="n64">
        </div>
    </body>

    <footer id = "sources">
        <h2>Sources</h2>
        <li><a href="https://en.wikipedia.org/wiki/Nintendo">Wikipedia</a></li>
        <li><a href="https://www.ssbwiki.com/Sora_(SSBU)">SSBU Wiki</a></li>
        <li><a href="https://www.thecrimson.com/article/2021/10/5/wthh-chris-pratt-mario/">Chris Pratt as Mario</a></li>
    </footer>
</html>