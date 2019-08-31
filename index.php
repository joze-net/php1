<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="validacionFormulario.php" method="POST" name="formulario" id="formulario">
            
            <table>
                <tr>
                    <td>
                        <label for="usuario">Usuario: </label>
                    </td>
                    <td>
                        <input type="text" name="usuario" id="usuario">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contraseña">Contraseña:</label>
                    </td>
                    <td>
                        <input type="password" name="contraseña" id="contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="enviar" id="enviar">
                    </td>
                </tr>
            </table>
            
        </form>  
        <?php
        echo 'hola';
        ?>
        
    </body>
</html>
