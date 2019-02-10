
<h2>Register</h2>

<?php 
$attribute=array('id'=>'register_form','class'=>'form-horizontal');

	
echo validation_errors('<p class="bg-danger">');

if($this->session->flashdata('errors')):
	echo $this->session->flashdata('errors');
endif;

?>



<?php echo form_open('users/register',$attribute);?>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'firstname',
			'placeholder'=>'Enter First Name'
		);

		echo form_label('First name');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'lastname',
			'placeholder'=>'Enter Last Name'
		);

		echo form_label('Last name');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'username',
			'placeholder'=>'Enter Username'
		);

		echo form_label('Username');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'email',
			'placeholder'=>'Enter email'
		);

		echo form_label('email');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'password',
			'placeholder'=>'Enter Password'
		);

		echo form_label('Password');
		echo '<br>';
		echo form_password($data);

	?>
	
</div>

<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'confirm_password',
			'placeholder'=>'Confirm Password'
		);

		echo form_label('Confirm Password');
		echo '<br>';
		echo form_password($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'btn btn-default',
			'name'=>'submit',
			'value'=>'submit'
		);

		echo form_submit($data);

	?>
	
</div>

<?php echo form_close();
?> 