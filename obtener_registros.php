<?php

include("conexion.php");
include("funciones.php");

$query = "";
$salida = array();
$query = "SELECT * FROM usuarios";

if (isset($_POST["search"]["value"])) {
    $query .= 'WHERE nombre LIKE "%' . $_POST["search"]["value"] . '%"';
    $query .= 'OR dependencia LIKE "%' . $_POST["search"]["value"] . '%"';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY' . $_POST['order']['0']['column'] . ' ' .
    $_POST["order"][0]['dir']. ' ';
} else {
    $query .= 'ORDER BY id DESC';
}

if ($_POST["length"] != -1) {
    $query .= 'LIMIT ' . $_POST["start"] . ',' . $_POST["length"];
}