<?php
session_start();
require_once dirname(__FILE__) . "/../config/config.php";
require_once dirname(__FILE__) . "/../templates/cabecera.php";
?>

<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                Usuario:
                <input id = "usuario" name = "usuario" type = "text">
                Clave :
                <input id = "clave1" name = "clave1" type = "password">
                Clave :
                <input id = "clave2" name = "clave2" type = "password">
                <input type = "submit">
            </form>
        </div>
    </div>
</main>
</body>
</html>

