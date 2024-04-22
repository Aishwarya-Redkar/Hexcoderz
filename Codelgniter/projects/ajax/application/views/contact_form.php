<div id="contacts_form">
	<h1>Contact Us</h1>
	<?php
	
	echo form_open('contact/submit');
	echo form_input(array(
  		'name' => 'name',
  		'value' => '',
  		'placeholder' => 'Name',
      'id'=>'name'
  ));
	echo form_input(array(
      'name' => 'email',
      'value' => '',
      'placeholder' => 'Email',
      'id'=>'email'
  ));

		echo form_textarea(array(
      'name' => 'message',
      'cols' => '40',
      'rows'=>'12',
      'placeholder' => 'Message',
      'id'=>'message'
  ));
		?><br><?php
	echo form_submit('submit', 'Submit','id="submit"');

	echo form_close();
	

  
 if(isset ($error)) { ?>
  <div id="login_error" <p="" class="error"> echo $error; 

  </div><?php
   } 
	?>
</div>

<script type="text/javascript">
  $('#submit').click(function() {

      var name=$('#name').val();
    if(!name){
      alert('Plz enter your name');
      return false;
    }

    var form_data={
      name:$('#name').val(),
      email:$('#email').val(),
      message:$('#message').val(),
      ajax:'1'
    };
      $.ajax({
        url:"<?php echo site_url('contact/submit'); ?>",
        type: 'POST',
        data: form_data,
        success:function(msg) {
          $('#main_content').html(msg);
        }
      });

    return false;
  });


</script>
