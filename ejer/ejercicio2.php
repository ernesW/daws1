<html>
    <head><title>Ejercicio 2</title></head>
        <body>
            <?php
                $nombre = "ernes";
                $direccion = "water7 n24";
                $mail = "lbl@gmail.com";
            ?>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo $nombre;
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $direccion;
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $mail;
                        ?>
                    </td>
                </tr>
            </table>          
        </body>
</html>




