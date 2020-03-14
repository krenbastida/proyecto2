<?php
include("conect_db.php");

if (isset($_POST['register'])){
    if (strlen($_POST['name']) >= 1 && (strlen($_POST['email']) >= 1 ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fechareg = date("d/m/y")
        $consulta = "INSERT INTO datos(nombre, email, fecha_registro) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            ?>
            <h3 class="ok">!YA ESTAS REGISTRADO!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">!HA OCURRIDO UN ERROR!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">!NO HAZ COMPLETADO LOS CAMPOS!</h3>
            <?php
        }

    }
 
}
echo "HOLA MUNDO";
?>