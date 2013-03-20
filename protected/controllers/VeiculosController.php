<?php
class VeiculosController extends Controller
{	
    
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
 
	public function actionCreate() {

        $model = new cv2_veiculos_veiculos;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['cv2_veiculos_veiculos'])) {

            $model->attributes = $_POST['cv2_veiculos_veiculos'];

            if ($model->save()) {

                Yii::app()->user->setFlash('succes', "Veiculo cadastrado com sucesso");

                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }
        
        
	
}

?>