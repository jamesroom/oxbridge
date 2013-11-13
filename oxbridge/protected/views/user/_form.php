<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'password_repeat'); ?>
        <?php echo $form->passwordField($model,'password_repeat',array('size'=>60,'maxlength'=>256)); ?>
        <?php echo $form->error($model,'password_repeat'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_num'); ?>
		<?php echo $form->textField($model,'card_num',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'card_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'professional'); ?>
		<?php echo $form->textField($model,'professional',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'professional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualificaiotn'); ?>
		<?php echo $form->textField($model,'qualificaiotn',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'qualificaiotn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->