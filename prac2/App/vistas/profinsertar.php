<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder=" nombre profesor">
    <input type="text" name="idioma" placeholder=" Idioma que enseña">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $nombre = $_POST["nombre"];
   include_once "clases/ControladorProfesor.php";
   $controladorProfesor = new ControladorProfesor();
   $controladorProfesor->guardar($nombre);
}

if(!empty($_POST)){
    $idioma = $_POST["idioma"];
    include_once "clases/ControladorProfesor.php";
    $controladorProfesor = new ControladorProfesor();
    $controladorProfesor->guardar($idioma);
 }
