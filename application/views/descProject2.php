
<div class="container">
  <div class="row">
    <div class="span6">
      <h4 class="lead">3.Put the project in your own words </h4>
      <?php echo Form_open('edgar/descProject3');?>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('bussines'). "</div>";?>
        <div class="controls">
          <label class="control-label" for="business">Type of business </label>
          <?php
		  $css= "classs=\"span6\" ";
                        $bussines = array(
						
              'bussines'        => 'Business',
               'technology'  => 'Technology',
                  'food'    => 'Food',
                  'finance'   => 'Finance',
                  'beauty' => 'Beauty',
				  'other' => 'Other',
                 
			  'value'=> set_value('bussines')
            );
							
							
							echo form_dropdown('type',$bussines,"",$css)
							
							?>
        </div>
      </div>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('platform'). "</div>";?>
        <div class="controls">
          <label class="control-label" for="platform">Type of platform </label>
          <?php
		  $css= "classs=\"span6\" ";
                        $platform = array(
              'cms'        => 'cms capable',
               'static'  => 'static',
                  'custom'    => 'custom platform',
                  
                 
			  'value'=> set_value('newPlatform')
            );
							
							
							echo form_dropdown('newPlatform',$platform,"",$css)
							
							?>
        </div>
      </div>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('service'). "</div>";?>
        <div class="controls">
          <label class="control-label" for="platform">Other services</label>
          <?php
		  $css= "classs=\"span6\" ";
        		
							
							echo form_checkbox('service', 'interface', false,$css). "Interface Design";
							
							?>
        </div>
      </div>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('service'). "</div>";?>
        <div class="controls">
          <?php
		  $css= "classs=\"span6\" ";
        		
							
							echo form_checkbox('service', 'Banner Design', false,$css). "  Banner Design";
							
							?>
        </div>
      </div>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('seo'). "</div>";?>
        <div class="controls">
          <?php
		  $css= "classs=\"span6\" ";
        		
							
							echo form_checkbox('service', 'S.E.O', false,$css). " S.E.O";
							
							?>
        </div>
      </div>
      <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('service'). "</div>";?>
        <div class="controls">
          <?php
		  $css= "classs=\"span6\" ";
        		
							
							echo form_checkbox('service', 'Analytics', false,$css). " Analytics";
							
							?>
        </div>
      </div>
      <div class="control-group">
        <input type="text" name="name" value="<?php echo set_value('name')?>"/>
        <?php echo"<div class=\"error\">".  form_error('message-long'). "</div>";?>
        <div class="controls">
          <?php
                        $message = array(
              'name'        => 'message-long',
              'id'          => 'elm1',
              'placeholder'   => 'Message',
              'class'        => 'span6',
              'rows'       => '6',
			  'value'=> set_value('message-long')
            );
							
							
							echo form_textarea($message);
							
							?>
        </div>
      </div>
      <input type="hidden" name="name" value="<?php echo set_value('name')?>"/>
      <input type="hidden" name="email" value="<?php echo set_value('email')?>" />
      <input type="hidden" name="phone" value="<?php echo set_value('phone')?>" id="email" />
      <input type="hidden" name="city" value="<?php echo set_value('city')?>" id="email" />
      <input type="hidden" name="message" value="<?php echo set_value('message')?>" id="email" />
      <input type="hidden" name="aim" value="<?php echo set_value('aim')?>"/>
      <input type="hidden" name="least" value="<?php echo set_value('least')?>" />
      <input type="hidden" name="target" value="<?php echo set_value('target')?>" id="email" />
      <input type="hidden" name="type" value="<?php echo set_value('type')?>" id="email" />
      <input type="hidden" name="newPlatform" value="<?php echo set_value('newPlatform')?>" id="email" />
      <input type="hidden" name="service" value="<?php echo set_value('service')?>" id="email"/>
      <div class="control-group">
        <div class="controls action">
          <?php
							
							              $submit = array(
              'name'        => 'submit',
              'value'          => 'that\'s it Finish',
              'class'        => 'btn  btn-large pull-right btn-success',
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
        <h1 class="three">3</h1>
      </div>
    </div>
  </div>
</div>
