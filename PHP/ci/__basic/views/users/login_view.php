<h2>Login Form</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/12/2018
 * Time: 8:46 PM
 */
$attributes = array('id'=>'login_form','class'=>'form-horizontal');?>
<?php echo form_open('users/login',$attributes);?>

<div class="form-group">
	<?php echo form_label('Username'); ?>
	<?php

	$data = array(
		'class'=>'form-control',
		'name' => 'username',
		'placeholder'=> 'user@email.com',

	);
	echo form_input($data);

		?>

	<?php //password
	echo form_label('password');
	$data = array(
		'class'=>'form-control',
		'type' => 'password',
		'name' => 'password'
	);
	echo form_input($data);


	?>

	<?php
	$data = array(
		'type' => 'submit',
		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' =>'submit'

	);
	echo form_submit($data);

	?>
</div>

<?php echo form_close();?>


