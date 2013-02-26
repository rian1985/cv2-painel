<?php

class ClientesController extends Controller
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

public function actionCreate() {
  $vendedores = new Cv2Vendedores;
 $usuarios = new Cv2Usuarios;
 $localizacoes = new Cv2Localizacoes;          
     
  $this->performAjaxValidation(array($vendedores,$usuarios,$localizacoes)); 
  
   if(!empty($_POST)){
   $vendedores->attributes=$_POST['Cv2Vendedores'];
   $usuarios->attributes=$_POST['Cv2Usuarios'];  
   $localizacoes->attributes=$_POST['Cv2Localizacoes'];
   
   $vendedores->id_tipo = 3;
   
   if($vendedores->validate()){ 
     $vendedores->save();
     
     $usuarios->id_vendedor = $vendedores->primaryKey;
     $usuarios->nome = $vendedores->nome;
     $usuarios->id_grupos_usuarios = 2;
     $usuarios->save();
     
     $localizacoes->id_vendedor = $vendedores->primaryKey;
     $localizacoes->save();

     $this->redirect(array('index'));
   }
 }
       
    $this->render('create',array(
        'vendedores'=>$vendedores,
        'usuarios'=>$usuarios,
        'localizacoes'=>$localizacoes,
    ));
}

	public function actionUpdate($id){

 $vendedores=$this->loadModel($id);
$usuarios=Cv2Usuarios::model()->find('id_vendedor = :id_vendedor', array(':id_vendedor' => $id));
 $localizacoes=Cv2Localizacoes::model()->find('id_vendedor = :id_vendedor', array(':id_vendedor' => $vendedores->primaryKey));

         $this->performAjaxValidation(array($vendedores,$usuarios,$localizacoes));
 if(!empty($_POST)){

  $vendedores->attributes=$_POST['Cv2Vendedores'];
  $usuarios->attributes=$_POST['Cv2Usuarios'];  
  $localizacoes->attributes=$_POST['Cv2Localizacoes'];
   
  if($vendedores->validate()){ 
   $vendedores->save();

   $usuarios->id_vendedor = $vendedores->primaryKey;
   $usuarios->save();

   $localizacoes->id_vendedor = $vendedores->primaryKey;
   $localizacoes->save();

   $this->redirect(array('index'));
  }
 }
       
    $this->render('update',array(
        'vendedores'=>$vendedores,
        'usuarios'=>$usuarios,
        'localizacoes'=>$localizacoes,
    ));
}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
                $vendedores=$this->loadModel($id);
                $usuarios=Cv2Usuarios::model()->find('id_vendedor = :id_vendedor', array(':id_vendedor' => $id));
                $localizacoes=Cv2Localizacoes::model()->find('id_vendedor = :id_vendedor', array(':id_vendedor' => $vendedores->primaryKey));
             
 $usuarios->delete();
 $localizacoes->delete();
$vendedores->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$listclientes = Cv2Vendedores::model()->with(array('cv2Usuarioses'))->findAll();
        $this->render('index', array(
            'listclientes' => $listclientes,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cv2Vendedores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cv2Vendedores']))
			$model->attributes=$_GET['Cv2Vendedores'];

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
		$model=Cv2Vendedores::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='cv2-vendedores-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
