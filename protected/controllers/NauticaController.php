<?php

class NauticaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
		       public function filters()
 {
  return array(
   'accessControl', // perform access control for CRUD operations
  );
 }
         
         public function accessRules()
 {
  return array(
  
   array('allow',  // allow all users to perform 'index' and 'view' actions
    //'actions'=>array('index'),
   'expression'=>'isset($user->id_grupos_usuarios)',
   ),
   array('deny',  // deny all users
    'users'=>array('*'),
   ),
  );
 }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
        
        
   public function actionCreate() {

    $veiculos = new Cv2VeiculosVeiculos;
    $nautica = new Cv2VeiculosNauticos;
    $movimentacao = new Cv2VeiculosMovimentacoes;
    $movimentacao2 = new Cv2VeiculosMovimentacoes;
 
  $this->performAjaxValidation(array($veiculos,$nautica)); 
  
  //echo Yii::app()->user->getVendedor();exit;
  
   if(!empty($_POST)){
   $veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
   $nautica->attributes=$_POST['Cv2VeiculosNauticos'];  
   if(($_POST['Cv2VeiculosNauticos']['conforto']) > 1){
    $str = implode(',',$_POST['Cv2VeiculosNauticos']['conforto']);
    
    $nautica->conforto = $str;
}

if(($_POST['Cv2VeiculosNauticos']['exterior']) > 1){
    $str2 = implode(',',$_POST['Cv2VeiculosNauticos']['exterior']);
    
    $nautica->exterior = $str2;
}

if(($_POST['Cv2VeiculosNauticos']['seguranca']) > 1){
    $str3 = implode(',',$_POST['Cv2VeiculosNauticos']['seguranca']);
    
    $nautica->seguranca = $str3;
}

if(($_POST['Cv2VeiculosNauticos']['som']) > 1){
    $str4 = implode(',',$_POST['Cv2VeiculosNauticos']['som']);
    
    $nautica->som = $str4;
}
   $veiculos->id_tipo = 1;
   $veiculos->id_vendedor = Yii::app()->user->id_vendedor;
   $movimentacao->id_tipo = 1;
   if($veiculos->validate()){ 
     $veiculos->save(); 
     $nautica->id_veiculo = $veiculos->primaryKey;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
     $movimentacao2->id_veiculo = $veiculos->primaryKey;
 if($veiculos->destaque === 1){
     $movimentacao2->id_tipo = 3;
 }
 if($veiculos->destaque === 0){   
     $movimentacao2->id_tipo = 4;
 }
     $nautica->save();
     $movimentacao->save();
     $movimentacao2->save();
     
     
//      Yii::import('application.extensions.upload.Upload');
//   print_r($_FILES['Cv2VeiculosVeiculos']['name']['foto_1']);exit();
//   $foo = new Upload($_FILES['Cv2VeiculosVeiculos']['name']['foto_1']);
//   
// var_dump($foo->uploaded);exit();
//   if ($foo->uploaded) {
//    $pasta = '../../imagens/' . $veiculos->id_vendedor . '/';
//    $foo->Process($pasta);
//
//  if ($foo->processed) {
//    echo 'original image copied';
//  } else {
//    echo 'error : ' . $foo->error;
//  }
//  
//}
     
     $this->redirect(array('index'));
   }
 }
       
    $this->render('create',array(
        'veiculos'=>$veiculos,
        'nautica'=>$nautica,
        'movimentacao'=>$movimentacao
        
    ));
}

	public function actionUpdate($id){

$veiculos=$this->loadModel($id);
$nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao2=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
if(isset($nautica->conforto)){
    $nautica->conforto = explode(',', $nautica->conforto);
}

if(isset($nautica->exterior)){
    $nautica->exterior = explode(',', $nautica->exterior);
}

if(isset($nautica->seguranca)){
    $nautica->seguranca = explode(',', $nautica->seguranca);
}

if(isset($nautica->som)){
    $nautica->som = explode(',', $nautica->som);
}

         $this->performAjaxValidation(array($veiculos,$nautica));
 if(!empty($_POST)){

  $veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
  $nautica->attributes=$_POST['Cv2VeiculosNauticos'];  
  
  if(($_POST['Cv2VeiculosNauticos']['conforto']) > 1){
    $str = implode(',',$_POST['Cv2VeiculosNauticos']['conforto']);
    
    $nautica->conforto = $str;
}

if(($_POST['Cv2VeiculosNauticos']['exterior']) > 1){
    $str2 = implode(',',$_POST['Cv2VeiculosNauticos']['exterior']);
    
    $nautica->exterior = $str2;
}

if(($_POST['Cv2VeiculosNauticos']['seguranca']) > 1){
    $str3 = implode(',',$_POST['Cv2VeiculosNauticos']['seguranca']);
    
    $nautica->seguranca = $str3;
}

if(($_POST['Cv2VeiculosNauticos']['som']) > 1){
    $str4 = implode(',',$_POST['Cv2VeiculosNauticos']['som']);
    
    $nautica->som = $str4;
}

if(($_POST['Cv2VeiculosNauticos']['som']) > 1){
    $str4 = implode(',',$_POST['Cv2VeiculosNauticos']['som']);
    
    $nautica->som = $str4;
}
         
  if($veiculos->validate()){ 
     $veiculos->save();
     
     $nautica->id_veiculo = $veiculos->primaryKey;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
     $movimentacao2->id_veiculo = $veiculos->primaryKey;
 if($veiculos->destaque === 1){
     $movimentacao2->id_tipo = 3;
 }
 if($veiculos->destaque === 0){   
     $movimentacao2->id_tipo = 4;
 }
     $nautica->save();
     $movimentacao->save();
      $movimentacao2->save();
     
     $this->redirect(array('/anuncios'));
   }
 }
       
    $this->render('update',array(
        'veiculos'=>$veiculos,
        'nautica'=>$nautica,
         'movimentacao'=>$movimentacao,
        'movimentacao2'=>$movimentacao2,
        
    ));
}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */


 public function actionDelete($id) {
        
        if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
             $nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
             $movimentacao = new Cv2VeiculosMovimentacoes;
              $movimentacao->id_veiculo = $veiculos->primaryKey;
              $movimentacao->id_tipo = 5;
              $movimentacao->save();
             
            $veiculos->status = '1';
            if ($veiculos->update('status')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo removido com sucesso.');
                
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar remover veículo.');
               
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/anuncios'));
        }
       
    }
    
    
    public function actionRestaura($id) {
        
        if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
             $nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
           $movimentacao = new Cv2VeiculosMovimentacoes;
              $movimentacao->id_veiculo = $veiculos->primaryKey;
              $movimentacao->id_tipo = 6;
              $movimentacao->save();
             $veiculos->status = '0';
            if ($veiculos->update('status')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo removido com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar remover veículo.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/lixeira'));
        }
       
    }
    
    public function actionDestaque($id) {
        
        if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
             $nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
            $veiculos->destaque = '1';
            if ($veiculos->update('destaque')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo destacado com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar destacar veículo.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/anuncios'));
        }
       
    }
    
     public function actionTiraDestaque($id) {
        
        if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
             $nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
            $veiculos->destaque = '0';
            if ($veiculos->update('destaque')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo destacado com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar destacar veículo.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/anuncios'));
        }
       
    }
    
    
     public function actionVender($id) {
        $movimentacao = new Cv2VeiculosMovimentacoes;

             if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
            
             $movimentacao->id_tipo = 2;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
   if($movimentacao->validate()){ 
     $movimentacao->save(); 
           
           
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/anuncios'));
        }
       
    }
     }


//	public function actionDelete($id)
//	{
//		  $veiculos=$this->loadModel($id);
//                $nautica=Cv2VeiculosNauticos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
//            
//              $nautica->delete();
// $veiculos->delete();
//// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//		if(!isset($_GET['ajax']))
//			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
//	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cv2VeiculosVeiculos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cv2VeiculosVeiculos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cv2VeiculosVeiculos']))
			$model->attributes=$_GET['Cv2VeiculosVeiculos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cv2VeiculosVeiculos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cv2-veiculos-veiculos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
