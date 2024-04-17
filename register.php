<?php
    include("db_connect.php");

    if(isset($_POST['registrar'])){
        $NombreApellidos = trim($_POST['NombreApellidos']);
        $FechaNacimiento = $_POST['FechaNacimiento'];
        $Ocupacion = trim($_POST['Ocupacion']);
        $Contacto = trim($_POST['Contacto']);
        $Nacionalidad = $_POST['Nacionalidad'];
        $NivelIngles = $_POST['NivelIngles'];
        $LenguajesProgramacion = implode(',', $_POST['LenguajesProgramacion']);
        $Aptitudes = $_POST['Aptitudes'];
        $Habilidades = implode(',', $_POST['Habilidades']);
        $Perfil = $_POST['Perfil'];
        $consulta = "INSERT INTO 
            datos(NombreApellidos, FechaNacimiento, Ocupacion, Contacto, 
            Nacionalidad, NivelIngles, LenguajesProgramacion, Aptitudes, 
            Habilidades, Perfil) 
            VALUES ('$NombreApellidos','$FechaNacimiento','$Ocupacion',
            '$Contacto','$Nacionalidad','$NivelIngles','$LenguajesProgramacion',
            '$Aptitudes','$Habilidades','$Perfil')";
        $resultado = mysqli_query($conexion, $consulta);
        
        if ($resultado) {
            echo "Datos ingresados correctamente.";
        } else {
            echo "Error al ingresar datos: " . mysqli_error($conexion);
        }
    }
?>