<?php
class ArticulosDAO{
  var $conn;

  function ArticulosDAO($db){
    $this->conn = $db;
  }

  function getArticulosHome($seccion){
    $sql = "SELECT * FROM articulos WHERE artpri='".$seccion."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    while($row = $rs->fetchrow($rs)){
      $response[] = array('artcod'=>$row['artcod'], 'artnom'=>($row['artnom']), 'artsec'=>$row['artsec'], 'artdes'=>($row['artdes']), 'resumen'=>substr(($row['artdes']),0,100), 'artimg'=>$row['artimg']);
    }
    return $response;
  }

  function getNoticia($artcod){
    $sql = "SELECT * FROM articulos WHERE artcod='".$artcod."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    $row = $rs->fetchrow($rs);
    $response = array('artcod'=>$row['artcod'], 'artnom'=>($row['artnom']), 'artsec'=>$row['artsec'], 'artdes'=>($row['artdes']), 'resumen'=>substr(($row['artdes']),0,100), 'artimg'=>$row['artimg'], 'artpri'=>$row['artpri']);
    return $response;
  }

  function getArticulospage($artsec){
    $sql = "SELECT * FROM articulos WHERE artsec='".$artsec."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    while($row = $rs->fetchrow($rs)){
      $response[] = array('artcod'=>$row['artcod'], 'artnom'=>($row['artnom']), 'artsec'=>$row['artsec'], 'artdes'=>($row['artdes']), 'resumen'=>substr(($row['artdes']),0,100), 'artimg'=>$row['artimg'], 'artpri'=>$row['artpri']);
    }
    return $response;
  }

  function updateArticulo($artcod, $artnom, $artsec, $artdes, $artimg, $artpri){
    $sql = "UPDATE articulos SET artnom='".($artnom)."', artdes='".($artdes)."', artimg='".$artimg."', artpri='".$artpri."', artsec='".$artsec."' WHERE artcod='".$artcod."';";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }
}
?>