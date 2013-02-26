<?php
/* author @juliana */
class MyController extends Controller {

  public function actionCidades() {
 $cidades = Cv2LocalizacoesCidades::model()->findAll(array(
  'condition' => 'id_uf = :id_uf',
  'params' => array(
   ':id_uf' =>$_POST['id']
  )));
 $cidades = CHtml::listData($cidades, 'id', 'nome');

 echo CHtml::tag('option', array('value' => ''), CHtml::encode('Selecione'), true);
 foreach ($cidades as $value => $name) {
  echo CHtml::tag('option', array('value' => $value), $name, true);
 }
}


}
?>
