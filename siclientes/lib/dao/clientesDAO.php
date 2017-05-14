<?php
class ClientesDAO{
  var $conn;

  function ClientesDAO($db){
    $this->conn = $db;
  }

  function getCustomer($document){
    $tmp = "";
    if($document !=""){
      $tmp = " AND document='".$document."'";
    }
    $sql = "SELECT * FROM customer, document_type WHERE type_document_id=type_id $tmp";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    while($row = $rs->fetchrow($rs)){
      $response[] = array('customer_id'=>$row['customer_id'], 'type_document_id'=>($row['type_document_id']), 'type_descriptions'=>$row['type_descriptions'], 'document'=>$row['document'], 'firts_name'=>($row['firts_name']), 'last_name'=>$row['last_name'], 'gender'=>$row['gender'], 'date_birth'=>$row['date_birth']);
    }
    return json_encode($response);
  }
}
?>