<?php

include "conexion.php";

function insertarEstudiante($nombres, $apellidos, $cu, $idcarrera) {
    $conn = conectar();

    $stmt = $conn->prepare("INSERT INTO alumno (nombres, apellidos, CU, idcarrera) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nombres, $apellidos, $cu, $idcarrera);

    $resultado = $stmt->execute();
    $stmt->close();
    $conn->close();

    return $resultado;
}


function obtenerAlumnos() {
    $conn = conectar();

    $query = "SELECT * FROM alumno";
    $result = $conn->query($query);

    $alumnos = array();

    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            $alumnos[] = $fila;
        }
    }

    $conn->close();

    return $alumnos;
}


function obtenerAlumnoPorId($id) {
    $conn = conectar();

    $stmt = $conn->prepare("SELECT * FROM alumno WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $alumno = $result->fetch_assoc();
        $stmt->close();
        $conn->close();

        return $alumno;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}


function actualizarEstudiante($id, $nombres, $apellidos, $cu, $idcarrera) {
    $conn = conectar();

    $stmt = $conn->prepare("UPDATE alumno SET nombres = ?, apellidos = ?, CU = ?, idcarrera = ? WHERE id = ?");
    $stmt->bind_param("sssii", $nombres, $apellidos, $cu, $idcarrera, $id);

    $resultado = $stmt->execute();
    $stmt->close();
    $conn->close();

    return $resultado;
}


function eliminarEstudiante($id) {
    $conn = conectar();

    $stmt = $conn->prepare("DELETE FROM alumno WHERE id = ?");
    $stmt->bind_param("i", $id);

    $resultado = $stmt->execute();
    $stmt->close();
    $conn->close();

    return $resultado;
}
?>
