<?php 

class AnunciosController extends Controller
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
		 $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
      `cv2_veiculos_veiculos`.descricao,      `cv2_veiculos_veiculos`.valor,
      `cv2_veiculos_veiculos`.id_vendedor,
      `cv2_veiculos_veiculos`.destaque,
       `cv2_veiculos_veiculos`.id,
     `cv2_veiculos_veiculos`.valor_promocional,
      `cv2_veiculos_veiculos`.data_cadastro,
      `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
      `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
      `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                      FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";
")->queryAll();
         $this->render('index', array(
            'list' => $list,
        ));
	
	}
        public function actionCarros()
	{
		 $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.valor,
       `cv2_veiculos_veiculos`.destaque,`cv2_veiculos_veiculos`.id,
          `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'carro'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
                 
                 $this->render('carros', array(
            'list' => $list,
        ));
	}
        
        public function actionMotos()
	{
        $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.valor,
       `cv2_veiculos_veiculos`.destaque,
        `cv2_veiculos_veiculos`.id,
       `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'moto'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
         $this->render('motos', array(
            'list' => $list,
        ));
	}
        
        public function actionCaminhoes()
	{
		 $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.valor,
        `cv2_veiculos_veiculos`.id,
        `cv2_veiculos_veiculos`.destaque,
       `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'caminhao'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
         $this->render('caminhoes', array(
            'list' => $list,
        ));
	}
        
        public function actionOnibus()
	{
		
		 $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.id,
       `cv2_veiculos_veiculos`.valor,
       `cv2_veiculos_veiculos`.destaque,
        `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'onibus'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
         $this->render('onibus', array(
            'list' => $list,
        ));
	}
        
        public function actionNautica()
	{
		 $list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.valor,
       `cv2_veiculos_veiculos`.destaque,
       `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'nautica'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
         $this->render('nautica', array(
            'list' => $list,
        ));
	}
        public function actionOutros()
	{
		$list = Yii::app()->db->createCommand("SELECT `cv2_veiculos_veiculos`.id AS `id_veiculo`,
       `cv2_veiculos_veiculos`.descricao,
       `cv2_veiculos_veiculos`.valor,
       `cv2_veiculos_veiculos`.destaque,
       `cv2_veiculos_veiculos`.id_vendedor,
       `cv2_veiculos_veiculos`.valor_promocional,
       `cv2_veiculos_veiculos`.data_cadastro,
       `cv2_veiculos_veiculos`.status,
`cv2_veiculos_movimentacoes`.data AS `data_movimentacao`,
`cv2_veiculos_movimentacoes`.id_tipo,
       `cv2_veiculos_tipos`.`descricao` AS `tipo`,   
       `cv2_veiculos_marcas`.`descricao` AS `marca`
FROM `cv2_veiculos_veiculos`    
   INNER JOIN `cv2_veiculos_tipos` ON `cv2_veiculos_veiculos`.`id_tipo` = `cv2_veiculos_tipos`.`id`
   INNER JOIN `cv2_veiculos_marcas` ON `cv2_veiculos_veiculos`.`id_marca` = `cv2_veiculos_marcas`.`id`
  INNER JOIN `cv2_veiculos_movimentacoes` ON `cv2_veiculos_movimentacoes`.`id_veiculo` = `cv2_veiculos_veiculos`.`id` 
WHERE cv2_veiculos_tipos.`descricao` = 'outros'
AND cv2_veiculos_veiculos.`status` = 0 
AND cv2_veiculos_movimentacoes.data = (SELECT MAX(cv2m2.data) 
                                       FROM cv2_veiculos_movimentacoes as cv2m2 
                                       WHERE cv2m2.id_veiculo = cv2_veiculos_movimentacoes.id_veiculo)
AND cv2_veiculos_movimentacoes.id_tipo = 1 AND cv2_veiculos_veiculos.id_vendedor = ".Yii::app()->user->id_vendedor.";")->queryAll();
         $this->render('outros', array(
            'list' => $list,
        ));
	}
}

?>