<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(	'id'=>'redemption-form',	'enableAjaxValidation'=>false,)); ?><?php $reswards = UtilityManager::getUserRewardsByUserId($model->user_id);?>	<p class="help-block">Available <span class="required">Rewards</span>  <?php echo $reswards['commission'] - $reswards['redemption']; ?></p>	<?php echo $form->errorSummary($model); ?>		<?php echo $form->textFieldRow($model,'points',array('class'=>'span2','maxlength'=>100)); ?>		<div class="form-actions">		<?php $this->widget('bootstrap.widgets.TbButton', array(			'buttonType'=>'submit',			'type'=>'primary',			'label'=>$model->isNewRecord ? 'Transfer' : 'Transfer',		)); ?>	</div><?php $this->endWidget(); ?>