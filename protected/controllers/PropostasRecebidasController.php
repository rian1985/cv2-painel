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
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('index', array(
            'list' => $list
        ));
	}
        
        public function actionCarros()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Carro'  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('carros', array(
            'list' => $list
        ));
	}
        
        public function actionMotos()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Moto'  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('motos', array(
            'list' => $list
        ));
	}
        
        public function actionCaminhoes()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Caminhão'  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('caminhoes', array(
            'list' => $list
        ));
	}
        
        public function actionOnibus()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Ônibus'  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('onibus', array(
            'list' => $list
        ));
	}
        
        public function actionNautica()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Nautica' ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

            
         $this->render('nautica', array(
            'list' => $list
        ));
	}
        
        public function actionOutros()
	{
		$list = Yii::app()->db->createCommand("SELECT cv2_propostas_recebidas.nome, cv2_propostas_recebidas.status, cv2_propostas_recebidas.id, cv2_propostas_recebidas.proposta, cv2_propostas_recebidas.email, cv2_propostas_recebidas.data, cv2_veiculos_veiculos.id_vendedor, cv2_veiculos_tipos.descricao  FROM centraldoveicu.cv2_propostas_recebidas INNER JOIN cv2_veiculos_veiculos ON cv2_propostas_recebidas.id_veiculo = cv2_veiculos_veiculos.id INNER JOIN cv2_veiculos_tipos ON cv2_veiculos_veiculos.id_tipo = cv2_veiculos_tipos.id
WHERE cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor." AND cv2_propostas_recebidas.status = 0 AND cv2_veiculos_tipos.descricao = 'Outros'  ORDER BY cv2_propostas_recebidas.data DESC;")->queryAll();

           
         $this->render('outros', array(
            'list' => $list
        ));
	}

         public function actionRestaura($id) {
        
        if (isset($id) && $id > 0) {
             $model=$this->loadModel($id);
            $model->status = '0';
            if ($model->update('status')) {
                Yii::app()->user->setFlash('sucesso', 'Proposta restaurada com sucesso.');
 
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar restaurar proposta.');              
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/lixeira/propostas-recebidas'));
        }
       
    }
        
        
        public function actionDelete() {
        $id = $_GET['id'];
        // we only allow deletion via POST request
        if (isset($id) && $id > 0) {
             $model=$this->loadModel($id);
            
            $model->status = '1';
            if ($model->update('status')) {
                Yii::app()->user->setFlash('sucesso', 'Proposta removida com sucesso.');
                
            } else {
                Yii::app()->user->setFlash('error', 'Falha ao tentar remover proposta.');
               
            }
               $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/propostas-recebidas'));
        }
    }
        
         public function actionView($id) {
        $model = $this->loadModel($id);
       
        $this->render('view', array(
            'model' => $model,
        ));
    }
        public function loadModel($id)
	{
		$model=  Cv2PropostasRecebidas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        }
?>
