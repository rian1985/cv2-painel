<?php

class CarrosController extends Controller
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
	$carros = new Cv2VeiculosCarros;
	$movimentacao = new Cv2VeiculosMovimentacoes;
	$movimentacao2 = new Cv2VeiculosMovimentacoes;
        

	$this->performAjaxValidation(array($veiculos,$carros)); 

	//echo Yii::app()->user->getVendedor();exit;

	if(!empty($_POST)){
		$veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
		$carros->attributes=$_POST['Cv2VeiculosCarros'];  
		if(($_POST['Cv2VeiculosCarros']['conforto']) > 1){
			$str = implode(',',$_POST['Cv2VeiculosCarros']['conforto']);
			
			$carros->conforto = $str;
		}

		if(($_POST['Cv2VeiculosCarros']['exterior']) > 1){
			$str2 = implode(',',$_POST['Cv2VeiculosCarros']['exterior']);
			
			$carros->exterior = $str2;
		}

		if(($_POST['Cv2VeiculosCarros']['seguranca']) > 1){
			$str3 = implode(',',$_POST['Cv2VeiculosCarros']['seguranca']);
			
			$carros->seguranca = $str3;
		}

		if(($_POST['Cv2VeiculosCarros']['som']) > 1){
			$str4 = implode(',',$_POST['Cv2VeiculosCarros']['som']);
			
			$carros->som = $str4;
		}
		$veiculos->id_tipo = 1;
		$veiculos->id_vendedor = Yii::app()->user->id_vendedor;
		$movimentacao->id_tipo = 1;
		if($veiculos->validate()){ 
			
			###################################################
			################ UPLOAD DE IMAGENS ################
			###################################################
			
			Yii::import('application.extensions.upload.Upload');
			
			$imgs = array();
			foreach ($_FILES['Cv2VeiculosVeiculos'] as $k => $l) {
				if (is_array($l)) {
					foreach ($l as $i => $v) {
						if (!array_key_exists($i, $imgs))
							$imgs[$i] = array();
						$imgs[$i][$k] = $v;
					}
				} else {
					$imgs[0][$k] = $l;
				}
			}
			
			$i = 1;
			foreach ($imgs as $img) {
				set_time_limit(0);

				$imagem = new Upload($img);

				if ($imagem->uploaded) {
					$pasta = '../imagens/' . $veiculos->id_vendedor . '/';
					$imagem->process($pasta);
					if ($imagem->processed) {
						$veiculos->{"foto_$i"} = $imagem->file_dst_name;
						$imagem->clean();
					} else {
						echo 'error : ' . $imagem->error;
					}
				}
				$i++;
			}
		
			$veiculos->save(); 
			$carros->id_veiculo = $veiculos->primaryKey;
			$movimentacao->id_veiculo = $veiculos->primaryKey;
			$movimentacao2->id_veiculo = $veiculos->primaryKey;
			if($veiculos->destaque === 1){
				$movimentacao2->id_tipo = 3;
			}
			if($veiculos->destaque === 0){   
				$movimentacao2->id_tipo = 4;
			}
			$carros->save();
			$movimentacao->save();
			$movimentacao2->save();
			
			$this->redirect(array('/anuncios/carros'));
		}
	}
	
	$this->render('create',array(
	'veiculos'=>$veiculos,
	'carros'=>$carros,
	'movimentacao'=>$movimentacao
	
	));
}


	public function actionUpdate($id){

$veiculos=$this->loadModel($id);
$carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao2=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
if(isset($carros->conforto)){
    $carros->conforto = explode(',', $carros->conforto);
}

if(isset($carros->exterior)){
    $carros->exterior = explode(',', $carros->exterior);
}

if(isset($carros->seguranca)){
    $carros->seguranca = explode(',', $carros->seguranca);
}

if(isset($carros->som)){
    $carros->som = explode(',', $carros->som);
}

         $this->performAjaxValidation(array($veiculos,$carros));
 if(!empty($_POST)){

  $veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
  $carros->attributes=$_POST['Cv2VeiculosCarros'];  
  
  if(($_POST['Cv2VeiculosCarros']['conforto']) > 1){
    $str = implode(',',$_POST['Cv2VeiculosCarros']['conforto']);
    
    $carros->conforto = $str;
}

if(($_POST['Cv2VeiculosCarros']['exterior']) > 1){
    $str2 = implode(',',$_POST['Cv2VeiculosCarros']['exterior']);
    
    $carros->exterior = $str2;
}

if(($_POST['Cv2VeiculosCarros']['seguranca']) > 1){
    $str3 = implode(',',$_POST['Cv2VeiculosCarros']['seguranca']);
    
    $carros->seguranca = $str3;
}

if(($_POST['Cv2VeiculosCarros']['som']) > 1){
    $str4 = implode(',',$_POST['Cv2VeiculosCarros']['som']);
    
    $carros->som = $str4;
}

if(($_POST['Cv2VeiculosCarros']['som']) > 1){
    $str4 = implode(',',$_POST['Cv2VeiculosCarros']['som']);
    
    $carros->som = $str4;
}
         
  if($veiculos->validate()){ 
                        ###################################################
			################ UPLOAD DE IMAGENS ################
			###################################################	
			Yii::import('application.extensions.upload.Upload');
			
			$imgs = array();
			foreach ($_FILES['Cv2VeiculosVeiculos'] as $k => $l) {
				if (is_array($l)) {
					foreach ($l as $i => $v) {
						if (!array_key_exists($i, $imgs))
							$imgs[$i] = array();
						$imgs[$i][$k] = $v;
					}
				} else {
					$imgs[0][$k] = $l;
				}
			}
			
			$i = 1;
			foreach ($imgs as $img) {
				set_time_limit(0);

				$imagem = new Upload($img);

				if ($imagem->uploaded) {
					$pasta = '../imagens/' . $veiculos->id_vendedor . '/';
					$imagem->process($pasta);
					if ($imagem->processed) {
						$veiculos->{"foto_$i"} = $imagem->file_dst_name;
						$imagem->clean();
					} else {
						echo 'error : ' . $imagem->error;
					}
				}
				$i++;
			}
     $veiculos->save();
     
     $carros->id_veiculo = $veiculos->primaryKey;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
     $movimentacao2->id_veiculo = $veiculos->primaryKey;
 if($veiculos->destaque === 1){
     $movimentacao2->id_tipo = 3;
 }
 if($veiculos->destaque === 0){   
     $movimentacao2->id_tipo = 4;
 }
     $carros->save();
     $movimentacao->save();
      $movimentacao2->save();
     
     $this->redirect(array('/anuncios'));
   }
 }
       
    $this->render('update',array(
        'veiculos'=>$veiculos,
        'carros'=>$carros,
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
             $carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
             $carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
             $carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
             $carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
//                $carros=Cv2VeiculosCarros::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
//            
//              $carros->delete();
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
