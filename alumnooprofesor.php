<?php
    echo "naita";
    header('Location: scripthorario_html.php');
    header('Location: horarioprofesor.php');
    $horario = $_POST["horario"];
    if ($horario == "Alumnado") {
        header('Location: scripthorario_html.php');
    }
    else {
        header('Location: horarioprofesor.php');
    };
?>