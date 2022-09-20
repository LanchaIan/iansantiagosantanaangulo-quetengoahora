<?php
    $horari = array(
        "EMR" => array(
            "Materia" => "Empresa",
            "Docente" => "Marisol",
            "Horario" => array(
                "lunes" => "Primera",
                "martes" => "No se imparte",
                "miercoles" => "No se imparte",
                "jueves" => "Sexta",
                "viernes" => "Cuarta"
            ),
            "Taller" => "201"
        ),
        "DPL" => array(
            "Materia" => "Despliegue de aplicaciones web",
            "Docente" => "Nomesel Nombre",
            "Horario" => array(
                "lunes" => "No se imparte",
                "martes" => array("Primera", "Segunda"),
                "miercoles" => "No se imparte",
                "jueves" => array("Primera", "Segunda", "Tercera"),
                "viernes" => "Tercera"
            ),
            "Taller" => "201"
        ),
        "DSW" => array(
            "Materia" => "Desarrollo web en entorno servidor",
            "Docente" => "Sergio",
            "Horario" => array(
                "lunes" => array("Segunda", "Tercera"),
                "martes" => array("Tercera", "Cuarta"),
                "miercoles" => array("Tercera", "Cuarta"),
                "jueves" => "No se imparte",
                "viernes" => array("Quinta", "Sexta")
            ),
            "Taller" => "201"
        ),
        "DEW" => array(
            "Materia" => "Desarrollo web en entorno cliente",
            "Docente" => "Profesor X",
            "Horario" => array(
                "lunes" => array("Cuarta", "Quinta", "Sexta"),
                "martes" => "No se imparte",
                "miercoles" => array("Primera", "Segunda"),
                "jueves" => array("Cuarta", "Quinta"),
                "viernes" => "No se imparte"
            ),
            "Taller" => "201"
        ),
        "DOR" => array(
            "Materia" => "Diseño de interfaces web",
            "Docente" => "No se",
            "Horario" => array(
                "lunes" => "No se imparte",
                "martes" => array("Quinta", "Sexta"),
                "miercoles" => array("Quinta", "Sexta"),
                "jueves" => "No se imparte",
                "viernes" => array("Primera", "segunda")
            ),
            "Taller" => "201"
        )
        );

    function materia($dia, $hora, $minuto) {
        $horario = "";
        if ($hora = 8 || $minutos < 55) {
            $horario = "Primera";
        };
        if ($hora = 8 || $minutos >= 55) {
            $horario = "Segunda";
        };
        if ($hora = 9 || $minutos < 50) {
            $horario = "Segunda";
        };
        if ($hora = 9 || $minutos >=50 ) {
            $horario = "Tercera";
        };
        if ($hora = 10 || $minutos < 45) {
            $horario = "Tercera";
        };
        if ($hora = 11 || $minutos >= 15) {
            $horario = "Cuarta";
        };
        if ($hora = 12 || $minutos < 10) {
            $horario = "Cuarta";
        };
        if ($hora = 12 || $minutos >= 10) {
            $horario = "Quinta";
        };
        if ($hora = 13 || $minutos < 5) {
            $horario = "Quinta";
        };
        if ($hora = 13 || $minutos >= 5) {
            $horario = "Sexta";
        };
        global $horari;
        for ($num_elementos = 0; $num_elementos <= 2; $num_elementos++) {
            $materia = "";
            if ($num_elementos = 0) {
                $materia = "EMR";
            };
            if ($num_elementos = 1) {
                $materia = "DPL";
            };
            if ($num_elementos = 2) {
                $materia = "DSW";
            };
            if ($num_elementos = 3) {
                $materia = "DEW";
            };
            if ($num_elementos = 4) {
                $materia = "DOR";
            };
            if (var_dump($horari[$materia]["Horario"][$dia]) != "No se imparte") {
                $is_array = is_array($horari[$materia]["Horario"][$dia]) ? "Si" : "No";
                if ($is_array = "Si") {
                    echo(var_dump($horari[$materia]["Horario"][$dia]));
                };
            };
        }
    };
    materia("martes", 8, 40);
?>
