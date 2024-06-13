<?php

include("conexion.php");

class Buscar {

    public static function obtenerTodos() {
        $objeto = new Conexion();
        $cn = $objeto->conectar();

        $sql = "SELECT * FROM estudiantes";
        $resultado = $cn->query($sql);

        echo("<table border='1'>");
        echo("<tr>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>Direccion</th>
                <th>CURSO PERTENECE</th>
            </tr>");

        while ($row = $resultado->fetch_array()) {
            echo("<tr>");
            echo("<td>".$row["cedula"]."</td>");
            echo("<td>".$row["nombre"]."</td>");
            echo("<td>".$row["apellido"]."</td>");
            echo("<td>".$row["telefono"]."</td>");
            echo("<td>".$row["direccion"]."</td>");
            echo("<td>".$row["idCurso"]."</td>");
            echo("</tr>");
        }

        echo("</table>");
    }

    public static function busqueda($cedula) {
        $objeto = new Conexion();
        $cn = $objeto->conectar();

        $sql = "SELECT * FROM estudiantes WHERE cedula ='$cedula'";
        $resultado = $cn->query($sql);

        echo("<table border='1'>");
        echo("<tr><th>CEDULA</th><th>NOMBRE</th><th>APELLIDO</th><th>CURSO PERTENECE</th></tr>");

        while ($row = $resultado->fetch_array()) {
            echo("<tr>");
            echo("<td>".$row["cedula"]."</td>");
            echo("<td>".$row["nombre"]."</td>");
            echo("<td>".$row["apellido"]."</td>");
            echo("<td>".$row["idCurso"]."</td>");
            echo("</tr>");
        }

        echo("</table>");
    }
}
?>
