<?php
class UsuarioDAO{
  var $conn;

  function UsuarioDAO($db){
    $this->conn = $db;
  }

  function iniciarsesion($login, $pswd){
    $sql = "SELECT count(*) AS cn FROM usuarios WHERE usulog='".trim($login)."' and usupas='".$pswd."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    $row = $rs->fetchrow($rs);
    return $row['cn'];
  }

  function datosusuario($login){
    $sql = "SELECT * FROM usuarios WHERE usulog='".$login."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    $row = $rs->fetchrow($rs);
    $response = array("usucod"=>$row['usucod'], "usunom"=>$row['usunom']);
    return $response;
  }

  function insertarUsuario($usunom, $usulog, $usupas){
    $sql = "INSERT INTO usuarios (usunom, usulog, usupas) VALUES ('".$usunom."', '".$usulog."', '".$usupas."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }
}
?>