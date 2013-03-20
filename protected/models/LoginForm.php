<?php
class LoginForm extends CFormModel {

    public $usuario;
    public $senha;
    public $rememberMe;
    private $_identity;

    public function rules() {
        return array(
            array('usuario, senha', 'required', 'message'=>'{attribute} deve ser preenchido'),
            array('rememberMe', 'boolean'),
        );
    }

    public function attributeLabels() {
        return array(
            'usuario' => 'Usuário',
            'senha' => 'Senha',
            'rememberMe' => 'Mantenha-me conectado',
        );
    }

    public function login() {

        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->usuario, $this->senha);
            $this->_identity->authenticate();
        }

        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }

}
?>
