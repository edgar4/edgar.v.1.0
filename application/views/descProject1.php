
	
	<div class="container">


		<div class="row">
			<div class="span6">
				<h4 class="lead">2. Tell me alittle more about the project</h4>
	<?php echo Form_open('edgar/descProject2');?>
      <div class="control-group">
    
      <?php echo"<div class=\"error\">".  form_error('aim'). "</div>";?>
        <div class="controls">
         <label class="control-label" for="aim">main aim of project </label>
          <?php
                        $aim = array(
              'name'        => 'aim',
              'id'          => 'name',
              'placeholder'   => 'aim of project',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('aim'));
							
							
							echo form_input($aim);
							
							?>
        </div>
      </div>
      <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('least'). "</div>";?>
      <label class="control-label" for="least">least number of pages </label>
        <div class="controls">
     
          <?php
                        $least = array(
              'name'        => 'least',
              'id'          => 'city',
              'placeholder'   => 'least number of pages',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('least')
            );
							
							
							echo form_input($least);
							
							?>
        </div>
      </div>
        <div class="control-group">
      <?php echo"<div class=\"error\">".  form_error('target'). "</div>";?>
        <div class="controls">
        <label class="control-label" for="target">Target audience(s)  </label>
          <?php
                        $target = array(
              'name'        => 'target',
              'id'          => 'phone',
              'placeholder'   => 'target audience ',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('target')
			  
            );
							
							
							echo form_input($target);
							?>
        </div>
      </div>
  
   
  

      <div class="control-group">
        <div class="controls action">
          <?php
							
							              $submit = array(
              'name'        => 'submit',
              'value'          => 'Almost done',
              'class'        => 'btn  btn-large pull-right btn-warning',
              'type'       => 'submit',
            ); 
                       echo  form_submit($submit)
					   ?>
                       
                       
                         <input type="hidden" name="name" value="<?php echo set_value('name')?>"/>
                            <input type="hidden" name="email" value="<?php echo set_value('email')?>" /> 
                               <input type="hidden" name="phone" value="<?php echo set_value('phone')?>" id="email" /> 
                                  <input type="hidden" name="city" value="<?php echo set_value('city')?>" id="email" /> 
                                     <input type="hidden" name="message" value="<?php echo set_value('message')?>" id="email" /> 
        </div>
      </div>
      <?php echo Form_close();?> </div>
			<div class="span5 offset1">
				<div class="address">
                <div class="pad"></div>
                <div class="pad"></div>
				<h1 class="two">2</h1>
				</div>
			</div>
		</div>

	</div>

