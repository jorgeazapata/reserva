<!DOCTYPE html>
      <?php
      /*Nombre y apellido : Jorge Andrés Zapata Rodríguez
      * Nombre del programa : Desarrollo web con php
      * Nombre de la evidencia : Taller "uso de arreglos"
        */
    //Array que contiene nuestros datos, imaginate que es una base de datos o similar...
    $data = [
        [
            'col1' => "  ",
            'col2' => 1,
            'col3' => 2,
            'col4' => 3,
            'col5' => 4,
            'col6' => 5
        ],
                [
            'col1' => 1,
            'col2' => 'L',
            'col3' => 'L',
            'col4' => 'L',
            'col5' => 'L',
            'col6' => 'L'
        ],        [
            'col1' => 2,
            'col2' => 'L',
            'col3' => 'L',
            'col4' => 'L',
            'col5' => 'L',
            'col6' => 'L'
        ],        [
            'col1' => 3,
            'col2' => 'L',
            'col3' => 'L',
            'col4' => 'L',
            'col5' => 'L',
            'col6' => 'L'
        ],        [
            'col1' => 4,
            'col2' => 'L',
            'col3' => 'L',
            'col4' => 'L',
            'col5' => 'L',
            'col6' => 'L'
        ],        [
            'col1' => 5,
            'col2' => 'L',
            'col3' => 'L',
            'col4' => 'L',
            'col5' => 'L',
            'col6' => 'L'
        ],
        
    ];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <center>
            <img src ="cinema.png">    
        <h1>SISTEMA DE RESERVA</h1>
            <table border="1">
                <tr>
                    <th colspan="6">ESCENARIO</th>
                </tr>
                 <?php

                $concat = '';

                foreach ($data as $silla) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat .= '<tr>';
                    $concat .= '<td>' . $silla['col1'] .'</td>';
                    $concat .= '<td>' . $silla['col2'] .'</td>';
                    $concat .= '<td>' . $silla['col3'] .'</td>';
                    $concat .= '<td>' . $silla['col4'] .'</td>';
                    $concat .= '<td>' . $silla['col5'] .'</td>';
                    $concat .= '<td>' . $silla['col6'] .'</td>';
                    $concat .= '</tr>';
                }

                echo $concat;
            ?>

            </table>
            <br>            
            <form action="accion.php" method="post">
            <div>
                <label><b>Fila:</b>
                    <select name="fila">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </label>
            </div>
            
            <div>
                <label><b>Puesto:</b>
                    <select name="puesto">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </label>
            </div>
                <br>
            <div>
                <label>
                    <b>Reservar</b><input type="radio" name="accion"value="reservar">
                    <br>
                    <b>Comprar</b><input type="radio" name="accion"value="comprar">
                    <br>
                    <b>Liberar</b><input type="radio" name="accion"value="liberar">
                </label>
            </div>
                <br>
            <div class="submit">
                <input type="submit" value ="Enviar">
                <input type="reset" value="Borrar">
            </div>
        </form>
        </center>
    </body>
</html>
