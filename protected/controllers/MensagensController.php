<?php

class MensagensController extends Controller
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

	 public function actionView($id) {
        $model = $this->loadModel($id);
       
        $this->render('view', array(
            'model' => $model,
        ));
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cv2Mensagens;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cv2Mensagens']))
		{
			$model->attributes=$_POST['Cv2Mensagens'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cv2Mensagens']))
		{
			$model->attributes=$_POST['Cv2Mensagens'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete() {
        $id = $_GET['id'];
        // we only allow deletion via POST request
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax'])) {
            Yii::app()->user->setFlash('succes', "Mensagem excluida.");
            $this->redirect(array('index'));
        }
    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		 $listmensagens = Cv2Mensagens::model()->findAll();

        $this->render('index', array(
            'listmensagens' => $listmensagens,
        ));
	}
        
        public function actionMensagens()
	{
		 $listmensagens = Cv2Mensagens::model()->findAll();

        $this->render('mensagens', array(
            'listmensagens' => $listmensagens,
        ));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cv2Mensagens('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cv2Mensagens']))
			$model->attributes=$_GET['Cv2Mensagens'];

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
		$model=Cv2Mensagens::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='cv2-mensagens-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
