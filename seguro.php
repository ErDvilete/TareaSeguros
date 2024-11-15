<?php
    $precio_base = 200;
    $Nombre = $_POST["Nombre"];
    $fecha_carné = $_POST["fecha_carné"];
    $fecha_carné_calculada =date("Y") - $_POST["fecha_carné"];
    $sexo = $_POST["sexo"];
    $matricula = $_POST["Matricula"];
    $año_matriculacion = $_POST["año_matriculacion"];
    $año_matriculacion_calculada =date("Y") - $_POST["año_matriculacion"];
    $combustible = $_POST["combustible"];
    $Tipo_seguro = $_POST["Tipo_seguro"];

  

    if($fecha_carné_calculada < 10){
        $precio_base *=  2 ; //Multiplica al precio base por 2 si lleva menos de 10 años con carné

        if($sexo == "femenino"){
            if($fecha_carné < 10){
                $precio_base *=  0.9; //Le descuenta un 10% al precio base si es mujer y lleva menos de 10 añis con carné
            }
        }
    }
    
    if($año_matriculacion_calculada > 10){
        $precio_base += 100; //le suma 100 si el vehiculo lleva mas de 10 años matriculado
    }
    if($combustible == "electrico"){
        $precio_base *= 0.7; // Le hace un descuento del 30% al precio base si es electrico
    }
    elseif($combustible == "Diesel"){
        $precio_base *= 1.3; // Le suma el 30% al precio si es diesel
    }
    if($Tipo_seguro == "Intermedio"){
        $precio_base += 200; //Le suma 200 al precio base si el seguro es intermedio
    }
    elseif($Tipo_seguro == "Todo riesgo"){
        $precio_base *= 2; //Duplica el precio para el seguro a todo riesgo
    }
 
    $precio_final = $precio_base;
    echo "<h1>DATOS DE LA POLIZA</h1>
        <h3>Datos del tomador</h3>
            <p>Nombre: $Nombre</p>
            <p>Fecha Obtencion del carné: $fecha_carné </p>
            <p>Sexo: $sexo </p>
        <h3>Datos del vehiculo</h3>
            <p>Matricula: $matricula </p>
            <p>Año Matriculacion: $año_matriculacion </p>
            <p>Tipo de Combustible: $combustible </p>
        <h3>Modalidad</h3>
            <p>Tipo de seguro: $Tipo_seguro </p>
            <p>Precio Final: $precio_final </p> 
        <h3>Presupuesto Final</h3>
            <p><strong>$Nombre, el presupuesto del seguro de tu vehiculo con matricula $matricula es de $precio_final</strong></p>";

    echo "<a href='seguro.html'>OTRO SEGURO</a>";
    
            



?>