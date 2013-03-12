<?php

class MotosController extends Controller
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
    $motos = new Cv2VeiculosMotos;
    $movimentacao = new Cv2VeiculosMovimentacoes;
    $movimentacao2 = new Cv2VeiculosMovimentacoes;
 
  $this->performAjaxValidation(array($veiculos,$motos)); 
  
  //echo Yii::app()->user->getVendedor();exit;
  
   if(!empty($_POST)){
   $veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
   $motos->attributes=$_POST['Cv2VeiculosMotos'];  
   
   
    $str = '';
if(isset($veiculos->itens)){
    $str = implode(',',$veiculos->itens);
    
    $veiculos->itens = $str;
}
  
   
   $veiculos->id_tipo = 2;
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
     
     $motos->id_veiculo = $veiculos->primaryKey;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
     $movimentacao2->id_veiculo = $veiculos->primaryKey;
 if($veiculos->destaque === 1){
     $movimentacao2->id_tipo = 3;
 }
 if($veiculos->destaque === 0){   
     $movimentacao2->id_tipo = 4;
 }
     $motos->save();
     $movimentacao->save();
     $movimentacao2->save();
     
     $this->redirect(array('index'));
   }
 }
       
    $this->render('create',array(
        'veiculos'=>$veiculos,
        'motos'=>$motos,
        'movimentacao'=>$movimentacao
        
    ));
}
   

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id){

$veiculos=$this->loadModel($id);
$motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
$movimentacao2=Cv2VeiculosMovimentacoes::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));

         $this->performAjaxValidation(array($veiculos,$motos));
 if(!empty($_POST)){

  $veiculos->attributes=$_POST['Cv2VeiculosVeiculos'];
  $motos->attributes=$_POST['Cv2VeiculosMotos'];  
  
   $str = '';
if(isset($veiculos->itens)){
    $str = implode(',',$veiculos->itens);
    
    $veiculos->itens = $str;
}
  
  if($veiculos->validate()){ 
     $veiculos->save();
     
     $motos->id_veiculo = $veiculos->primaryKey;
     $movimentacao->id_veiculo = $veiculos->primaryKey;
      $movimentacao2->id_veiculo = $veiculos->primaryKey;
 if($veiculos->destaque === 1){
     $movimentacao2->id_tipo = 3;
 }
 if($veiculos->destaque === 0){   
     $movimentacao2->id_tipo = 4;
 }
     $motos->save();
     $movimentacao->save();
      $movimentacao2->save();
     
     $this->redirect(array('/anuncios'));
   }
 }
       
    $this->render('update',array(
        'veiculos'=>$veiculos,
        'motos'=>$motos,
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
             $motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
             $motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
            $veiculos->status = '0';
            if ($veiculos->update('status')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo removido com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar remover veículo.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/lixeira'));
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
    
    
    
    public function actionDestaque($id) {
        
        if (isset($id) && $id > 0) {
             $veiculos=$this->loadModel($id);
             $motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
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
             $motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
            $veiculos->destaque = '0';
            if ($veiculos->update('destaque')) {
                Yii::app()->user->setFlash('sucesso', 'Veículo destacado com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar destacar veículo.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/anuncios'));
        }
       
    }


//	public function actionDelete($id)
//	{
//		  $veiculos=$this->loadModel($id);
//                $motos=Cv2VeiculosMotos::model()->find('id_veiculo = :id_veiculo', array(':id_veiculo' => $id));
//            
//              $motos->delete();
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
