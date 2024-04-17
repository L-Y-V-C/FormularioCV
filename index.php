<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Formulario CV</title>
</head>

<body>
    <form method="post">
        <div class="form-section">
            <label for="NombreApellidos">Nombre y Apellidos:</label>
            <input type="text" name="NombreApellidos" id="NombreApellidos" size="30"><br>

            <label for="FechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>

            <label for="Ocupacion">Ocupación:</label>
            <input type="text" name="Ocupacion" id="Ocupacion"><br>

            <label for="Contacto">Contacto:</label>
            <input type="text" name="Contacto" id="Contacto" size="25"><br>

            <label for="Nacionalidad">Nacionalidad:</label>
            <select name="Nacionalidad" id="Nacionalidad">
                <option value="Peruana">Peruana</option>
                <option value="Chilena">Chilena</option>
                <option value="Argentina">Argentina</option>
                <option value="Brasileña">Brasileña</option>
            </select><br>

            <label for="NivelIngles">Nivel de inglés:</label><br>
            <input type="radio" name="NivelIngles" value="basico" id="Basico">
            <label for="Basico">Básico</label><br>
            <input type="radio" name="NivelIngles" value="intermedio" id="Intermedio">
            <label for="Intermedio">Intermedio</label><br>
            <input type="radio" name="NivelIngles" value="avanzado" id="Avanzado">
            <label for="Avanzado">Avanzado</label><br>
            <input type="radio" name="NivelIngles" value="fluido" id="Fluido">
            <label for="Fluido">Fluido</label><br>

            <label for="LenguajesProgramacion">Lenguajes de programación:</label><br>
            <select name="LenguajesProgramacion" id="LenguajesProgramacion" multiple>
                <option value="c">C</option>
                <option value="cpp">C++</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
            </select><br>

            <label for="Aptitudes">Aptitudes:</label>
            <input list="Aptitudes" name="Aptitudes" id="Aptitudes">
            <datalist id="Aptitudes">
                <option value="Responsabilidad">
                <option value="Trabajo en equipo">
                <option value="Adaptabilidad">
                <option value="Liderazgo">
                <option value="Comunicación efectiva">
            </datalist><br>

            <label for="Habilidades">Habilidades:</label><br>
            <input type="checkbox" name="Habilidades" value="Organizacion" id="Organizacion">
            <label for="Organizacion">Organización</label><br>
            <input type="checkbox" name="Habilidades" value="GestionTiempo" id="GestionTiempo">
            <label for="GestionTiempo">Gestión de tiempo</label><br>
            <input type="checkbox" name="Habilidades" value="PensamientoAnalitico" id="PensamientoAnalitico">
            <label for="PensamientoAnalitico">Pensamiento analítico</label><br>
            <input type="checkbox" name="Habilidades" value="ResolucionConflictos" id="ResolucionConflictos">
            <label for="ResolucionConflictos">Resolución de conflictos</label><br>

            <label for="Perfil">Perfil:</label><br>
            <textarea name="Perfil" id="Perfil" rows="4" cols="50"></textarea><br>

            <input type="submit" name="registrar" value="Ingresar">
        </div>
    </form>

    <?php
        include("register.php");
    ?>

</body>
</html>
