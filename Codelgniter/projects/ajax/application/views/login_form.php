

<div id="login_form">
	<h1>Login</h1>
	<?php
	
	echo form_open('login/validate_credentials');
	echo form_input(array(
  		'name' => 'username',
  		'value' => '',
  		'placeholder' => 'Username',
  ));
	echo form_password(array(
      'name' => 'password',
      'value' => '',
      'placeholder' => 'Password'
  ));
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account');
	echo form_close();
	

  
 if(isset ($error)) { ?>
  <div id="login_error" <p="" class="error"> echo $error; 

  </div><?php
   } 
	?>
</div>
