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
            "Docente" => "Ermis",
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

    function materia($dia, $hora, $minutos) {
        $horario = "";
        if ($hora == 8 && $minutos < 55) {
            $horario = "Primera";
        }
        elseif ($hora == 8 && $minutos >= 55) {
            $horario = "Segunda";
        }

        elseif ($hora == 9 && $minutos < 50) {
            $horario = "Segunda";
        }

        elseif ($hora == 9 && $minutos >50 ) {
            $horario = "Tercera";
        }

        elseif ($hora == 10 && $minutos < 45) {
            $horario = "Tercera";
        }

        elseif ($hora == 11 && $minutos >= 15) {
            $horario = "Cuarta";
        }

        elseif ($hora == 12 && $minutos < 10) {
            $horario = "Cuarta";
        }

        elseif ($hora == 12 && $minutos >= 10) {
            $horario = "Quinta";
        }

        elseif ($hora == 13 && $minutos < 5) {
            $horario = "Quinta";
        }

        elseif ($hora == 13 && $minutos >= 5) {
            $horario = "Sexta";
        };
        global $horari;
        foreach ($horari as $materia) {
            if ($materia["Horario"][$dia] != "No se imparte") {
                $is_array = is_array($materia["Horario"][$dia]) ? "Si" : "No";
                if ($is_array == "Si") {
                    foreach ($materia["Horario"][$dia] as $hora_materia) {
                        if ($hora_materia == $horario) {
                            echo ($materia["Materia"]);
                            echo(" ");
                            echo ($materia["Docente"]);
                            echo(" ");
                            echo ($materia["Taller"]);
                            return;
                        }
                    }
                }
                else {
                    $hora_materia = $materia["Horario"][$dia];
                    if ($hora_materia == $horario) {
                        echo ($materia["Materia"]);
                        echo(" ");
                        echo ($materia["Docente"]);
                        echo(" ");
                        echo ($materia["Taller"]);
                        return;
                    };
                };
            };
        };
    };
    $hora_actual = date("h", time());
    $minuto_actual = date("i", time());
    materia("lunes", $hora_actual, $minuto_actual);
?>
