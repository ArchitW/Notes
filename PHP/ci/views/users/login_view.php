<h2>Login Page</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/13/2018
 * Time: 1:12 PM
 */

if($this->session->flashdata('errors')){

	echo $this->session->flashdata('errors');
}
$attribute = array(
	'id'=>'login_form',
	'class'=>'form-horizontal'
);
echo form_open('users/login',$attribute);
?>
<div class="form-group">
<?php
echo form_label('Username');
$attribute = array(
	'id'=>'username',
	'name'=>'username',
	'class'=>'form-control',
	'type'=>'text',
	'placeholder' =>'Enter User Name'
);
echo form_input($attribute);

echo form_label('Username');
$attribute = array(
	'id'=>'password',
	'name'=>'password',
	'class'=>'form-control',
	'type'=>'password',
	'placeholder'=>'Enter Password'
);
echo form_password($attribute);
?>
</div>
<div class="form-group">
	<label>Reenter Password</label>
<input type="password" name="pass2" id="pass2" placeholder="Reenter Password" class="form-control">
</div>

<!---
<div class="form-group">
	<label>Number Only</label>
	<input type="text" name="nums" id="nums"  class="form-control">
</div>-->
	<div class="form-group">
	<?php
$attribute = array(
	'id'=>'submit',
	'class'=>'btn btn-primary',
	'name'=>'Submit',
	'value'=>'Login',
	'placeholder'=>'Submit'
);
echo form_submit($attribute);
?>

</div>
<?php
echo form_close();
