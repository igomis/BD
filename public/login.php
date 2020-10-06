<?php
require_once dirname(__FILE__) . "/../config/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!login($usuaris,$_POST['usuario'], $_POST['clave'])){
        echo "<p>revise usuario y contraseña</p>";
        $usuario = $_POST['usuario'];
    }else{
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: index.php");
    }
}
require_once dirname(__FILE__) . "/../templates/cabecera.php";
?>

<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                Usuario:
                <input value = "<?php if(isset($usuario))echo $usuario;?>"
                       id = "usuario" name = "usuario" type = "text">
                Clave :
                <input id = "clave" name = "clave" type = "password">
                <input type = "submit">
            </form>
        </div>
    </div>
</main>
</body>
</html>

