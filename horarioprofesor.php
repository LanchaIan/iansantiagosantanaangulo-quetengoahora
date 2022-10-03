<html>
    <head>
        <title>Horario de clase</title>
    </head>
    <body>
    <form action="alumnooprofesor.php" method="post">
        <label for="horario">Escoge un horario:</label>
        <select  name="horario" id="horario">
        <optgroup label="horario">
            <option value="Profesorado">Profesorado</option>
            <option value="Alumnado">Alumnado</option>
        </optgroup>
        </select>    
        <input type="submit" value="Submit">
    </form>
    
    
    <table border="1">
    <tr>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>
    <tr>
        <td style="background-color: rgb(250, 108, 108)">1DAW_PRG</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
    </tr>
    <tr>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
    </tr>
    <tr>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
        <td style="background-color: rgb(185, 125, 188)">2DAW_DSW</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(250, 108, 108)">1DAW_PRG</td>
    </tr>
    <tr>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
    </tr>
    <tr>
        <td style="background-color: rgb(164, 251, 132)">2DAW_DEW</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
        <td style="background-color: rgb(254, 176, 102)">1DAW_IGL</td>
        <td style="background-color: rgb(250, 108, 108)">1DAW_PRG</td>
        <td style="background-color: rgb(51, 255, 249)">1DAW_BD</td>
    </tr>
    </table>
        <table>
            <tr>
                <?php
                    $horari = array(
                        "1DAW_PRG" => array(
                            "Materia" => "Programación",
                            "Horario" => array(
                                "lunes" => "Primera",
                                "martes" => "No se imparte",
                                "miercoles" => "No se imparte",
                                "jueves" => "Sexta",
                                "viernes" => "Cuarta"
                            ),
                            "Taller" => "201"
                        ),
                        "2DAW_DSW" => array(
                            "Materia" => "Desarrollo web en entorno servidor",
                            "Horario" => array(
                                "lunes" => "No se imparte",
                                "martes" => array("Primera", "Segunda"),
                                "miercoles" => "No se imparte",
                                "jueves" => array("Primera", "Segunda", "Tercera"),
                                "viernes" => "Tercera"
                            ),
                            "Taller" => "201"
                        ),
                        "1DAW_BD" => array(
                            "Materia" => "Base de datos",
                            "Horario" => array(
                                "lunes" => array("Segunda", "Tercera"),
                                "martes" => array("Tercera", "Cuarta"),
                                "miercoles" => array("Tercera", "Cuarta"),
                                "jueves" => "No se imparte",
                                "viernes" => array("Quinta", "Sexta")
                            ),
                            "Taller" => "201"
                        ),
                        "2DAW_DEW" => array(
                            "Materia" => "Desarrollo web en entorno cliente",
                            "Horario" => array(
                                "lunes" => array("Cuarta", "Quinta", "Sexta"),
                                "martes" => "No se imparte",
                                "miercoles" => array("Primera", "Segunda"),
                                "jueves" => array("Cuarta", "Quinta"),
                                "viernes" => "No se imparte"
                            ),
                            "Taller" => "201"
                        ),
                        "1DAW_IGL" => array(
                            "Materia" => "Inglés",
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
            <tr>
        </table>
    </body>
<html>