
	
	<div class="container">


		<div class="row">
			<div class="span6">
				<h4 class="lead"> 1 .Tell me about your self</h4>
	<?php echo Form_open('edgar/descProject');?>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="name">Name:</label>
          <?php
                        $name = array(
              'name'        => 'name',
              'id'          => 'name',
              'placeholder'   => 'i love to know your name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('name'));
							
							
							echo form_input($name);
							
							?>
        </div>
      </div>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('email'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="email">Email:</label>
          <?php
                        $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'placeholder'   => 'put your Email address here',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('email')
            );
							
							
							echo form_input($email);
							
							?>
        </div>
      </div>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('phone'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="phone">Phone:</label>
          <?php
                        $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'placeholder'   => 'phone is the fasted ,whats your number?',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('phone')
			  
            );
							
							
							echo form_input($phone);
							?>
        </div>
      </div>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('city'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="city">City</label>
          <?php
                        $city = array(
              'name'        => 'city',
              'id'          => 'city',
              'placeholder'   => 'your current region of work/ residence',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('city')
            );
							
							
							echo form_input($city);
							
							?>
        </div>
      </div>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('message'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="message">whats the project about</label>
          <?php
                        $message = array(
              'name'        => 'message',
              'id'          => 'email',
              'placeholder'   => 'this is where you tell me about the project',
              'class'        => 'span6',
              'rows'       => '6',
			  'value'=> set_value('message')
            );
							
							
							echo form_textarea($message);
							
							?>
        </div>
      </div>
      <div class="control-group">
        <div class="controls action">
          <?php
							
							              $submit = array(
              'name'        => 'submit',
              'value'          => 'Proceed',
              'class'        => 'btn  btn-large pull-right btn-primary ',
              'type'       => 'submit',
            ); 
                       echo  form_submit($submit)
					   ?>
        </div>
      </div>
      <?php echo Form_close();?> </div>
			<div class="span5 offset1">
				<div class="address">
					<div class="pad"></div>
                    <div class="pad"></div>
					<div class="social">
				<h1 class="one">1</h1>
					</div>
				</div>
			</div>
		</div>

	</div>

