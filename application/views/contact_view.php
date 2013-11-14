
<div class="container">
  <div class="row">
    <div class="span6">
      <h3 class="offset1">Drop a word tow </h3>
      <?php 
	  $attr= array(
	  'id'=> 'contact-form'
	  );
	  
	  echo Form_open('edgar/sendEmail',$attr);?>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
        <div class="controls">
          <?php
                        $name = array(
              'name'        => 'name',
              'id'          => 'name',
              'placeholder'   => 'Name', 
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
          <?php
                        $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'placeholder'   => 'Email', 'class'        => 'span6',
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
          <?php
                        $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'placeholder'   => 'phone', 'class'        => 'span6',
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
          <?php
                        $city = array(
              'name'        => 'city',
              'id'          => 'city',
              'placeholder'   => 'City', 'class'        => 'span6',
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
          <?php
                        $message = array(
              'name'        => 'message',
              'id'          => 'email',
              'placeholder'   => 'Message', 'class'        => 'span6',
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
              'value'          => 'Send',
              'class'        => 'btn  btn-default',
              'type'       => 'submit',
            ); 
                       echo  form_submit($submit)
					   ?>
        </div>
      </div>
      <?php echo Form_close();?> </div>
    <div class="span5 offset1">
      <div class="address">
        <h3>&nbsp;</h3>
        <p> am nairobi based give me a call on. </p>
        <div class="info"> <i class="contact phone"></i> 0717113886 or 0735048886 </div>
        <div class="info"> <i class="contact email"></i> info@edgar.co.ke </div>
        <hr>
        <h3>am very social</h3>
        <div class="social round"> <a href="#"><img src="<?php echo base_url()."img/socials/facebook.png"?>" alt="facebook" height="32" width="32" /></a> <a href="#"><img src="<?php echo base_url()."img/socials/twitter.png"?>" alt="twitter" height="32" width="32"  /></a> <a href="#"><img src="<?php echo base_url()."img/socials/linkedin.png"?>" alt="linkedin"  height="32" width="32"/></a> <a href="#"><img src="<?php echo base_url()."img/socials/github.png"?>" alt="github" height="32" width="32" /></a> </div>
      </div>
    </div>
  </div>
</div>
