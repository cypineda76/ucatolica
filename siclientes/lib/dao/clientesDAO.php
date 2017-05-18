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
    $sql = "SELECT cli.customer_id , type_document_id , document , firts_name , last_name , gender , date_birth , type_id , type_descriptions , contact_id , phone , email , company_id , company_code , company_name , address_id , street , city_id , city_name , department_id , department_name , country_id , country_descriptions FROM customer cli, document_type tip, contact con, company com, address dir, city ciu, department dept, country pais WHERE cli.type_document_id=tip.type_id AND cli.customer_id=con.customer_id AND cli.customer_id=com.customer_id AND cli.customer_id=dir.customer_id AND dir.code_city=ciu.city_id AND ciu.city_department=dept.department_id AND dept.department_country=pais.country_id $tmp";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    if($rs->RecordCount($rs)<=0){
      $response = "";
    }else{
      while($row = $rs->fetchrow($rs)){
        $response[] = array('customer_id'=>$row['customer_id'], 'type_document_id'=>$row['type_document_id'], 'document'=>$row['document'], 'firts_name'=>$row['firts_name'], 'last_name'=>$row['last_name'], 'gender'=>$row['gender'], 'date_birth'=>$row['date_birth'], 'type_id'=>$row['type_id'], 'type_descriptions'=>$row['type_descriptions'], 'contact_id'=>$row['contact_id'], 'phone'=>$row['phone'], 'email'=>$row['email'], 'company_id'=>$row['company_id'], 'company_code'=>$row['company_code'], 'company_name'=>$row['company_name'], 'address_id'=>$row['address_id'], 'street'=>$row['street'], 'city_id'=>$row['city_id'], 'city_name'=>$row['city_name'], 'department_id'=>$row['department_id'], 'department_name'=>$row['department_name'], 'country_id'=>$row['country_id'], 'country_descriptions'=>$row['country_descriptions'], 'compras'=>$this->getShopping($row['customer_id']));
      }
    }
    return $response;
  }

  function deleteCustomer($document){
    $cliente = $this->getCustomer($document);
    if($cliente == ""){
      return 0;
    }
    $address = $this->deleteCustomer_Address($cliente[0]['customer_id']);
    $contac = $this->deleteCustomer_Contact($cliente[0]['customer_id']);
    $company = $this->deleteCustomer_Company($cliente[0]['customer_id']);
    $user_customer = $this->deleteCustomer_User_customer($cliente[0]['customer_id']);
    $shopping = $this->deleteCustomer_Shopping($cliente[0]['customer_id']);
    $sql = "DELETE FROM customer WHERE customer_id = '".$cliente[0]['customer_id']."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function deleteCustomer_Address($customer_id){
    $sql = "DELETE FROM address WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function deleteCustomer_Contact($customer_id){
    $sql = "DELETE FROM contact WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }
  
  function deleteCustomer_Company($customer_id){
    $sql = "DELETE FROM company WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function deleteCustomer_User_customer($customer_id){
    $sql = "DELETE FROM user_customer WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function deleteCustomer_Shopping($customer_id){
    $sql = "DELETE FROM shopping WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function updateCustomer($document, $type_document_id, $document_mod, $firts_name, $last_name, $gender, $date_birth, $direccion, $telefono, $correo){
    $cliente = $this->getCustomer($document);
    if($cliente == ""){
      return 0;
    }
    if($direccion != ''){
      $address = $this->updateCustomer_Address($cliente[0]['customer_id'], $direccion);
    }
    if($telefono=='' && $correo==''){}else{
      $contac = $this->updateCustomer_Contact($cliente[0]['customer_id'], $telefono, $correo);
    }
    if($type_document_id == "" && $document_mod == "" && $firts_name == "" && $last_name == "" && $gender == "" && $date_birth == ""){
      if($address <= 0 && $contact <= 0){
        return 0;
      }else{
        return 1;
      }
    }else{
      $tmp ='';
      if($type_document_id != ""){
        if($tmp == ""){
          $tmp = "type_document_id = '".$type_document_id."'";
        }else{
          $tmp .= ", type_document_id = '".$type_document_id."'";
        }
      }
      if($document_mod != ""){
        if($tmp == ""){
          $tmp = "document = '".$document_mod."'";
        }else{
          $tmp .= ", document = '".$document_mod."'";
        }
      }
      if($firts_name != ""){
        if($tmp == ""){
          $tmp = "firts_name = '".$firts_name."'";
        }else{
          $tmp .= ", firts_name = '".$firts_name."'";
        }
      }
      if($last_name != ""){
        if($tmp == ""){
          $tmp = "last_name = '".$last_name."'";
        }else{
          $tmp .= ", last_name = '".$last_name."'";
        }
      }
      if($gender != ""){
        if($tmp == ""){
          $tmp = "gender = '".$gender."'";
        }else{
          $tmp .= ", gender = '".$gender."'";
        }
      }
      if($date_birth != ""){
        if($tmp == ""){
          $tmp = "date_birth = '".$date_birth."'";
        }else{
          $tmp .= ", date_birth = '".$date_birth."'";
        }
      }
      if($tmp != ""){
        $sql = "UPDATE customer SET $tmp WHERE customer_id = '".$cliente[0]['customer_id']."'";
        $this->conn->Execute($sql);
        return $this->conn->Affected_Rows();
      }else{
        if($address <= 0 && $contact <= 0){
          return 0;
        }else{
          return 1;
        }
      }
    }
  }

  function updateCustomer_Address($customer_id, $direccion){
    $sql = "UPDATE address SET street='".$direccion."' WHERE customer_id = '".$customer_id."'";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function updateCustomer_Contact($customer_id, $phone, $email){
    $tmp = '';
    if($phone!=""){
      if($tmp != ''){
        $tmp .= ", phone='".$phone."'";
      }else{
        $tmp = " phone='".$phone."'";
      }
    }
    if($email!=""){
      if($tmp != ''){
        $tmp .= ", email='".$email."'";
      }else{
        $tmp = " email='".$email."'";
      }
    }
    if($tmp != ""){
      $sql = "UPDATE contact SET $tmp WHERE customer_id = '".$customer_id."'";
      $this->conn->Execute($sql);
      return $this->conn->Affected_Rows();
    }else{
      return 0;
    }
  }

  function insertCustomer($type_document_id, $document, $firts_name, $last_name, $gender, $date_birth, $street, $code_city, $phone, $email, $company_code, $company_name){
    $sql = "INSERT INTO customer(type_document_id, document, firts_name, last_name, gender, date_birth) VALUES ('".$type_document_id."', '".$document."', '".$firts_name."', '".$last_name."', '".$gender."', '".$date_birth."')";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    if($this->conn->Insert_ID() > 0){
      $customer_id = $this->conn->Insert_ID();
      if($street != ''){
        $address = $this->insertAddress($customer_id, $street, $code_city);
      }
      if($phone != '' && $email != ''){
        $contact = $this->insertContact($customer_id, $phone, $email);
      }
      if($company_code != '' && $company_name != ''){
        $company = $this->insertCompany($customer_id, $company_code, $company_name);
      }
      return 1;
    } else {
      return 0;
    }
    
  }

  function insertAddress($customer_id, $street, $code_city){
    if($code_city == ''){
      $code_city = 149;
    }
    $sql = "INSERT INTO address (street, code_city, customer_id) VALUES ('".$street."', '".$code_city."', '".$customer_id."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function insertContact($customer_id, $phone, $email){
    $sql = "INSERT INTO contact (phone, email, customer_id) VALUES ('".$phone."', '".$email."', '".$customer_id."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function insertCompany($customer_id, $company_code, $company_name){
    $sql = "INSERT INTO company (company_code, company_name, customer_id) VALUES ('".$company_code."', '".$company_name."', '".$customer_id."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function insertShopping($document, $producto, $nombre_producto, $cantidad, $total){
    $cliente = $this->getCustomer($document);
    if($cliente == ""){
      return 0;
    }
    $customer_id = $cliente[0]['customer_id'];
    $sql = "INSERT INTO shopping (producto, nombre_producto, cantidad, total, customer_id) VALUES ('".$producto."', '".$nombre_producto."', '".$cantidad."', '".$total."', '".$customer_id."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function getShopping($customer_id){
    $sql = "SELECT * FROM shopping WHERE customer_id='".$customer_id."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    if($rs->RecordCount($rs)<=0){
      $response = "Sin Compras";
    }else{
      while($row = $rs->fetchrow($rs)){
        $response[] = array('producto'=>$row['producto'], 'nombre_producto'=>($row['nombre_producto']), 'cantidad'=>$row['cantidad'], 'total'=>$row['total']);
      }
    }
    return $response;
  }

  function insertUser_customer($document, $usunom, $usulog, $usupas){
    $cliente = $this->getCustomer($document);
    if($cliente == ""){
      return 0;
    }
    $customer_id = $cliente[0]['customer_id'];
    $sql = "INSERT INTO user_customer (usunom, usulog, usupas, customer_id) VALUES ('".$usunom."', '".$usulog."', '".md5($usupas)."', '".$customer_id."')";
    $this->conn->Execute($sql);
    return $this->conn->Affected_Rows();
  }

  function getUser_customer($usulog, $usupas){
    $sql = "SELECT COUNT(*) AS cant FROM user_customer WHERE usulog='".$usulog."' AND usupas = '".md5($usupas)."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    $row = $rs->fetchrow($rs);
    if($row['cant'] > 0){
      return $this->getDatos_User_customer($usulog);
    }else{
      return 0;
    }
  }

  function getDatos_User_customer($usulog){
    $sql = "SELECT usu.*, cli.document FROM user_customer usu, customer cli WHERE usu.customer_id=cli.customer_id AND usulog='".$usulog."'";
    $rs = $this->conn->Execute($sql) or die($this->conn->ErrorMsg());
    while($row = $rs->fetchrow($rs)){
      $response[] = array('usucod'=>$row['usucod'], 'usunom'=>($row['usunom']), 'customer_id'=>$row['customer_id'], 'document'=>$row['document']);
    }
    return $response;
  }
}
?>