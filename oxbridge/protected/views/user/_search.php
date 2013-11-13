<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_time'); ?>
		<?php echo $form->textField($model,'last_login_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'card_num'); ?>
		<?php echo $form->textField($model,'card_num',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'professional'); ?>
		<?php echo $form->textField($model,'professional',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualificaiotn'); ?>
		<?php echo $form->textField($model,'qualificaiotn',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->