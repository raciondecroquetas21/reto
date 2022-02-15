<?php
session_start();

function getNoticias() {
  include "db.php";
  $sql_login = "SELECT id_noticia, titulo, texto, foto, fecha FROM noticias order by id_noticia desc";

  $login_stmt = oci_parse($conn, "$sql_login");

  oci_execute($login_stmt);

  while($row = oci_fetch_assoc($login_stmt)) {
    $noticias[] = $row;
  }

  oci_commit($conn);

  oci_free_statement($login_stmt);
  oci_close($conn);

  return $noticias;

}

function getnoticiasId($id) {
  include "db.php";

  $sql_login = "SELECT id_noticia, titulo, texto, foto, fecha FROM noticias WHERE id_noticia = :id_bv";

  $login_stmt = oci_parse($conn, "$sql_login");

  oci_bind_by_name($login_stmt, ":id_bv", $id);

  oci_execute($login_stmt);

  if ($row = oci_fetch_array($login_stmt, OCI_BOTH)) {
      $noticias[] = $row;
  }

  oci_commit($conn);

  oci_free_statement($login_stmt);
  oci_close($conn);

  return $noticias;

}

function actualizarNoticia($idNoticia, $titulo, $texto) {
  include "db.php";
  $sql = "UPDATE noticias SET titulo = '".$titulo."', texto = '".$texto."' WHERE id_noticia = '".$idNoticia."'";

  $stmt = oci_parse($conn, "$sql");

  oci_execute($stmt);

  oci_free_statement($stmt);
  oci_close($conn);
  return $res;

}


function getAsignaturasProfesor($idProfesor) {
  include "db.php";

  $sql = "SELECT modulos.nombre FROM modulos WHERE id_profesor = '".$idProfesor."'";

  $stmt = oci_parse($conn, "$sql");

  oci_execute($stmt);

  while ($row = oci_fetch_assoc($stmt)) {
      $asignaturas[] = $row;
  }

  oci_free_statement($stmt);
  oci_close($conn);

  return $asignaturas;
}

function getNotasAsignatura($nombreAsignatura) {
  include "db.php";

  $sql = "SELECT alumnos_asignatura('$nombreAsignatura') as datos from dual";

  $stmt = oci_parse($conn, $sql);

  oci_execute($stmt);

    while ($row = oci_fetch_array($stmt, OCI_ASSOC)) {
        $alumnos = $row['DATOS'];
        oci_execute($alumnos);
        while ($row_alumnos = oci_fetch_array($alumnos, OCI_ASSOC)) {
            $notas[]=$row_alumnos;
        }
        oci_free_statement($alumnos);
    }

  oci_free_statement($stmt);
  oci_close($conn);

  return $notas;
}

function getAsignaturasAlumno($idAlumno) {
  include "db.php";

  $sql = "SELECT modulos.nombre from modulo_alumno_puesto INNER JOIN modulos on modulos.id_modulo=modulo_alumno_puesto.id_modulo
  where modulo_alumno_puesto.id_alumno = '".$idAlumno."'";

  $stmt = oci_parse($conn, "$sql");

  oci_execute($stmt);

  while ($row = oci_fetch_assoc($stmt)) {
      $asignaturas[] = $row;
  }

  oci_free_statement($stmt);
  oci_close($conn);

  return $asignaturas;
}

function getNotasAlumno($nombreAsignatura, $Alumno) {
  include "db.php";

  $sql = "SELECT asignatura_alumno('$nombreAsignatura', '$Alumno') as datos from dual";

  $stmt = oci_parse($conn, $sql);

  oci_execute($stmt);

    while ($row = oci_fetch_array($stmt, OCI_ASSOC)) {
        $notas = $row['DATOS'];
        oci_execute($notas);
        while ($row_alumnos = oci_fetch_array($notas, OCI_ASSOC)) {
            $alumnos[]=$row_alumnos;
        }
        oci_free_statement($notas);
    }

  oci_free_statement($stmt);
  oci_close($conn);

  return $alumnos;
}

?>
