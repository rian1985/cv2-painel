<?php

class PropostasRecebidasController extends Controller
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
public function actionIndex()

        
	{
		
		$this->render('index');
	}
        
        public function actionCarros()
	{
		
		$this->render('carros');
	}
        
        public function actionMotos()
	{
		
		$this->render('motos');
	}
        
        public function actionCaminhoes()
	{
		
		$this->render('caminhoes');
	}
        
        public function actionOnibus()
	{
		
		$this->render('onibus');
	}
        
        public function actionNautica()
	{
		
		$this->render('nautica');
	}
        public function actionOutros()
	{
		
		$this->render('outros');
	}
        }
?>
