<?php
session_start();
require_once dirname(__FILE__) . "/../config/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!login($usuaris,$_POST['usuario'], $_POST['clave'])){
        $_SESSION['contador'] = $_SESSION['contador']+1??1;
        if ($_SESSION['contador'] < 3) {
            $usuario = $_POST['usuario'];
        }
        else {
            unset($_SESSION['contador']);
        }
     }else{
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        unset($_SESSION['contador']);
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

