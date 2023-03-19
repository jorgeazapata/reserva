<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 5</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        
        <?php
        /*Nombre y apellido : Jorge Andrés Zapata Rodríguez
        * Nombre del programa : Desarrollo web con php
        * Nombre de la evidencia : Taller "uso de arreglos"
        */
        
            //Aquí se almacenan las variables por defecto
            // en caso de que no se modifiquen en el formulario
            $fila0 = "  ";
            $fila1 = "1";
            $fila2 = "2";
            $fila3 = "3";
            $fila4 = "4";
            $fila5 = "5";
            $fila_1_0 = "1";
            $fila_2_0 = "2";
            $fila_3_0 = "3";
            $fila_4_0 = "4";
            $fila_5_0 = "5";
                $silla_1_1 = "Libre";
                $silla_1_2 = "Libre";
                $silla_1_3 = "Libre";
                $silla_1_4 = "Libre";
                $silla_1_5 = "Libre";
                $silla_2_1 = "Libre";
                $silla_2_2 = "Libre";
                $silla_2_3 = "Libre";
                $silla_2_4 = "Libre";
                $silla_2_5 = "Libre";
                $silla_3_1 = "Libre";
                $silla_3_2 = "Libre";
                $silla_3_3 = "Libre";
                $silla_3_4 = "Libre";
                $silla_3_5 = "Libre";
                $silla_4_1 = "Libre";
                $silla_4_2 = "Libre";
                $silla_4_3 = "Libre";
                $silla_4_4 = "Libre";
                $silla_4_5 = "Libre";
                $silla_5_1 = "Libre";
                $silla_5_2 = "Libre";
                $silla_5_3 = "Libre";
                $silla_5_4 = "Libre";
                $silla_5_5 = "Libre";
                
                //Éstas son las variales 
            $fila = filter_input(INPUT_POST,'fila');
            $puesto = filter_input(INPUT_POST,'puesto');
            $accion = filter_input(INPUT_POST,'accion');
            //echo "<h1>LA FILA SELECCIONADA ES: $fila </h1>"
                    //. "<h1>EL PUESTO SELECCIONADO ES: $puesto </h1>";
            //echo "<h1>ACCION A REALIZAR: $accion </h1>";
            if ($fila == 1 && $puesto == 1) {
            $silla_1_1 = $accion;
            }
            elseif ($fila == 1 && $puesto == 2){
            $silla_1_2 = $accion;
            }
            elseif ($fila == 1 && $puesto == 3){
            $silla_1_3 = $accion;
            }
            elseif ($fila == 1 && $puesto == 4){
            $silla_1_4 = $accion;
            }
            elseif ($fila == 1 && $puesto == 5){
            $silla_1_5 = $accion;
            }
            elseif ($fila == 2 && $puesto == 1){
            $silla_2_1 = $accion;
            }
            elseif ($fila == 2 && $puesto == 2){
            $silla_2_2 = $accion;
            }
            elseif ($fila == 2 && $puesto == 3){
            $silla_2_3 = $accion;
            }
            elseif ($fila == 2 && $puesto == 4){
            $silla_2_4 = $accion;
            }
            elseif ($fila == 2 && $puesto == 5){
            $silla_2_5 = $accion;
            }
            elseif ($fila == 3 && $puesto == 1){
            $silla_3_1 = $accion;
            }
            elseif ($fila == 3 && $puesto == 2){
            $silla_3_2 = $accion;
            }
            elseif ($fila == 3 && $puesto == 3){
            $silla_3_3 = $accion;
            }
            elseif ($fila == 3 && $puesto == 4){
            $silla_3_4 = $accion;
            }
            elseif ($fila == 3 && $puesto == 5){
            $silla_3_5 = $accion;
            }
            elseif ($fila == 4 && $puesto == 1){
            $silla_4_1 = $accion;
            }
            elseif ($fila == 4 && $puesto == 2){
            $silla_4_2 = $accion;
            }
            elseif ($fila == 4 && $puesto == 3){
            $silla_4_3 = $accion;
            }
            elseif ($fila == 4 && $puesto == 4){
            $silla_4_4 = $accion;
            }
            elseif ($fila == 4 && $puesto == 5){
            $silla_4_5 = $accion;
            }
            elseif ($fila == 5 && $puesto == 1){
            $silla_5_1 = $accion;
            }
            elseif ($fila == 5 && $puesto == 2){
            $silla_5_2 = $accion;
            }
            elseif ($fila == 5 && $puesto == 3){
            $silla_5_3 = $accion;
            }
            elseif ($fila == 5 && $puesto == 4){
            $silla_5_4 = $accion;
            }
            elseif ($fila == 5 && $puesto == 5){
            $silla_5_5 = $accion;
            }
            
            //echo "<h1>ACCION A REALIZAR: $accion </h1>";
        ?>
        <center>
            <img src ="cinema.png">    
        <h1>SISTEMA DE RESERVA</h1>
            <table border="1">
                <tr>
                    <th colspan="6">ESCENARIO</th>
                </tr>
                    <td><?php echo $fila0 ?></td>
                    <td><?php echo $fila1 ?></td>
                    <td><?php echo $fila2 ?></td>
                    <td><?php echo $fila3 ?></td>
                    <td><?php echo $fila4 ?></td>
                    <td><?php echo $fila5 ?></td>
                </<tr>
                </tr>
                    <td><?php echo $fila_1_0 ?></td>
                    <td><?php echo $silla_1_1 ?></td>
                    <td><?php echo $silla_1_2 ?></td>
                    <td><?php echo $silla_1_3 ?></td>
                    <td><?php echo $silla_1_4 ?></td>
                    <td><?php echo $silla_1_5 ?></td>
                </<tr>
                </tr>
                    <td><?php echo $fila_2_0 ?></td>
                    <td><?php echo $silla_2_1 ?></td>
                    <td><?php echo $silla_2_2 ?></td>
                    <td><?php echo $silla_2_3 ?></td>
                    <td><?php echo $silla_2_4 ?></td>
                    <td><?php echo $silla_2_5 ?></td>
                </<tr>
                </tr>
                    <td><?php echo $fila_3_0 ?></td>
                    <td><?php echo $silla_3_1 ?></td>
                    <td><?php echo $silla_3_2 ?></td>
                    <td><?php echo $silla_3_3 ?></td>
                    <td><?php echo $silla_3_4 ?></td>
                    <td><?php echo $silla_3_5 ?></td>
                </<tr>
                </tr>
                    <td><?php echo $fila_4_0 ?></td>
                    <td><?php echo $silla_4_1 ?></td>
                    <td><?php echo $silla_4_2 ?></td>
                    <td><?php echo $silla_4_3 ?></td>
                    <td><?php echo $silla_4_4 ?></td>
                    <td><?php echo $silla_4_5 ?></td>
                </<tr>
                </tr>
                    <td><?php echo $fila_5_0 ?></td>
                    <td><?php echo $silla_5_1 ?></td>
                    <td><?php echo $silla_5_2 ?></td>
                    <td><?php echo $silla_5_3 ?></td>
                    <td><?php echo $silla_5_4 ?></td>
                    <td><?php echo $silla_5_5 ?></td>
                </<tr>
    </body>
</html>