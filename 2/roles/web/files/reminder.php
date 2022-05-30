<html>
<head>
    <body>
        <p>
            Julia! Ne felejtsd el, hogy meg kell erősíteni a webszerver biztonságát. Ha elfelejtetted a hozzáférési adataid, egy txt fájlba tettem őket. Arra a helyre, ahová korábban tettem.
        </p>

        <img src="rejtekhely/565b0f4691fe5.jpg" />

        <p>
            Ezenkívül meg tudod javítani ezt a keresőmezőt? Néha hibákat okoz attól függően, hogy mit írok be...
        </p>
        <p>
            Magam is megcsinálnám, de azzal voltam elfoglalva, hogy megpróbáljak létrehozni egy kódot, amely lehetővé teszi számunkra a jelszavaink biztonságos tárolását, miközben te folyamatosan elfelejted a sajátod...
        </p>

        <?php
            if ($_POST['username']) {
                echo '<strong>';

                if (strpos($_POST['username'], "'") !== false) {
                    echo "ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '".htmlentities($_POST['username'], ENT_QUOTES)."' at line 1";
                } else {
                    echo 'No users with that name found';
                }

                echo '</strong>';
                echo '<br />';
            }
        ?>

        <form action="reminder.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="submit" value="Lookup User">
        </form>
    </body>
</html>
