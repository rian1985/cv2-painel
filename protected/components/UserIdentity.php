<?php
class UserIdentity extends CUserIdentity {

 public $_id;
 public $_nome;
 public $_grupo;
 public $_id_vendedor;
 
 public function authenticate() { 

 $model = Cv2Usuarios::model()->with(array('vendedor_liberado'))->find('usuario = :usuario AND senha = :senha AND status = :status ', array(':usuario' => $this->username, ':senha' => $this->password, ':status' => 0));

 if ($model === null) {
  $this->errorCode = self::ERROR_USERNAME_INVALID;
 } else {

  foreach ($model as $key => $value) {
   $this->setState($key, (string) $value);
  }

  $this->username = $model->usuario;
  $this->_id = $model->primaryKey;
  $this->_nome = $model->nome;
  $this->_id_vendedor = $model->id_vendedor;
  
  $this->_grupo = $model->id_grupos_usuarios;
  $this->errorCode=self::ERROR_NONE;
 }
 return $this->errorCode == self::ERROR_NONE;

 }
 
 public function getId(){
  return $this->_id;
 }

    public function getName(){
        return $this->_nome;
    }
    
    public function getVendedor(){
        return $this->_id_vendedor;
    }

    public function isAdministrador() {
  if ($this->_grupo == 1)
   return true;
  return false;
 }

 public function isUsuario() {
  if ($this->_grupo == 2)
   return true;
  return false;
 }

}