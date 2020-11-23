<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder=" Ingrese su nombre">
    <input type="email" name="email" placeholder=" ingrese su email">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $nombre = $_POST["nombre"];
   include_once "clases/ControladorEstudiante.php";
   $controladorEstudiante = new ControladorEstudiante();
   $controladorEstudiante->guardar($nombre);
}

if(!empty($_POST)){
    $email = $_POST["email"];
    include_once "clases/ControladorEstudiante.php";
    $controladorEstudiante = new ControladorEstudiante();
    $controladorEstudiante->guardar($email);
 }
