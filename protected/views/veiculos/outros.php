<div class="TituloPaginas">Dados do Veículo</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	<span class="NomeUsuario">Descrição do veículo (ex. Corsa, Palio, Corolla)<br><input type="text" class="Input"></span>
        
    </div>
    
</div>
<div class="TituloPaginas">Fotos</div>
<div class="CaixaPaginas">

	<div class="DivFotosVeiculos">
    
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="clear:both"></div>
    </div>
    
</div>
<div class="TituloPaginas">Localização do veículo</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	Localização<br><input type="text" class="Input">
        
    </div>
    
</div>
<div class="TituloPaginas">Características do Veículo</div>
<div class="CaixaPaginas">

	<div class="DivCaracteristicas">Tipo de veículo<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">
    	Ano<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Marca<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Modelo<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">
    	Único dono? <br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Condições do veículo?<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Valor (R$)<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">Valor promocional (R$)<br><input type="text" class="Input"></div>
    
    <div style="clear:both"></div>
    
</div>

<div class="TituloPaginas">Observações</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	<textarea rows="10" cols="83"></textarea>
        
    </div>
    
</div>
<div class="DivCampos"><input type="submit" value="Salvar" class="BotaoPadrao1"></div>