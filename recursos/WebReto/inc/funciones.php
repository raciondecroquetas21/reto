<?php
function check_user($dni, $pass) {
  require "db.php";
  $contador = false;
  $stid = oci_parse($conn, "SELECT PASSWORD_ALUM, NOMBRE, APELLIDO1 FROM alumno WHERE dni=:dni");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_execute($stid);
  $rows = oci_fetch_assoc($stid);
  if (!$rows) {
    echo "Usuario o Contraseña incorrectos";
  } else {
    if ($rows["PASSWORD_ALUM"] == $pass) {
      $contador = true;
      $usuario = $rows["NOMBRE"]." ".$rows["APELLIDO1"];
      session_start();
      $_SESSION['usu'] = $usuario;
      $_SESSION['dni'] = $dni;
    }
  }
  oci_free_statement($stid);
  oci_close($conn);
  return  $contador ? true : false ;
}
function datosPerfil($dni){
  require "db.php";
  $datos = null;
  //Llamada al procedimiento
  $sql = 'BEGIN notas_alumno(:DNI, :OUTPUT_CUR); END;';

  $stmt = oci_parse($conn,$sql);
  oci_bind_by_name($stmt,':DNI',$dni);

  //Creamos un cursor antes de ejecutar la sentencia
  $cursor = oci_new_cursor($conn);

  // Vinculamos lo que devuelve el procedimiento al cursor
  oci_bind_by_name($stmt,":OUTPUT_CUR", $cursor,-1,OCI_B_CURSOR);

  // En este orden importante
  // Ejecutamos la sentencia primero
  oci_execute($stmt);
  // Luego ejecutamos el cursor
  oci_execute($cursor);
  // Vinculamos el resultado del cursor en un array
  while ($data = oci_fetch_assoc($cursor)) {
      $datos[] = $data;
    }
  oci_close($conn);
    return $datos;
}
function getCurso($dni){
  require "db.php";
  $cursoAct = null;
  $stid = oci_parse($conn, "SELECT cu.nombre FROM curso cu INNER JOIN asignatura asig on asig.id_curso=cu.id_curso INNER JOIN calificacion cal on cal.id_asignatura=asig.id_asignatura_padre INNER JOIN alumno al on al.id_alumno=cal.id_alumno WHERE al.dni=:dni GROUP BY cu.nombre");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_execute($stid);
  while ($curso = oci_fetch_assoc($stid)) {
    $cursoAct[] = $curso;
  }
  oci_close($conn);
  return $cursoAct;
}
function cambiarPwd($dni, $pass){
  require "db.php";
  $sql = oci_parse($conn, "UPDATE alumno SET PASSWORD_ALUM=:pass WHERE dni=:dni");
  oci_bind_by_name($sql, ":pass", $pass);
  oci_bind_by_name($sql, ":dni", $dni);
  oci_execute($sql);
  oci_close($conn);
}
function cambiarFoto($imagen, $dni) {
  require "db.php";
  $sql = oci_parse($conn, "UPDATE alumno set foto= :img WHERE dni= :dni");
  oci_bind_by_name($sql, ":img", $imagen);
  oci_bind_by_name($sql, ":dni", $dni);
  $r = oci_execute($sql);
  if (!$r) {
    $e = oci_error($sql);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
  }
  oci_free_statement($sql);
  oci_close($conn);
  return $r;
}
function valorarCurso($dni, $msg, $curso){
  require "db.php";
  $idAlumno = getIdAlumno($dni);
  $sql = oci_parse($conn,"INSERT INTO valoracion (id_curso, id_alumno,fecha_publicacion,valoracion) VALUES (:idCurso,:idAlumno,current_timestamp,:txt)");
  oci_bind_by_name($sql, ":idCurso", $curso);
  oci_bind_by_name($sql, ":idAlumno", $idAlumno["ID_ALUMNO"]);
  oci_bind_by_name($sql, ":txt", $msg);
  $r = oci_execute($sql);
    if ($r) {
      echo "Insertado correctamente";
      header("refresh:2;url=../valorar.php");
    } else {
      $e = oci_error($sql);
      if($e["code"] == 20001){
      header("refresh:0;url = ../valorar.php?err=nocur");
      }
    }
    oci_free_statement($sql);
  oci_close($conn);
}
function getValoraciones($dni){
  require "db.php";
  $valoraciones = null;
  $sql = oci_parse($conn, "SELECT id_alumno FROM alumno WHERE dni = :dni");
  oci_bind_by_name($sql, ":dni", $dni);
  oci_execute($sql);
  $idAlum = oci_fetch_assoc($sql);
  oci_free_statement($sql);

  $sql = oci_parse ($conn, "SELECT id_valoracion, valoracion, fecha_publicacion FROM valoracion WHERE id_alumno = :idAlum AND rownum<=2 ORDER BY fecha_publicacion DESC");
  oci_bind_by_name($sql, ":idAlum", $idAlum["ID_ALUMNO"]);
  oci_execute($sql);
    while ($rows = oci_fetch_assoc($sql)) {
      $valoraciones[] = $rows;
    }
  return $valoraciones;
}

function borraValoracion($idBorrar) {
  require "db.php";
  if (intval($idBorrar) == 0) {
    echo "Malo";
    header("location: ../index.php");
  } else {
    $sql = oci_parse($conn, "DELETE FROM valoracion WHERE id_valoracion = :idval");
    oci_bind_by_name($sql, ":idval", $idBorrar);
    oci_execute($sql);
    $r = oci_commit($conn);
    if (!$r) {
      $e = oci_error($conn);
      trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }
    header("location: ../valorar.php");
  }
}

function getIdAlumno($dni) {
  require "db.php";
  $sql = oci_parse($conn, "SELECT id_alumno FROM alumno WHERE dni = :dni");
  oci_bind_by_name($sql, ":dni", $dni);
  oci_execute($sql);
  $idAlum = oci_fetch_assoc($sql);
  oci_free_statement($sql);
  return $idAlum;
}