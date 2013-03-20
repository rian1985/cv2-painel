
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Controle de orçamentos</title>

<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.1.7.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>

</head>

<body>

<div class="TopoGeral">

	<div class="TopoGeralMeio">
    
    	<div class="TopoItensUsuario">
    	
            <ul>
                <li><a href="<?php echo $this->createUrl('/.'); ?>">Home</a></li>
                <li>|</li>
                <li><a href="<?php echo $this->createUrl('clientes/dados/') . "?id=".Yii::app()->user->id_vendedor.""; ?>">Meus dados</a></li>
                <li>|</li>
                <li><a><?php 

        echo CHtml::link('Sair', Yii::app()->createUrl('site/logout')); ?></a></li>
              
            </ul>
            
        </div>
        
        <div class="TopoAvisos">
    	
            <ul>
                <li><div class="CaixaNumeroAviso">2</div></li>
                <li><a href="<?php echo $this->createUrl('/mensagens/lista'); ?>">Mensagens</a></li>
            </ul>
            
        </div>
        
        <div style="clear:both"></div>

	</div>

</div>

<div class="CaixaLinhaGeral"></div>

<div class="IconesTopo">
	
    <div style="float:left"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png"></div>
    <a href="<?php echo $this->createUrl('veiculos/outros'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_outros.png"><br>Outros</a>
    <a href="<?php echo $this->createUrl('veiculos/nautica'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_nautica.png"><br>Náutica</a>
    <a href="<?php echo $this->createUrl('/onibus/create'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_onibus.png"><br>Ônibus</a>
    <a href="<?php echo $this->createUrl('/caminhoes/create'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_caminhao.png"><br>Caminhões</a>
    <a href="<?php echo $this->createUrl('/motos/create'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_moto.png"><br>Motos</a>
	<a href="<?php echo $this->createUrl('/carros/create'); ?>" class="Icone"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ico_carro.png"><br>Carros</a>
    
	<div style="clear:both"></div>

</div>
    
<div class="CaixaSite">
	
    <div style="float:left;width:220px;">
    
    	<ul class="ItensMenu">
        
            <li><a href="<?php echo $this->createUrl('/'); ?>">Resumo</a></li>
        
        </ul>
        <div class="TituloMenus">Meus anúncios</div>
        <ul class="ItensMenu">
        
            <li><a href="<?php echo $this->createUrl('/anuncios'); ?>">Anúncios</a></li>
            <li><a href="<?php echo $this->createUrl('/vendidos'); ?>">Vendidos</a></li>
            <li><a href="<?php echo $this->createUrl('/propostas-recebidas'); ?>">Propostas recebidas</a></li>
            <li><a href="<?php echo $this->createUrl('/lixeira'); ?>">Lixeira</a></li>
        
        </ul>
        <div class="TituloMenus">Configurações</div>
        <ul class="ItensMenu">
        
            <li><a href="index.php?p=conf_menus">Menus de seu site</a></li>
            <li><a href="index.php?p=conf_aparencia">Aparência site</a></li>
            <li><a href="index.php?p=conf_contato">Contato</a></li>
        
        </ul>
        <div class="TituloMenus">Pagamentos e faturas</div>
        <ul class="ItensMenu">
        
            <li><a href="index.php?p=fin_faturas">Faturas à pagar</a></li>
            <li><a href="index.php?p=fin_historico">Histórico de faturas</a></li>
        
        </ul>
        
        <div class="TituloMenus">Administrativo</div>
        <ul class="ItensMenu">
        
            <li><a href="<?php echo $this->createUrl('/clientes'); ?>">Clientes</a></li>
            <li><a href="<?php echo $this->createUrl('/clientes/create'); ?>">Cadastrar cliente</a></li>
            <li><a href="<?php echo $this->createUrl('/mensagens'); ?>">Mensagens do sistema</a></li>
        
        </ul>
        
    </div>
    
    <div style="float:left;width:730px;">
        
    <?php echo $content; ?>
    
    </div>
    
    <div style="clear:both"></div>
    
</div>

<div style="padding:15px 0;font-size:11px;color:#999999;text-align:center">&reg; Painel Central do Veículo - &copy; Todos os direitos reservados.</div>

</body>
</html>
